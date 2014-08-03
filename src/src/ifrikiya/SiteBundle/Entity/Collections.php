<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collections
 *
 * @ORM\Table(name="collections")
 * @ORM\Entity
 */
class Collections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcollections", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcollections;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=false)
     */
    private $libelle;



    /**
     * Get idcollections
     *
     * @return integer 
     */
    public function getIdcollections()
    {
        return $this->idcollections;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Collections
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