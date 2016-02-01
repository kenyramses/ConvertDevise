<?php

namespace Convert\DeviseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Convert\DeviseBundle\Entity\DeviseRepository")
 */
class Devise
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
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="devisedesc", type="string", length=255)
     */
    private $devisedesc;
    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
    
    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }
    public function getDevise() {
        return $this->devise;
    }

    public function getDevisedesc() {
        return $this->devisedesc;
    }

    public function setDevise($devise) {
        $this->devise = $devise;
    }

    public function setDevisedesc($devisedesc) {
        $this->devisedesc = $devisedesc;
    }

        /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    
}
