<?php

namespace ifrikiya\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Image;
use ifrikiya\SiteBundle\Entity\Ecrivains;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\AdminBundle\Form\LivreForm;
use ifrikiya\SiteBundle\Form\RechercheType;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ifrikiyaSiteBundle:Site:index.html.twig');
    }
    
    public function constructionAction()
    {
    	return $this->render('ifrikiyaSiteBundle:Site:construction.html.twig');
    }
    
    public function voirAction($id)
    {
    	return $this->render('ifrikiyaSiteBundle:Site:voir.html.twig', array('id'=>$id));
    }
    
    public function acceuilAction()
    {
    		
    	return $this->render('ifrikiyaSiteBundle:Site:acceuil.html.twig');
    }
    
    public function rechercheAction()
    {
    	$request=$this->get('request');
    	if ($request->getMethod()=="POST") 
    	{
    		$id=$_POST['id'];
    		if($id==1)
    		{
    			return $this->redirect($this->generateUrl('ifrikiya_site_recherche_auteur'));
    		}
    		else 
    		{
    			return $this->redirect($this->generateUrl('ifrikiya_site_recherche_livre'));
    		}
    	}
    	return  $this->render('ifrikiyaSiteBundle:Site:acceuil.html.twig');
    }
    
    
    public function rechercheAuteurAction()
    {
    	$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
		$ecrivains=$repository->findAll();
		return $this->render('ifrikiyaSiteBundle:Site:ecrivains.html.twig', array('liste_ecrivain' => $ecrivains));
    }
    
    public function rechercheLivreAction()
    {
    	$em=$this->getDoctrine()->getManager();
    	$repository=$em->getRepository('ifrikiyaSiteBundle:Livres');
    	$livres=$repository->findAll();
    	return $this->render('ifrikiyaSiteBundle:Site:listeLivre.html.twig', array('liste_livre' => $livres));
    }
    
    public function ecrivainsAction()
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Ecrivains');
    	$ecrivains=$repository->findAll();
    	return $this->render('ifrikiyaSiteBundle:Site:ecrivains.html.twig', array('liste_ecrivain'=>$ecrivains));
    }
    
    public function unecrivainAction($id)
    {
    	$em=$this->getDoctrine()->getManager();
    	$repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
    	$liste=$repository->findAll();
    	$liste_id=array();
    	foreach ($liste as $key=>$value)
    	{
    		$liste_id[]=$value->getIdecrivains();
    	}
    	if (in_array($id, $liste_id)) 
    	{
    		$ecrivain=$repository->find($id);
    		return $this->render('ifrikiyaSiteBundle:Site:unecrivain.html.twig', array('ecrivain'=>$ecrivain));
    	}
    	else 
    	{
    		return $this->render('ifrikiyaSiteBundle:Site:erreur.html.twig');
    	}
    }
    
    public function catalogueAction()
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Livres');
    	//on recup�re tous nos livres
    	$liste_livre=$repository->findAll();
    	$liste=array();
    	foreach ($liste_livre as $livre)
    	{
    		//on recup�re l'id du livre en cours
    		$id=$livre->getIdlivre();
    		$im=new  Image();
    		$reposi=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Image');
    		//on recup�re l'image de ce livre
    		$im=$reposi->findOneByIdLivre($id);
    		//on recup�re le nom de cette image
    		$image=$im->getNom();
    		//on recup�re le texte de presentation du livre
    		$presentation=$livre->getPresentation();
    		//on recup�re le titre du livre
    		$titre=$livre->getTitre();
    		$prix_euro=$livre->getPrixUnitaireEuro();
    		$annee=$livre->getAnnee();
    		$prix_cfa=$livre->getPrixUnitaireFcfa();
    		$id_ecrivain=$livre->getIdEcrivain();
    		$ecrivain=array();
    		/*
    		foreach ($id_ecrivain as $identifiant)
    		{
    			$rep=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Ecrivains');
    			$auteur=$rep->find($identifiant);
    			$ecrivain[]=$auteur;
    		}
    		*/
    		$livre=array($id, $titre, $image, $presentation, $prix_cfa, $prix_euro, $ecrivain, $annee );
    		$liste[]=$livre;
    	}
    	
    	return $this->render('ifrikiyaSiteBundle:Site:catalogue.html.twig', array('liste_livre'=>$liste));
    }
    
    public function voirlivreAction($id)
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Livres');
    	$reposi=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Image');
    	$rep=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Ecrivains');
    	$livre=new Livres();
    	$livre=$repository->find($id);
    	
    	$image=new Image();
    	$image=$reposi->findByIdLivre($id);
    	$liste_livre=$repository->findAll();
    	$liste_id=array();
    	foreach ($liste_livre as $cle=>$valeur)
    	{
    		$liste_id[]=$valeur->getIdlivre();
    	}
    	if (in_array($id, $liste_id))
        {
        	foreach ($image as $im)
        	{
        		$nom=$im->getNom();
        	}
        	$idauteur=$livre->getIdecrivain();
        	foreach ($idauteur as $key=>$value)
        	{
        		$auteur[]=$value;
        	}
        	 
        	return $this->render('ifrikiyaSiteBundle:Site:voirLivre.html.twig', array('livre'=>$livre, 'nom'=>$nom, 'auteurs'=>$auteur));
    	}
    	else
    	{
    		return $this->render('ifrikiyaSiteBundle:Site:erreur.html.twig');
    	}    	
    }
    
    
    public function collectionAction()
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Collections');
    	$liste_collection=$repository->findAll();
    	return $this->render('ifrikiyaSiteBundle:Site:collection.html.twig', array('collections'=>$liste_collection));
    }
    
    public function voirCollectionAction($id)
    {
    	$em=$this->getDoctrine()->getManager();
    	$repository=$em->getRepository('ifrikiyaSiteBundle:Collections');
    	$toutes=$repository->findAll();
    	$liste_id=array();
    	foreach ($toutes as $cle=>$valeur)
    	{
    		$liste_id[]=$valeur->getIdcollections();
    	}
    	if (in_array($id, $liste_id)) 
    	{
    		$collection=$repository->find($id);
    		$repo=$em->getRepository('ifrikiyaSiteBundle:Livres');
    		$liste_livre=$repo->findByIdCollection($id);
    		$result=array();
    		foreach ($liste_livre as $key=>$value)
    		{
    			$idlivre=$value->getIdlivre();
    			$rep=$em->getRepository('ifrikiyaSiteBundle:Image');
    			$im=$rep->findOneByIdLivre($idlivre);
    			$nom=$im->getNom();
    			$liste=array($value, $nom);
    			$result[]=$liste;
    		}
    		 
    		return $this->render('ifrikiyaSiteBundle:Site:voirCollection.html.twig', array('liste_livre'=>$result, 'collection'=>$collection));
    	}
    	else 
    	{
    		return $this->render('ifrikiyaSiteBundle:Site:erreur.html.twig');
    	}
    	
    }
    
    
    public function voirLivreAuteurAction($id)
    {
    	$em=$this->getDoctrine()->getManager();
    	$rep=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
    	$ecrivain=$rep->find($id);
    	$liste_livre=$ecrivain->getIdLivre()->getValues();
    	$liste=array();
    	foreach ($liste_livre as $key => $value)
    	{
    		$rep=$em->getRepository('ifrikiyaSiteBundle:Image');
    		$idlivre=$value->getIdlivre();
    		$im=$rep->findOneByIdLivre($idlivre);
    		$nom=$im->getNom();
    		$liste=array($value, $nom);
    		$result[]=$liste;
    	}
    	return $this->render('ifrikiyaSiteBundle:Site:voirLivreAuteur.html.twig', array('liste_livre'=>$result, 'ecrivain'=>$ecrivain));
    	
    }
    
    
    public function genreAction()
    {
    	$repository=$this->getDoctrine()->getManager()->getRepository('ifrikiyaSiteBundle:Genres');
    	$liste_genre=$repository->findAll();
    	return $this->render('ifrikiyaSiteBundle:Site:genre.html.twig', array('genres'=>$liste_genre));
    }
    
    public function voirGenreAction($id)
    {
    	$em=$this->getDoctrine()->getManager();
    	$repository=$em->getRepository('ifrikiyaSiteBundle:Genres');
    	$genre=$repository->find($id);
    	$repo=$em->getRepository('ifrikiyaSiteBundle:Livres');
    	$liste_livre=$repo->findByIdGenre($id);
    	$liste_id=$repository->findAll();
    	$liste_ident=array();
    	foreach ($liste_id as $cle=>$valeur)
    	{
    		$liste_ident[]=$valeur->getIdgenres();
    	}
    	if (in_array($id, $liste_ident)) 
    	{
    		$result=array();
    		foreach ($liste_livre as $key=>$value)
    		{
    			$idlivre=$value->getIdlivre();
    			$rep=$em->getRepository('ifrikiyaSiteBundle:Image');
    			$im=$rep->findOneByIdLivre($idlivre);
    			$nom=$im->getNom();
    			$liste=array($value, $nom);
    			$result[]=$liste;
    		}
    		 
    		return $this->render('ifrikiyaSiteBundle:Site:voirGenre.html.twig', array('liste_livre'=>$result, 'genre'=>$genre));
    	}
    	else
    	{
    		return $this->render('ifrikiyaSiteBundle:Site:erreur.html.twig');
    	}
    }
    
    
     
    private function aleatoire($min, $max)
    {
    	return rand($min, $max);
    }
    
    private function imag()
    {
    	$image=array();
    	for ($i=0; $i<10; $i++)
    	{
    	   $image[]=$this->aleatoire(49, 132);
    	}
    	return $image;
    }
    
    
}

?>