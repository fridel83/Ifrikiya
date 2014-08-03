<?php
namespace ifrikiya\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LivreForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('titre')
		->add('annee')
		->add('format',null)
		->add('presentation')
		->add('prixUnitaireFcfa','text',array('label'=>'prix fcfa'))
		->add('prixUnitaireEuro', 'text',array('label'=>'prix euro'))
		->add('idEcrivain', 'entity', array(
		 'label' =>	'AUTEURS',	
         'class' => 'ifrikiya\SiteBundle\Entity\Ecrivains',
         'property' => 'NomPrenom',
         'expanded' => true,
         'multiple' => true,
         'required' => true))
	    ->add('idCollection', 'entity', array(
	     'label'=>'COLLECTION',
         'class' => 'ifrikiya\SiteBundle\Entity\Collections',
         'property' => 'libelle',
         'expanded' => true,
         'multiple' => false,
         'required' => false))
	    ->add('idGenre', 'entity', array(
	     'label'=>'GENRE',
         'class' => 'ifrikiya\SiteBundle\Entity\genres',
          'property' => 'libelle',
          'expanded' => true,
          'multiple' => false,
          'required' => true))
	     ->add('file', 'file', array(
			  'label'=>'image',
			  'mapped' => false,
	           'required' => true));
	}

	public function getName() {
		return "Livre";
	}
}