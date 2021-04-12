<?php

namespace App\Form;

use App\Entity\Coach;
use PhpParser\Node\Stmt\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin',TextType::class,[
                'label'=>'Cin :'
            ])
            ->add('nom',TextType::class,[
                'label'=>'Nom :'
            ])
            ->add('prenom',TextType::class,[
                'label'=>'Prenom :'
            ])
            ->add('sexe',ChoiceType::class,[
                'choices'=>['Homme'=>'Homme','Femme'=>'Femme']
            ])
            ->add('datee')
            ->add('Submit',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coach::class,
        ]);
    }
}
