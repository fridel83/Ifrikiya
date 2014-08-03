<?php
namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ifrikiya\SiteBundle\Form;

class ImageNewType extends ImageType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options) ;
		$builder->remove('nom') ;
	}


	/**
	 * @return string
	 */
	public function getName()
	{
		return 'ifrikiya_sitebundle_image';
	}
}
