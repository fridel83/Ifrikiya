<?php
namespace ifrikiya\UserBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  FOS\UserBundle\Controller\SecurityController  as Control;

class SecurityController extends Control
{
	public function LoginBisAction()
	{
		$csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
	
		return $this->container->get('templating')->renderResponse('FOSUserBundle:Security:connexion.html.twig', array(
				'last_username' => null,
				'error'         => null,
				'csrf_token'    => $csrfToken
		));
	}
}