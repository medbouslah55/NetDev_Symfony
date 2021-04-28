<?php

namespace App\Form;

use App\Entity\Centre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCentre',TextType::class,  ['label' => ' Nom du Centre :'])
            ->add('telCentre',TextType::class,  ['label' => ' Numéro téléphone :'])
            ->add('mailCentre',TextType::class,  ['label' => ' E-mail :'])
            ->add('adrCentre',TextType::class,  ['label' => ' Adresse du Centre :'])
            ->add('typeCentre',TextType::class,  ['label' => ' Type du Centre :'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Centre::class,
        ]);
    }
}
