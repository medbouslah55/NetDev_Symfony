<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nom',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Nom',
                    'name'=>'name',
                ]
            ])


            ->add('prenom',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Prenom',
                    'name'=>'name',
                ]
            ])


            ->add('mail',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Email',
                    'name'=>'name',
                ]
            ])
            ->add('type',ChoiceType::class,[
                'choices'=>[
                    'Type de probléme' => 'Type de probléme',
                    'Problème  technique'=>'Problème technique',
                    'Problème de connexion'=>'Problème de connexion',
                    'Problème au niveau de payemant'=>'Problème au niveau de payemant',
                    'Problème au niveau de réservation'=>'Problème au niveau de réservation',
                ]
            ])

            ->add('date',DateType::class,[
                'data' => new \DateTime(),
            ])

            ->add('description',TextareaType::class,[
                'attr'=>[
                    'placeholder'=>'Description',
                    'name'=>'name',
                ]
            ])

            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
