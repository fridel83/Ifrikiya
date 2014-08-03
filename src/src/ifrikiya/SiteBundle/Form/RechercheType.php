<?php
namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('titre','text', array( 'label'=>'Titre', 'required'=>false))
		->add('auteur','text', array('label'=>'Auteur', 'required'=>false))
		->add('annee', 'integer', array('label'=>'Année', 'required'=>false))
		;
	}

	

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'ifrikiya_sitebundle_recherche';
	}
}
