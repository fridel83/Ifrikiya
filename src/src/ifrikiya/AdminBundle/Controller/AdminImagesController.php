<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Image;
use ifrikiya\SiteBundle\Form\ImageType;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\SiteBundle\Form\ImageNewType;


class AdminImagesController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Image');
		$images=$repository->findAll();
		return $this->render('ifrikiyaAdminBundle:Admin:adminImages.html.twig', array('images' => $images));
	}

	public function ajouterAction()
	{
		$image = new Image();
		/* Cr�ation d'un formulaire pour lequel on sp�cifie qu'il doit correspondre avec une entit� Genre */
		$form = $this->createForm(new ImageNewType(), $image);
		/* On r�cup�re les donn�es du formulaire si il a d�j� �t� pass� */
		$request = $this->get('request');
		/* On ne traite que les donn�es pass�es en m�thode POST */
		if ($request->getMethod() == 'POST')
		{
			/* On applique les donn�es r�cup�r�es au formulaire */
			$form->bind($request);
		
			/* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
			if ($form->isValid()) 
			{
				$livre=$form['livre'];
				$file=$form['file'];
				$em=$this->getDoctrine()->getManager();
				//$livre=new Livres();
				//$repos=$em->getRepository('ifrikiyaSiteBundle:Livres');
				//$livre=$repos->findByTitre($nom_livre);
				$nom=$livre->getNom();
				$nom.='.jpg';
				$image->setNom($nom);
				$dir='C:/Program Files/EasyPHP-DevServer-13.1VC9/data/localweb/Symfony/web/bundles/ifrikiyasite/images/livres';
				$file->move($dir, $nom_livre);
				//$repository=$em->getRepository('ifrikiyaSiteBundle:Image');
				$em->persist($image);
				$em->flush();
				return $this->redirect($this->generateUrl('ifrikiya_admin_images'));
			}
		}
		/* Si aucun formulaire valide n'est r�cup�r�, on affiche le formulaire */
		return $this->render('ifrikiyaAdminBundle:Admin:adminImageNew.html.twig', array("form" => $form->createView()));
	}

	public function modifierAction()
	{

	}

	public function supprimerAction()
	{

	}
}

