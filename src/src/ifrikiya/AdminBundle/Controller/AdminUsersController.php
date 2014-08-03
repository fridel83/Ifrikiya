<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\UserBundle\Form\UserType;
use ifrikiya\UserBundle\Entity\User;


class AdminUsersController extends Controller
{
	public function acceuilAction()
	{
		$em=$this->getDoctrine()->getManager();
		$repository=$em->getRepository('ifrikiyaUserBundle:User');
		$liste_user=$repository->findAll();
		return $this->render('ifrikiyaUserBundle:User:voirUtilisateurs.html.twig', array('users'=>$liste_user));
	}
}