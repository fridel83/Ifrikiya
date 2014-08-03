<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnes
 *
 * @ORM\Table(name="abonnes")
 * @ORM\Entity
 */
class Abonnes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idabonnes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnes;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=45, nullable=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=45, nullable=true)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone1", type="string", length=45, nullable=true)
     */
    private $telephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=45, nullable=true)
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=45, nullable=true)
     */
    private $adresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livres", mappedBy="idAbonnes")
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
     * Get idabonnes
     *
     * @return integer 
     */
    public function getIdabonnes()
    {
        return $this->idabonnes;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Abonnes
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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Abonnes
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    
        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Abonnes
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Abonnes
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
     * Set telephone1
     *
     * @param string $telephone1
     * @return Abonnes
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;
    
        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string 
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     * @return Abonnes
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;
    
        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string 
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Abonnes
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add idLivre
     *
     * @param \ifrikiya\SiteBundle\Entity\Livres $idLivre
     * @return Abonnes
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