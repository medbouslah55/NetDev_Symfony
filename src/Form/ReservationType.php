<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Membre;
use App\Entity\Reservation;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\StringType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nom',TextType::class , [
                'label' => 'nom' ,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom ne peut pas être vide',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-z]+$/i',
                        'message' => 'Le nom  ne peut pas contenir des nombres'

                    ])
                ]])
            ->add('prenom' ,TextType::class , [
                'label' => 'prenom  ' ,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom ne peut pas être vide',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-z]+$/i',
                        'message' => 'Le prénom  ne peut pas contenir des nombres'

                    ])
                ]])
            ->add('dateAct',DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'la date doit être supérieur à celle d\'aujourd\'hui'
                    ] )
                ]
            ])
            ->add('nbPlace',IntegerType::class, [
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => '1',
                        'message' => 'le nombre de places doit être supérieur ou égale à 1'
                    ] )
                ]
            ])
            ->add('idAct' , EntityType::class,[
                'class' => Activite::class,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de l\'activité ne peut pas être vide',
                    ]),
            ]])
            ->add('cinMembre' , EntityType::class,[
                'class' => Membre::class,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le cin de Membre  ne peut pas être vide',
                    ]),
                ]])
            //->add('submit', SubmitType::class)
            //->add('idPanier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
