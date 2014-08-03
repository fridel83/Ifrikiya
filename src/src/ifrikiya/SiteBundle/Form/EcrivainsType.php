<?php

namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EcrivainsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', 'date', array(
        	'widget'=>'choice',
            'years'=>range(1930, 2010)		
        ))
            ->add('login')
            ->add('email')
            ->add('telephone')
            ->add('passworld')
            ->add('idLivre','entity', array(
            	  'class'=>'ifrikiya\SiteBundle\Entity\Livres',
        	      'label'=>'Oeuvres',
            	   'property'=>'titre',
            		'expanded' => true,
            		'multiple'=>true,
            		'required'=>false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ifrikiya\SiteBundle\Entity\Ecrivains'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ifrikiya_sitebundle_ecrivains';
    }
}
