<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Ecrivains;
use ifrikiya\SiteBundle\Form\EcrivainsType;
use ifrikiya\SiteBundle\Form\EcrivainsIdentType;

class AdminEcrivainsController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
		$ecrivains=$repository->findAll();
		return $this->render('ifrikiyaAdminBundle:Admin:adminEcrivains.html.twig', array('ecrivains' => $ecrivains));
	}

	public function ajouterAction()
	{
		$ecrivain = new Ecrivains();
		/* Cr�ation d'un formulaire pour lequel on sp�cifie qu'il doit correspondre avec une entit� Genre */
		$form = $this->createForm(new EcrivainsType(), $ecrivain);
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
				
				$em->persist($ecrivain);
				$em->flush();
		
				return $this->redirect($this->generateUrl('ifrikiya_admin_ecrivains'));
			}
		}
		
		/* Si aucun formulaire valide n'est r�cup�r�, on affiche le formulaire */
		return $this->render('ifrikiyaAdminBundle:Admin:adminEcrivainNew.html.twig', array("form" => $form->createView()));
		
	}

	public function modifierAction($id)
	{
        $em=$this->getDoctrine()->getManager();
        $ecrivain=$em->getRepository('ifrikiyaSiteBundle:Ecrivains')->find($id);
        $form=$this->createForm(new EcrivainsType(), $ecrivain);
        $request=$this->get('request');
        if($request->getMethod()=='POST')
        {
        	$form->bind($request);
        	if ($form->isValid())
        	{
        		$em->persist($ecrivain);
        		$em->flush();
        		return $this->redirect($this->generateUrl('ifrikiya_admin_ecrivains'));
        	}
        }
        return $this->render('ifrikiyaAdminBundle:Admin:adminEcrivainEditer.html.twig', array('form'=>$form->createView(), 'idecrivain'=>$ecrivain->getIdecrivains()));
	}

	public function supprimerAction($id)
	{
		$em=$this->getDoctrine()->getManager();
        $repository=$em->getRepository('ifrikiyaSiteBundle:Ecrivains');
        $ecrivain=$repository->find($id);
        $ecrivain->getIdLivre()->clear();
        $em->persist($ecrivain);
        $em->flush();
        $em->remove($ecrivain);
        $em->flush();
        return $this->redirect($this->generateUrl('ifrikiya_admin_ecrivains'));
	}
}
