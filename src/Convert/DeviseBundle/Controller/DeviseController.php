<?php

namespace Convert\DeviseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Convert\DeviseBundle\Entity\Devise;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Convert\DeviseBundle\Form\DeviseType;
use Convert\DeviseBundle\Entity\Historique;

class DeviseController extends Controller {

    public $duree = 4;
    private $nbmax;
    private $nbipclient = 0;
    private $cour = 0;
    private $date;
    private $bloque = false;

    public function indexAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Devise');
        $montant = "";
        $source = "";
        $cible = "";
    
        $devise = $repository->findAll();
        return $this->render('ConvertDeviseBundle:Devise:index.html.twig', array('devise' => $devise, 'cour' => $this->cour, 'montant' => $montant, 'source' => $source, 'cible' => $cible));
    }

    public function historiqueAction() {
       $source=null;
        $cible=null;
        $request = $this->getRequest();
        $montant = "";

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Devise');
        $devise = $repository->findAll();
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $source = $request->request->get('_source');
            $cible = $request->request->get('_cible');
            $montant = $request->request->get('_montant');
            $sourcecible = $source . $cible;
            $this->getparamAction();
			//connexion entre api yahoo et application
            $this->convertAction($sourcecible);
            $t = new \Datetime();
            $t->getTimestamp();

            $datedemande = $t;
            $etatip = 1;
            //adresse ip du client
            $ipdclient = $_SERVER["REMOTE_ADDR"];
            $this->getclientAction($ipdclient, $datedemande);
            $cour = $this->cour;
            $nbdemande = 1;

            $hist = new Historique();
            $hist->setSource($source);
            $hist->setCible($cible);
            $hist->setDatedemande($datedemande);
            $hist->setNbdemande($nbdemande);           
            $hist->setCour($cour);
            $hist->setMontant($montant);
            $hist->setIpdclient($ipdclient);
            if ($this->bloque == true) {
                $etatip = 0;
                $hist->setEtatip($etatip);
                $em = $this->getDoctrine()->getManager();
                $em->persist($hist);
                $em->flush();
                return $this->render('ConvertDeviseBundle:Devise:blacklist.html.twig');
            } else {
                  $hist->setEtatip($etatip);
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($hist);
                  $em->flush();
            }
        }
        return $this->render('ConvertDeviseBundle:Devise:index.html.twig', array('devise' => $devise, 'cour' => $this->cour, 'montant' => $montant, 'source' => $source, 'cible' => $cible));
    }

    public function paramAction() {
        //on recupere la requete
        $request = $this->getRequest();

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $id = 1;
            $duree = $request->request->get('_duree');
            $nbmax = $request->request->get('_nbmax');
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ConvertDeviseBundle:Param');
            // On récupère l'entité correspondant à l'id $id
            $param = $repository->find($id);

            $param->setDuree($duree);
            $param->setNbmax($nbmax);
            $em = $this->getDoctrine()->getManager();
            $em->persist($param);
            $em->flush();
        } else {
            return $this->render('ConvertDeviseBundle:Devise:param.html.twig');
        }
        return $this->redirect("/ConvertDevise/web/admin/voir");
    }

    public function getparamAction() {
        $id = 1;
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Param');
        // On récupère l'entité correspondant à l'id
        $param = $repository->find($id);
        $this->duree = $param->getDuree();
        $this->date = $this->duree;
        // nombre max de demande
        $this->nbmax = $param->getNbmax();
    }

    public function getclientAction($ip, $time) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Historique');

        // On récupère l'entité correspondant 
        $historique = $repository->findAll();

        foreach ($historique as $ar) {
            $ipc = $ar->getIpdclient();
            $etatipc = $ar->getEtatip();
            // converti format date en seconde
            $date = $ar->getDatedemande();
            $date->format('i');
            $time->format('i');
            //date chaque requete client
            $mindeb = $date->getTimestamp();
            //date de la requete courante
            $minfin = $time->getTimestamp();

            //si pendant (($minfin - $mindeb))le nombre de demande X($this->nbipclient)>Y($this->nbmax) fixé pendant et d>dMax
             //ici le parametre duree(X) est en minute on le converti en seconde 
            if (($minfin - $mindeb) < $this->duree * 60) {

          //si l'adresse ip client courant est egale  l'une  des adresse stocké
                if ($ip == $ipc) {
                    //incremente de 1
                    $this->nbipclient = $this->nbipclient + 1;
                }
            }
            /*si le nombre d'adresse ip compté est superieur au max fixé par admin ou il etait bloque 
            on lui bloque pendant 120 s=2mn (normalement c'est une heure mais  on a pris 2 min pour les testes) */
            if ($this->nbipclient >= $this->nbmax || ($etatipc==0  && ($minfin - $mindeb)<240 )) {
                $this->bloque = true;
            } else {
                $this->bloque = false;
            }
        }
    }

    public function convertAction($allCrossName) {
        //$allCrossName='EURUSD';
        $context = stream_context_create(array('http' => array('header' => 'Connection:close')));
        $sql_base_url = "http://query.yahooapis.com/v1/public/yql";
        $sql_query = "select id,Rate,Date,Time from yahoo.finance.xchange where pair in ('" . $allCrossName . "')";
        $sql_query_url = $sql_base_url . "?q=" . urlencode($sql_query) .
                "&format=json&env=store://datatables.org/alltableswithkeys";

        $session = curl_init($sql_query_url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        
        $query = json_decode($json);
        //on recupere le champ json correspondant a la somme  
        $cour = $query->{'query'}->{'results'}->{'rate'}->{'Rate'};
        //on le met dans cours glob
        $this->cour = $cour;
    }

    public function compteAction() {
        return $this->render('ConvertDeviseBundle:Devise:formulaire.html.twig');
    }
   public function mailAction() {
       $pseudo='keny';
        $mailer = $this->get('mailer');
        $contenu = $this->renderView('ConvertDeviseBundle:Devise:email.txt.twig', array(
            'pseudo' => $pseudo
        ));
// $nbParPage = $this->container->getParameter('tbrsite.nombre_par_page');
// Puis on envoie l'e-mail, par exemple :
//mail('refane@live.fr', 'Inscription OK', $contenu);
        // Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
        //$path='http://www.gchagnon.fr/cours/cours.pdf';
        $path="../web/img/sujetXML.pdf";
        $message = \Swift_Message::newInstance()
                ->setSubject('Piece joint')
                ->setFrom('blablabla@gmail.com')
                ->setTo('kenyramses@gmail.com')
                ->setBody($contenu)
              ->attach(\Swift_Attachment::fromPath($path, "application/octet-stream"));


        // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
        $mailer->send($message);
        
     $mes="mail envoyé";
        // N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
        return $this->render('ConvertDeviseBundle:Devise:capecha.html.twig',array('message'=>$mes));
       
    }
    public function capechaAction() {
        return $this->render('ConvertDeviseBundle:Devise:capecha.html.twig');
    }
    public function ajouterAction() {
        //on cree une formulaire devise
        $entity = new Devise();
        $form = $this->createForm(new DeviseType(), $entity);
        // On récupère la requête
        $request = $this->getRequest();

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            $form->bind($request);

            if ($form->isValid()) {
                // Handle the uploaded images          
                $devise = $form->getData()->getDevise();
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'audio bien ajouté' + $entity->getDevise());
                $message = "audio bien ajouté";
                return $this->render('ConvertDeviseBundle:Devise:ajouter.html.twig', array('form' => $form->createView(), 'message' => $message));
            }
        }
        return $this->render('ConvertDeviseBundle:Devise:ajouter.html.twig', array('form' => $form->createView()));
    }

    public function voirAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Devise');

        // On récupère l'entité correspondant à l'id
        $devise = $repository->findAll();
        return $this->render('ConvertDeviseBundle:Devise:voir.html.twig', array('devise' => $devise));
    }

    public function voircourbeAction() {
        $date = array();
        $cour = array();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Historique');

        // On récupère les correspondant
        $historique = $repository->findAll();
        foreach ($historique as $a) {
            /*
             * on met les données de la base de données sur un tableau
             */
            $date [] = $a->getDatedemande();

            $cour [] = (int) $a->getMontant();
        }
        //convertir en json
        $reponse = new JsonResponse();
        $graph_data = array('date' => $date, 'cour' => $cour);
        return $reponse->setData($graph_data);
 }

    public function voirhistoriqueAction() {
       
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ConvertDeviseBundle:Historique');

        // On récupère l'entité correspondant à l'id $id
        $historique = $repository->findAll();
        return $this->render('ConvertDeviseBundle:Devise:voirhistorique.html.twig', array('historique' => $historique));
    }

    public function adminAction() {
        //requeste
        $request = $this->getRequest();

        $login = null;
        $pwd = null;
        $loginadmin = "admin";
        $pwdadmin = "admin";
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $login = $request->request->get('_username');
            $request->getSession()->set('user', $login);
            //on recupere pwd
            $pwd = $request->request->get('_password');
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ConvertDeviseBundle:Admin');

            // On récupère l'entité correspondant à l'id $id
            $admin = $repository->findAll();
            //

            foreach ($admin as $ar) {
                $loginadmin = $ar->getLogin();
                $pwdadmin = $ar->getPassword();
               
            }
        }
        if ($loginadmin == $login && $pwdadmin == $pwd) {
            return $this->render('ConvertDeviseBundle:Devise:admin.html.twig');
        } else {
            return $this->render('ConvertDeviseBundle:Devise:formulaire.html.twig');
        }
    }
//fonction activer et desactivé devise
    public function etatAction() {
        // $em = $this->container->get('doctrine')->getEntityManager();
        $request = $this->getRequest();

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('_id');
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ConvertDeviseBundle:Devise');
            // On récupère l'entité correspondant à l'id $id
            $devise = $repository->find($id);

            //$devise=new Devise();
            if ($devise->getEtat())
                $devise->setEtat(0);
            else
                $devise->setEtat(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($devise);
            $em->flush();
        }
         //on effectue la redirection
        return $this->redirect("/ConvertDevise/web/admin/voir");
    }

}
