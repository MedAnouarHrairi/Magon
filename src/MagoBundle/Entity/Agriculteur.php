<?php

namespace MagoBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agriculteur
 *
 * @ORM\Table(name="agriculteur")
 * @ORM\Entity(repositoryClass="MagoBundle\Repository\AgriculteurRepository")
 */
class Agriculteur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    protected $nom;
    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="agriculteur")
     */
    protected $offres;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255,nullable=true)
     */
    protected $prenom;





    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Agriculteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Agriculteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



    /**
     * @return mixed
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * @param mixed $offres
     */
    public function setOffres($offres)
    {
        $this->offres = $offres;
    }

    public function nomPrenom()
    {
        return $this->prenom.' '.$this->nom;
    }
}

