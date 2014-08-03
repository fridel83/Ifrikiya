<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimage;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var \Livres
     *
     * @ORM\ManyToOne(targetEntity="Livres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livre", referencedColumnName="idlivre")
     * })
     */
    private $idLivre;



    /**
     * Get idimage
     *
     * @return integer 
     */
    public function getIdimage()
    {
        return $this->idimage;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Image
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
     * Set idLivre
     *
     * @param \ifrikiya\SiteBundle\Entity\Livres $idLivre
     * @return Image
     */
    public function setIdLivre(\ifrikiya\SiteBundle\Entity\Livres $idLivre = null)
    {
        $this->idLivre = $idLivre;
    
        return $this;
    }

    /**
     * Get idLivre
     *
     * @return \ifrikiya\SiteBundle\Entity\Livres 
     */
    public function getIdLivre()
    {
        return $this->idLivre;
    }
}