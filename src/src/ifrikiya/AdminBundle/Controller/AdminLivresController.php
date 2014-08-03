<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\SiteBundle\Form\LivresType;
use ifrikiya\SiteBundle\Entity\Image;
use ifrikiya\SiteBundle\Form\LivresNewType;

class AdminLivresController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Livres');
		$livres=$repository->findAll();
		return $this->render('ifrikiyaAdminBundle:Admin:adminLivres.html.twig', array('livres' => $livres));
	}
	
	public function ajouterAction()
	{
		$livre = new Livres();
		/* Cr�ation d'un formulaire pour lequel on sp�cifie qu'il doit correspondre avec une entit� Genre */
		//$form = $this->createForm(new LivreForm(), $livre);
		$form=$this->createForm(new LivresNewType(),$livre);
		/* On r�cup�re les donn�es du formulaire si il a d�j� �t� pass� */
		$request = $this->get('request');
		/* On ne traite que les donn�es pass�es en m�thode POST */
		if ($request->getMethod() == 'POST') 
		{
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$file=$form->get('image')->getData();
				$nom=$file->getClientOriginalName();
				$repository=$em->getRepository('ifrikiyaSiteBundle:Image');
				$image=new Image();
				$image->setNom($nom);
				$dir='C:/Program Files/EasyPHP-DevServer-13.1VC9/data/localweb/Symfony/web/bundles/ifrikiyasite/images/livres';
				$file->move($dir, $nom);
				$em->persist($livre);
				$id=$livre->getIdlivre();
				$image->setIdLivre($livre);
				$em->persist($image);
				$em->flush();
		
				return $this->redirect($this->generateUrl('ifrikiya_admin_livres'));
			}
		}
		
		/* Si aucun formulaire valide n'est r�cup�r�, on affiche le formulaire */
		return $this->render('ifrikiyaAdminBundle:Admin:adminLivreNew.html.twig', array("form" => $form->createView()));
		
	}
	
	public function modifierAction($id)
	{
		$em=$this->getDoctrine()->getManager();
		$livre=$em->getRepository('ifrikiyaSiteBundle:Livres')->find($id);
		$form=$this->createForm(new LivresType(), $livre);
		$request=$this->get('request');
		if($request->getMethod()=='POST')
		{
			$form->bind($request);
			$em->persist($livre);
			$em->flush();
			return $this->redirect($this->generateUrl('ifrikiya_admin_livres'));
		}
		return $this->render('ifrikiyaAdminBundle:Admin:adminLivreEditer.html.twig', array('form'=>$form->createView(), 'idlivre'=>$livre->getIdlivre()));
	}
	
	public function supprimerAction($id)
	{
		$em=$this->getDoctrine()->getManager();
		$repos=$em->getRepository('ifrikiyaSiteBundle:Livres');
		$rep=$em->getRepository('ifrikiyaSiteBundle:Image');
		$livre=$repos->find($id);
		$image=$rep->findOneByIdLivre($id);
		$em->remove($image);
		$em->flush();
		$livre->getIdEcrivain()->clear();
		$em->persist($livre);
		$em->flush();
		$em->remove($livre);
		$em->flush();
		return $this->redirect($this->generateUrl('ifrikiya_admin_livres'));
	}
}