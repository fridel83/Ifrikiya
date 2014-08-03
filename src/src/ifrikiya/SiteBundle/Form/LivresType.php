<?php

namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LivresType extends LivresNewType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	parent::buildForm($builder, $options) ;
    	$builder->remove('image') ;
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
        return 'ifrikiya_sitebundle_livres';
    }
}
