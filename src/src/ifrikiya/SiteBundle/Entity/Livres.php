<?php

namespace ifrikiya\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livres
 *
 * @ORM\Table(name="livres")
 * @ORM\Entity
 */
class Livres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlivre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    private $presentation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire_fcfa", type="float", nullable=true)
     */
    private $prixUnitaireFcfa;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=45, nullable=true)
     */
    private $format;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire_euro", type="float", nullable=true)
     */
    private $prixUnitaireEuro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ecrivains", inversedBy="idLivre")
     * @ORM\JoinTable(name="auteurs",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_livre", referencedColumnName="idlivre")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_ecrivain", referencedColumnName="idecrivains")
     *   }
     * )
     */
    private $idEcrivain;

   
    /**
     * @var \Collections
     *
     * @ORM\ManyToOne(targetEntity="Collections")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection", referencedColumnName="idcollections")
     * })
     */
    private $idCollection;

    /**
     * @var \Genres
     *
     * @ORM\ManyToOne(targetEntity="Genres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_genre", referencedColumnName="idgenres")
     * })
     */
    private $idGenre;
    
    private $image;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEcrivain = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idAbonnes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idlivre
     *
     * @return integer 
     */
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Livres
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Livres
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Livres
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set prixUnitaireFcfa
     *
     * @param float $prixUnitaireFcfa
     * @return Livres
     */
    public function setPrixUnitaireFcfa($prixUnitaireFcfa)
    {
        $this->prixUnitaireFcfa = $prixUnitaireFcfa;
    
        return $this;
    }

    /**
     * Get prixUnitaireFcfa
     *
     * @return float 
     */
    public function getPrixUnitaireFcfa()
    {
        return $this->prixUnitaireFcfa;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return Livres
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set prixUnitaireEuro
     *
     * @param float $prixUnitaireEuro
     * @return Livres
     */
    public function setPrixUnitaireEuro($prixUnitaireEuro)
    {
        $this->prixUnitaireEuro = $prixUnitaireEuro;
    
        return $this;
    }

    /**
     * Get prixUnitaireEuro
     *
     * @return float 
     */
    public function getPrixUnitaireEuro()
    {
        return $this->prixUnitaireEuro;
    }

    /**
     * Add idEcrivain
     *
     * @param \ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivain
     * @return Livres
     */
    public function addIdEcrivain(\ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivain)
    {
        $this->idEcrivain[] = $idEcrivain;
    
        return $this;
    }

    /**
     * Remove idEcrivain
     *
     * @param \ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivain
     */
    public function removeIdEcrivain(\ifrikiya\SiteBundle\Entity\Ecrivains $idEcrivain)
    {
        $this->idEcrivain->removeElement($idEcrivain);
    }

    /**
     * Get idEcrivain
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEcrivain()
    {
        return $this->idEcrivain;
    }

    /**
     * Set idCollection
     *
     * @param \ifrikiya\SiteBundle\Entity\Collections $idCollection
     * @return Livres
     */
    public function setIdCollection(\ifrikiya\SiteBundle\Entity\Collections $idCollection = null)
    {
        $this->idCollection = $idCollection;
    
        return $this;
    }

    /**
     * Get idCollection
     *
     * @return \ifrikiya\SiteBundle\Entity\Collections 
     */
    public function getIdCollection()
    {
        return $this->idCollection;
    }

    /**
     * Set idGenre
     *
     * @param \ifrikiya\SiteBundle\Entity\Genres $idGenre
     * @return Livres
     */
    public function setIdGenre(\ifrikiya\SiteBundle\Entity\Genres $idGenre = null)
    {
        $this->idGenre = $idGenre;
    
        return $this;
    }

    /**
     * Get idGenre
     *
     * @return \ifrikiya\SiteBundle\Entity\Genres 
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }
    
    
    public function findByStringTitre($titre)
    {
    	$query=$this->createQuery('select l from ifrikiyaSiteBundle:livres l where l.titre like :%id%');
    	$query->setParameter('id', $titre);
    	$result=$query->getResult();
    	return $result;
    }
}