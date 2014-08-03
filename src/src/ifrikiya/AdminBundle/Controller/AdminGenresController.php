<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Genres;
use ifrikiya\AdminBundle\Form\GenreForm;

class AdminGenresController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Genres');
		$genres=$repository->findAll();
		return $this->render('ifrikiyaAdminBundle:Admin:adminGenres.html.twig', array('genres' => $genres));
	}

	public function ajouterAction()
	{
		$genre = new Genres();
		
		/* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité Genre */
		$form = $this->createForm(new GenreForm(), $genre);
		
		
		/* On récupère les données du formulaire si il a déjà été passé */
		$request = $this->get('request');
		
		/* On ne traite que les données passées en méthode POST */
		if ($request->getMethod() == 'POST') {
			/* On applique les données récupérées au formulaire */
			$form->bind($request);
		
			/* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($genre);
				$em->flush();
		
				return $this->redirect($this->generateUrl('ifrikiya_admin_genres'));
			}
		}
		
		/* Si aucun formulaire valide n'est récupéré, on affiche le formulaire */
		return $this->render('ifrikiyaAdminBundle:Admin:adminGenreNew.html.twig', array("form" => $form->createView()));

	}

	public function modifierAction($id)
	{
		$em=$this->getdoctrine()->getManager();
		$genre=$em->getRepository('ifrikiyaSiteBundle:Genres')->find($id);
		$form=$this->createForm(new GenreForm(), $genre);
		$request=$this->get('request');
		if ($request->getMethod()=='POST') 
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em->persist($genre);
				$em->flush();
				return $this->redirect($this->generateUrl('ifrikiya_admin_genres'));
			}
		}
		
		return $this->render('ifrikiyaAdminBundle:Admin:adminGenreEditer.html.twig', array('form'=>$form->createView(), 'idgenre'=>$genre->getIdgenres()));

	}

	public function supprimerAction()
	{

	}
}

