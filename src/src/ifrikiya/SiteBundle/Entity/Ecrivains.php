<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ifrikiya\SiteBundle\Entity\Livres;

/**
 * Ecrivains
 *
 * @ORM\Table(name="ecrivains")
 * @ORM\Entity
 */
class Ecrivains
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idecrivains", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idecrivains;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="passworld", type="string", length=45, nullable=true)
     */
    private $passworld;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livres", mappedBy="idEcrivain")
     */
    private $idLivre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLivre = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idecrivains
     *
     * @return integer 
     */
    public function getIdecrivains()
    {
        return $this->idecrivains;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Ecrivains
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
     * @return Ecrivains
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }
    
    public function getNomPrenom()
    {
    	return $this->prenom.' '.$this->nom;
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
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Ecrivains
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Ecrivains
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Ecrivains
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Ecrivains
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set passworld
     *
     * @param string $passworld
     * @return Ecrivains
     */
    public function setPassworld($passworld)
    {
        $this->passworld = $passworld;
    
        return $this;
    }

    /**
     * Get passworld
     *
     * @return string 
     */
    public function getPassworld()
    {
        return $this->passworld;
    }

    /**
     * Add idLivre
     *
     * @param \ifrikiya\SiteBundle\Entity\Livres $idLivre
     * @return Ecrivains
     */
    public function addIdLivre(\ifrikiya\SiteBundle\Entity\Livres $idLivre)
    {
        $this->idLivre[] = $idLivre;
    
        return $this;
    }

    /**
     * Remove idLivre
     *
     * @param \ifrikiya\SiteBundle\Entity\Livres $idLivre
     */
    public function removeIdLivre(\ifrikiya\SiteBundle\Entity\Livres $idLivre)
    {
        $this->idLivre->removeElement($idLivre);
    }

    /**
     * Get idLivre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdLivre()
    {
        return $this->idLivre;
    }
    
}