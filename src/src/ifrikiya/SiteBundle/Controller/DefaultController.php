<?php

namespace ifrikiya\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ifrikiyaSiteBundle:Default:index.html.twig');
    }
    /*
    public function indexieAction()
    {
    	return $this->render('ifrikiyaSiteBundle:Default:indexie.html.twig');
    }
    */
    
    public function indexieAction()
    {
    	return $this->render('ifrikiyaSiteBundle:Site:essai.html.twig');
    }
}
