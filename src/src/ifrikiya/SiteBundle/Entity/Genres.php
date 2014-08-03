<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="genres")
 * @ORM\Entity
 */
class Genres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgenres", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgenres;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=false)
     */
    private $libelle;



    /**
     * Get idgenres
     *
     * @return integer 
     */
    public function getIdgenres()
    {
        return $this->idgenres;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Genres
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}