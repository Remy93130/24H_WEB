<?php

namespace App\Form;

use App\Entity\Cafe;
use App\Entity\Producteur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CafeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('type', ChoiceType::class, [
                "label" => "Type de café",
                "choices" => [
                    "Arabica" => "arabica",
                    "Robusta" => "robusta"
                ]
            ])
            ->add('stock')
            ->add('provenance', EntityType::class, [
                'class' => Producteur::class,
                'choice_label' => "nom"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cafe::class,
        ]);
    }
}
