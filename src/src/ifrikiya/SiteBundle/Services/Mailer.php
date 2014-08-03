<?php

namespace ifrikiya\SiteBundle\Services;

use Symfony\Component\Templating\EngineInterface;

class Mailer 
{ 
	protected $mailer; 
	protected $templating; 
	private $from = "no-reply@example.fr"; 
	private $reply = "contact@example.fr"; 
	private $name = "Equipe Acme Blog"; 
	
	public function __construct($mailer, EngineInterface $templating) 
	{ 
		$this->mailer = $mailer; $this->templating = $templating; 
	} 
	
	protected function sendMessage($to, $subject, $body) 
	{
		$mail = \Swift_Message::newInstance(); 
		$mail ->setFrom($this->from,$name) 
		->setTo($to) ->setSubject($subject) 
		->setBody($body) 
		->setReplyTo($this->reply,$name) 
		->setContentType('text/html'); 
		
		$this->mailer->send($mail); 
	} 
	
}