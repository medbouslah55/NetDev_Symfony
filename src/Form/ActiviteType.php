<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Centre;
use App\Entity\Coach;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorieAct',TextType::class,  ['label' => ' Catégorie :'])
            ->add('nomAct' , TextType::class,  ['label' => ' Nom Activité:'])
            ->add('prixReservation' ,NumberType::class,  ['label' => 'Prix réservation :'])
           /* ->add('dateAct',DateType::class, [
            'widget' => 'single_text','format' => 'yyyy-MM-dd'
              ])*/
            ->add('dateAct')
            ->add('capacite',IntegerType::class,  ['label' => 'Capacité :'])
            ->add('description',TextareaType::class,  ['label' => 'Description :'])
            ->add('idCentre',EntityType::class,['class'=> Centre::class,
            'choice_label'=> 'nomCentre',
                'label' => 'idCentre'

            ])
            ->add('cinCoach',EntityType::class,['class'=> Coach::class,
                'choice_label' => function (Coach $customer) {
                    return $customer->getNom() . ' ' . $customer->getPrenom();

                    // or better, move this logic to Customer, and return:
                    // return $customer->getFullname();
                },
                'label' => 'cin'

            ])

           # ->add('cinCoach')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
