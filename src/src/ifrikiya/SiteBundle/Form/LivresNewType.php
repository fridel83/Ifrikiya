<?php
namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LivresNewType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('titre')
		->add('annee', 'integer')
		->add('presentation')
		->add('prixUnitaireFcfa')
		->add('image', 'file', array(
			  'mapped'=>false,
			  'required'=>true
		))
		->add('format')
		->add('prixUnitaireEuro')
		->add('idEcrivain','entity', array(
				'class'=>'ifrikiya\SiteBundle\Entity\Ecrivains',
				'label'=>'Auteur(s)',
				'property'=>'NomPrenom',
				'expanded'=>true,
				'multiple'=>true,
				'required'=>true))
				->add('idCollection', 'entity', array(
						'class'=>'ifrikiya\SiteBundle\Entity\Collections',
						'label'=>'Collection',
						'property'=>'libelle',
						'expanded'=>true,
						'required'=>false,
						'multiple'=>false
				))
				->add('idGenre', 'entity', array(
						'class'=>'ifrikiya\SiteBundle\Entity\Genres',
						'label'=>'Genre',
						'property'=>'libelle',
						'expanded'=>true,
						'required'=>true,
						'multiple'=>false));
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'ifrikiya\SiteBundle\Entity\Livres'
		));
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'ifrikiya_sitebundle_livresNew';
	}
}
