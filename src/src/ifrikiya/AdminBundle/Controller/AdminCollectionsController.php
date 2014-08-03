<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Collections;
use ifrikiya\AdminBundle\Form\CollectionForm;

class AdminCollectionsController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Collections');
		$collections=$repository->findAll();
		return $this->render('ifrikiyaAdminBundle:Admin:adminCollections.html.twig', array('collections' => $collections));
	}

	public function ajouterAction()
	{
		$collection = new Collections();
		/* Cr�ation d'un formulaire pour lequel on sp�cifie qu'il doit correspondre avec une entit� Genre */
		$form = $this->createForm(new CollectionForm(), $collection);
		/* On r�cup�re les donn�es du formulaire si il a d�j� �t� pass� */
		$request = $this->get('request');
		/* On ne traite que les donn�es pass�es en m�thode POST */
		if ($request->getMethod() == 'POST')
		{
			/* On applique les donn�es r�cup�r�es au formulaire */
			$form->bind($request);
		
			/* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($livre);
				$em->flush();
		
				return $this->redirect($this->generateUrl('ifrikiya_admin_collections'));
			}
		}
		
		/* Si aucun formulaire valide n'est r�cup�r�, on affiche le formulaire */
		return $this->render('ifrikiyaAdminBundle:Admin:adminCollectionNew.html.twig', array("form" => $form->createView()));
		
	}

	public function modifierAction($id)
	{
		$entityManager = $this->getDoctrine()->getManager();
    /* R�cup�ration de la collection demand� par url */
    $collection = $entityManager->getRepository("ifrikiyaSiteBundle:Collections")->find($id);
    /* Cr�ation d'un forumaire pour lequel on sp�cifie qu'il doit correspondre avec une entit� Genre */       
   $form = $this->createForm(new CollectionForm(), $collection);
    /* On r�cup�re les donn�es du formulaire si il a d�j� �t� pass� */
    $request = $this->get('request');
 
    /* On ne traite que les donn�es pass�es en m�thode POST */
    if ($request->getMethod() == 'POST') {
        /* On applique les donn�es r�cup�r�es au formulaire */
        $form->bind($request);
 
        /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
        if ($form->isValid()) {               
            $entityManager->persist($collection);
            $entityManager->flush();
 
            return $this->redirect($this->generateUrl('ifrikiya_admin_genres'));
        }
    }
 
    /* Si aucun formulaire valide n'est r�cup�r�, on affiche le formulaire */
    return $this->render('ifrikiyaAdminBundle:Admin:adminCollectionEditer.html.twig', array(
        "form" => $form->createView(),
        "idcollection" => $collection->getIdCollections(),
    ));
	}

	public function supprimerAction($id)
	{
		$em=$this->getDoctrine()->getManager();
        $rep=$em->getRepository('ifrikiyaSiteBundle:Collections');
        $collection=$rep->find($id);
        $em->remove($collection);
        $em->flush();
        return $this->redirect($this->generateUrl('ifrikiya_admin_collections'));
	}
}