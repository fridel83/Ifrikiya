<?php
/**
 * @author idriss
 * ce formulaire sert à indentifier et les auteurs
 */

namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EcrivainsIdentType extends EcrivainsType
{
	public function buildForm(FormBuilderInterface $builder, $options)
	{
		parent::buildForm($builder, $options);
		$builder->remove('nom')
		        ->remove('prenom')
		        ->remove('dateNaissance')
		        ->remove('passworld')
		        ->remove('livre');
	}  

	
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'ifrikiya_auteur_ident';
	}
}