<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // convert_devise_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'convert_devise_homepage')), array (  '_controller' => 'ConvertDeviseBundle:Default:index',));
        }

        // convert_devise_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::indexAction',  '_route' => 'convert_devise_accueil',);
        }

        // convert_devise_admin_compte
        if ($pathinfo === '/compte') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::compteAction',  '_route' => 'convert_devise_admin_compte',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // convert_devise_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::adminAction',  '_route' => 'convert_devise_admin',);
            }

            // convert_devise_admin_add
            if ($pathinfo === '/admin/ajouter') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::ajouterAction',  '_route' => 'convert_devise_admin_add',);
            }

            // convert_devise_admin_get
            if ($pathinfo === '/admin/voir') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirAction',  '_route' => 'convert_devise_admin_get',);
            }

            // convert_devise_admin_etat
            if ($pathinfo === '/admin/etat') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::etatAction',  '_route' => 'convert_devise_admin_etat',);
            }

        }

        // convert_devise_convert
        if ($pathinfo === '/convert') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::historiqueAction',  '_route' => 'convert_devise_convert',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // convert_devise_admin_voirhistorique
            if ($pathinfo === '/admin/voirhistorique') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirhistoriqueAction',  '_route' => 'convert_devise_admin_voirhistorique',);
            }

            // convert_devise_admin_param
            if ($pathinfo === '/admin/param') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::paramAction',  '_route' => 'convert_devise_admin_param',);
            }

            // convert_devise_admin_courbe
            if ($pathinfo === '/admin/courbe') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voircourbeAction',  '_route' => 'convert_devise_admin_courbe',);
            }

            // convert_devise_admin_mail
            if ($pathinfo === '/admin/mail') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::mailAction',  '_route' => 'convert_devise_admin_mail',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
