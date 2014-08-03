<?php
namespace ifrikiya\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EcrivainForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('nom')
		->add('prenom')
		->add('email')
		->add('login')
		->add('passworld')
		->add('telephone')
		->add('dateNaissance');
	}
	public function getName() {
		return "Ecrivains";
	}
}