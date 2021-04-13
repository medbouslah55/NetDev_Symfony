<?php

namespace App\Form;

use App\Entity\Menu;
use App\Entity\Regime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //https://youtu.be/NNCpj4otnrc?t=870
            ->add('idRegime', EntityType::class, [
                'label' => 'Régime:',
                'class' => Regime::class,
                'required' => false,
            ])
            ->add('description', TextType::class, ['label' => 'Description:',])
            ->add('numJour', IntegerType::class, ['label' => 'Menu jour N°:',])
            ->add('matin', TextType::class, ['label' => 'Matin:',])
            ->add('matinImg', FileType::class, ['label' => 'Image Matin:','data_class' => null])
            ->add('dejeuner', TextType::class, ['label' => 'Déjeuner:',])
            ->add('dejeunerImg', FileType::class,['label' => 'Image Déjeuner:','data_class' => null])
            ->add('dinner', TextType::class, ['label' => 'Dinner:',])
            ->add('dinnerImg', FileType::class,['label' => 'Image Dinner:','data_class' => null])
            ->add('totalCalories', IntegerType::class, ['label' => 'Total Calorique:',])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
