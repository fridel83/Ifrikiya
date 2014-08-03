<?php
namespace ifrikiya\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('file', 'file', array(
			  'label'=>'image',
			  'mapped' => false))
		->add('livre', 'entity', array(
				'mapped' => false,
		  'class' => 'ifrikiya\SiteBundle\Entity\Livres',
				'property' => 'titre',
				'expanded' => true,
				'multiple' => false,
				'required' => true));
	}
	public function getName() {
		return "Images";
	}
}