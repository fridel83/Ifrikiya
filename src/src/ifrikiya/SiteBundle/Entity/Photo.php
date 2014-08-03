<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idphoto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var \Ecrivains
     *
     * @ORM\ManyToOne(targetEntity="Ecrivains")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ecrivains", referencedColumnName="idecrivains")
     * })
     */
    private $idEcrivains;



    /**
     * Get idphoto
     *
     * @return integer 
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Photo
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
     * Set idEcrivains
     *
     * @param \ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivains
     * @return Photo
     */
    public function setIdEcrivains(\ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivains = null)
    {
        $this->idEcrivains = $idEcrivains;
    
        return $this;
    }

    /**
     * Get idEcrivains
     *
     * @return \ifrikiya\SiteBundle\Entity\Ecrivains 
     */
    public function getIdEcrivains()
    {
        return $this->idEcrivains;
    }
}