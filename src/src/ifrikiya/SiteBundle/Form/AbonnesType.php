<?php

namespace ifrikiya\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbonnesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('pseudo')
            ->add('mdp')
            ->add('email')
            ->add('telephone1')
            ->add('telephone2')
            ->add('adresse')
            ->add('idLivre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ifrikiya\SiteBundle\Entity\Abonnes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ifrikiya_sitebundle_abonnes';
    }
}
