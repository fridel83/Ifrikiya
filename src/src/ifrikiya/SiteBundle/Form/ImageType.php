<?php

namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('image','file', array(
            		'mapped'=>false))
            ->add('idLivre','entity', array(
            		'class'=>'ifrikiya\SiteBundle\Entity\Livres',
        	      'label'=>'Livre Correspondant',
            	  'property'=>'titre',
            	  'required'=>true,
            	  'multiple'=>false,
            	  'expanded'=>true  
             ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ifrikiya\SiteBundle\Entity\Image'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ifrikiya_sitebundle_Newimage';
    }
}
