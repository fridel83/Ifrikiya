<?php
namespace ifrikiya\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('nom')
		->add('prenom')
		->add('login')
		->add('mdp', array('label'=> 'mot de passe'));
	}
	public function getName() {
		return "Admin";
	}
}