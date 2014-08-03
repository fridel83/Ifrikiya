<?php
namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailerType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('email','email', array('required'=>true, 'label'=>'votre adresse mail'))
		->add('objet','text', array('required'=>true))
		->add('message', 'textarea', array('required'=>true))
		;
	}

	

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'ifrikiya_sitebundle_mail';
	}
}
