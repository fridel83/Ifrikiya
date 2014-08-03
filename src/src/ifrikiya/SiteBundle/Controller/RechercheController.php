<?php
namespace ifrikiya\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Control;

use ifrikiya\SiteBundle\Form\RechercheType;
use ifrikiya\SiteBundle\Entity\Ecrivains;

class RechercheController extends Control
{
	public function RechercheAction()
	{
		$form=$this->createForm(new RechercheType());
		return $this->render('ifrikiyaSiteBundle:Recherche:recherche_content.html.twig', array(
				'form'          =>$form->createView()
		));
	}
	
	public function traitementRechercheAction()
	{
		$request=$this->get('request');
		if ($request->getMethod()=="POST")
		{
			$em=$this->getDoctrine()->getManager();
				$res=$this->getRequest()->request->get('form');
				$form=$this->createForm(new RechercheType(), $res);
				$form->bind($request);
				$titre=$form->get('titre')->getData();
				$auteur=$form->get('auteur')->getData();
				$annee=$form->get('annee')->getData();
				if ($titre != "") 
				{
					$query=$em->createQuery("select l from ifrikiya\SiteBundle\Entity\Livres l where l.titre like '%$titre%'" );
					$result=$query->getResult();
					$nbre=count($result);
					return $this->render('ifrikiyaSiteBundle:Recherche:recherchetitre.html.twig', array('livres'=>$result, 'nbre'=>$nbre));
				}
			    else 
			    {
			    	if ($auteur != "") 
			    	{
			    		$query=$em->createQuery("select e from ifrikiy
			    				a\SiteBundle\Entity\Ecrivains e where e.nom like '%$auteur%' or e.prenom like '%$auteur%'");
			    		$result=$query->getResult();
			    		$nbre=count($result);
			    		$nbre=count($result);
			    		return $this->render('ifrikiyaSiteBundle:Recherche:rechercheauteur.html.twig', array('liste_ecrivain'=>$result, 'nbre'=>$nbre));
			    	}
			    	else 
			    	{
			    		$query=$em->createQuery("select l from ifrikiya\SiteBundle\Entity\Livres l where l.annee like '%$annee%'");
			    		$result=$query->getResult();
			    		$nbre=count($result);
			    		return $this->render('ifrikiyaSiteBundle:Recherche:recherchetitre.html.twig', array('livres'=>$result, 'nbre'=>$nbre));
			    	}
			    }

		}
		return $this->render('ifrikiyaSiteBundle:Site:acceuil.html.twig');
	}
}