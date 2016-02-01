<?php

namespace Convert\DeviseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Convert\DeviseBundle\Entity\HistoriqueRepository")
 */
class Historique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ipdclient", type="string", length=255)
     */
    private $ipdclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbdemande", type="integer")
     */
    private $nbdemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedemande", type="datetimetz")
     */
    private $datedemande;

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=255)
     */
     private $cible;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
      private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="cour", type="string", length=255)
     */
     private $cour;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255)
     */
      private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="etatip", type="string", length=255)
     */
    private $etatip;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    public function getCible() {
        return $this->cible;
    }

    public function getSource() {
        return $this->source;
    }

    public function getCour() {
        return $this->cour;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function setCible($cible) {
        $this->cible = $cible;
    }

    public function setSource($source) {
        $this->source = $source;
    }

    public function setCour($cour) {
        $this->cour = $cour;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }

        /**
     * Set ipdclient
     *
     * @param string $ipdclient
     * @return Historique
     */
    public function setIpdclient($ipdclient)
    {
        $this->ipdclient = $ipdclient;

        return $this;
    }

    /**
     * Get ipdclient
     *
     * @return string 
     */
    public function getIpdclient()
    {
        return $this->ipdclient;
    }

    /**
     * Set nbdemande
     *
     * @param integer $nbdemande
     * @return Historique
     */
    public function setNbdemande($nbdemande)
    {
        $this->nbdemande = $nbdemande;

        return $this;
    }

    /**
     * Get nbdemande
     *
     * @return integer 
     */
    public function getNbdemande()
    {
        return $this->nbdemande;
    }

    /**
     * Set datedemande
     *
     * @param \DateTime $datedemande
     * @return Historique
     */
    public function setDatedemande($datedemande)
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    /**
     * Get datedemande
     *
     * @return \DateTime 
     */
    public function getDatedemande()
    {
        return $this->datedemande;
    }

    /**
     * Set etatip
     *
     * @param string $etatip
     * @return Historique
     */
    public function setEtatip($etatip)
    {
        $this->etatip = $etatip;

        return $this;
    }

    /**
     * Get etatip
     *
     * @return string 
     */
    public function getEtatip()
    {
        return $this->etatip;
    }
}
