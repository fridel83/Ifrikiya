<?php
namespace ifrikiya\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\SiteBundle\Entity\Image;
use ifrikiya\SiteBundle\Entity\Ecrivains;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\SiteBundle\Form\MailerType;

class MailController extends Controller
{
	public function formMailAction()
	{
		$form=$this->createForm(new MailerType());
		$request=$this->get('request');
		if ($request->getMethod()=='POST') 
		{
			$form->bind($request);
			if ($form->isValid()) 
			{
				/*
				$subject=$form->get('objet')->getData();
				$content=$form->get('message')->getData();
				$from=$form->get('email')->getData();
				$message = \Swift_Message::newInstance()
				->setSubject($subject)
				->setFrom($from)
				->setTo('idriss.eliguene@gmail.com')
				->setBody($content)
				;
				$this->get('mailer')->send($message);
				*/
			    return $this->render('ifrikiyaSiteBundle:Site:construction.html.twig');	
			}
		}
		return $this->render('ifrikiyaSiteBundle:Mail:formMail.html.twig', array('form'=>$form->createView()));
	}

}