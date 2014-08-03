<?php

namespace ifrikiya\AbonneesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ifrikiyaAbonneesBundle:Default:index.html.twig', array('name' => $name));
    }
}
