<?php

namespace Imbuzzit\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StreamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('state')
            ->add('type')
            ->add('createdAt')
            ->add('poll')
            ->add('url')
            ->add('media')
            ->add('access')
            ->add('featured')
            ->add('createdBy', 'hidden', array('mapped' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbuzzit\ApiBundle\Entity\Stream'
        ));
    }

    public function getName()
    {
        return 'imbuzzit_apibundle_streamtype';
    }
}
