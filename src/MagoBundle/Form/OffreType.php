<?php

namespace MagoBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantity')
            ->add('produit',EntityType::class ,
                array(
                    'class'=>'MagoBundle:Produit',
                    'choice_label'=>'nom',
                    'multiple'=>false,
                ))
            ->add('gouv', ChoiceType::class, array(
                'choices'   => array(
                    'Ariana'   => 'TN-AR',
                    'Béja'  => 'TN-BE',
                    'Ben Arous'   => 'TN-BA',
                    'Bizerte'   => 'TN-BI',
                    'Gabès'  => 'TN-GB' ,
                    'Gafsa'  => 'TN-GF',
                    'Jendouba'   => 'TN-JN',
                    'Kairouan' => 'TN-KR' ,
                    'Kasserine'  => 'TN-KS',
                    'Kébili' => 'TN-KE' ,
                    'El Kéf' => 'TN-KF' ,
                    'Mahdia'   => 'TN-MH',
                    'La Manouba'  => 'TN-MN',
                    'Médenine'  =>'TN-MD' ,
                    'Monastir'  => 'TN-MS',
                    'Nabeul'   => 'TN-NA',
                    'Sfax'   => 'TN-SF',
                    'Sidi Bouzid'  => 'TN-SB',
                    'Siliana'  => 'TN-SI',
                    'Sousse'  => 'TN-SO',
                    'Tataouine' =>'TN-TT' ,
                    'Tozeur'  =>'TN-TZ' ,
                    'Tunis' =>'TN-TN' ,
                    'Zaghouan' =>'TN-ZG'  ,

                )));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MagoBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'magobundle_offre';
    }


}
