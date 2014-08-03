<?php
namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Admin;

class AdminController extends Controller
{
	public function indexAction($name)
	{
		return $this->render('ifrikiyaAdminBundle:Default:index.html.twig', array('name' => $name));
	}
	
	public function acceuilAction()
	{
		return $this->render('ifrikiyaAdminBundle:Admin:acceuil.html.twig');	
	}
}