<?php

namespace Imbuzzit\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{ 
  private $locale = 'fr';

  public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $yearsList = $this->getYears();
        $complete = array_key_exists('complete', $options) && $options['complete']  == true ? true : false;
        
        if (array_key_exists('locale', $options)) {
          $locale = $options['locale'];
        } else {
          $locale = $this->locale;
        }
        $dateFormat = array('fr' => 'dd-MM-yyyy', 'en' => 'yyyy-MM-dd');
        
        $builder
            ->add('username')
            ->add('salt', 'hidden', array('mapped' => false))
            ->add('email', 'email')
            ->add('isActive', 'hidden', array('mapped' => false))
            ->add(
                  'birthday',
                  'birthday', 
                  array(
                    'format' => $dateFormat[$locale], 
                    'years'  => $yearsList
                  )
            )
            ->add(
                  'sexe',
                  'choice',
                  array(
                        'choices' => array(
                            '0'=> 'male',
                            '1'=> 'female'
                        ),
                        'translation_domain' => 'api'
                  )
            )
        ;
        if ($complete) {
          $builder
            ->add('name')
            ->add('firstname')
            ->add('biography', 'textarea', array('required' => false))
            ->add('city')
            ->add('influence')
            ->add('equipment')
          ;
        } else {
          $builder
            ->add('account_birthday', 'hidden', array('mapped' => false))
            ->add('password', 'password')
          ;
        }
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbuzzit\ApiBundle\Entity\User',
            'complete' => false
        ));
    }

    public function getName()
    {
        return 'imbuzzit_apibundle_usertype';
    }
    
    public function getYears()
    {
      $currentYear = new \DateTime();
      
      $limitEndYear = clone $currentYear->modify('-16 Years');
      
      $endYear = $limitEndYear->format('Y');
      $startYear = $endYear - 50;
      
      while ($endYear > $startYear) {
        
        $years[] = $startYear;
        
        $startYear++;
      }
      
      return $years;
    }
}
