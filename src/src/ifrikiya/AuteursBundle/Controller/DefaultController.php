<?php

namespace ifrikiya\AuteursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ifrikiyaAuteursBundle:Default:index.html.twig', array('name' => $name));
    }
}
