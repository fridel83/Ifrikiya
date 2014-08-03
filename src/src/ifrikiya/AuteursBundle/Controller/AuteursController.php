<?php
namespace ifrikiya\AuteursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Image;
use ifrikiya\SiteBundle\Entity\Ecrivains;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\SiteBundle\Form\EcrivainsType;
use ifrikiya\SiteBundle\Form\EcrivainsIdentType;


class AuteursController extends Controller
{
	
	/**
	 * acceuil des auteurs
	 */
	public function auteursAcceuilAction()
	{
		$ecrivain=new Ecrivains();
		$form=$this->createForm(new EcrivainsType(), $ecrivain);
		
		$request=$this->get('request');
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em=$this->getDoctrine()->getManager();
				$repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
				$login=$form->get('login')->getData();
				$password=$form->get('passworld')->getData();
				$bol=false;
				$liste_ecrivain=$repository->findAll();
				foreach ($liste_ecrivain as $cle => $value)
				{
					if (($value->getLogin()==$login) && ($value->getPassworld()==$password)) 
					{
						$bol=true;
						$id=$value->getIdEcrivains();
					}
				}
				if ($bol) 
				{
					return $this->redirect($this->generateUrl('ifrikiya_page_auteur', array('id'=>$id)));
				}
				else 
				{
					return $this->redirect($this->generateUrl('ifrikiya_auteurs_acceuil'));
				}
			}
		}
		return $this->render('ifrikiyaAuteursBundle:Auteurs:acceuilAuteur.html.twig', array('form'=>$form->createView()));
	}
	
	public function ficheAuteurAction($id)
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
		$ecrivain=$repository->find($id);
		$rep=$em->getRepository('ifrikiyaSiteBundle:Photo');
		$photo=$rep->findByIdEcrivains($id);
		return $this->render('ifrikiyaAuteursBundle:Auteurs:pageAuteur.html.twig', array('ecrivain'=>$ecrivain, 'photo'=>$photo));
	}
}