<?php

namespace MagoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="MagoBundle\Repository\OffreRepository")
 */
class Offre
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_offre", type="date")
     */
    private $dateOffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_offre_c", type="date" ,nullable=true)
     */
    private $dateOffreC;

    /**
     * @ORM\ManyToOne(targetEntity="Agriculteur")
     * @ORM\JoinColumn(name="id_agriculteur", referencedColumnName="id")
     */
    private $agriculteur;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="id_produit", referencedColumnName="id")
     */
    private $produit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="gouv", type="string", length=255,nullable=true)
     */
    private $gouv;
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
     * @return \DateTime
     */
    public function getDateOffre()
    {
        return $this->dateOffre;
    }

    /**
     * @param \DateTime $dateOffre
     */
    public function setDateOffre($dateOffre)
    {
        $this->dateOffre = $dateOffre;
    }

    /**
     * @return mixed
     */
    public function getDateOffreC()
    {
        return $this->dateOffreC;
    }

    /**
     * @param mixed $dateOffreC
     */
    public function setDateOffreC($dateOffreC)
    {
        $this->dateOffreC = $dateOffreC;
    }

    /**
     * @return mixed
     */
    public function getAgriculteur()
    {
        return $this->agriculteur;
    }

    /**
     * @param mixed $agriculteur
     */
    public function setAgriculteur($agriculteur)
    {
        $this->agriculteur = $agriculteur;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getGouv()
    {
        return $this->gouv;
    }

    /**
     * @param string $gouv
     */
    public function setGouv($gouv)
    {
        $this->gouv = $gouv;
    }


}

