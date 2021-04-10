<?php

namespace App\Form;

use App\Entity\Coach;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin')
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('datee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coach::class,
        ]);
    }
}
