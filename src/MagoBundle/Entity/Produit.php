<?php

namespace MagoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="MagoBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $nom;






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
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="agriculteur")
     */
    private $offres;

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

}

