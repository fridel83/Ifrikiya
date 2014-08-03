<?php

namespace ifrikiya\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ifrikiyaAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
