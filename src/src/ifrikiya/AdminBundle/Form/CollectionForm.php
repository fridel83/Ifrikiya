<?php
namespace ifrikiya\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CollectionForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('libelle');
	}
	public function getName() {
		return "Collection";
	}
}