<?php


namespace App\Form;
use App\Data\SearchData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchType1 extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('q', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'Rechercher',
            ]
        ])
            ->add('tri', ChoiceType::class, [
                'attr' => [
                    'label' => ''
                ],
                'choices' => [
                    'Nom' => 'nom',
                    'Prénom' => 'prenom',
                    'Date' => 'dateAct',
                ]]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
                'data_class' => SearchData::class,
                'method' => 'GET',
                'csrf_protection' => false,

            ]
        );
    }

    public function getBlockPrefix()
    {
        return '';
    }
}