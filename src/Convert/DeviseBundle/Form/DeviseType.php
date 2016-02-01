<?php

namespace Convert\DeviseBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeviseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('devise')
             ->add('devisedesc')
             ->add('etat','hidden',array('data'=>1))
        ;
    }

    // other functions here ...

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Convert\DeviseBundle\Entity\Devise'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sitebundle';
    }
}
