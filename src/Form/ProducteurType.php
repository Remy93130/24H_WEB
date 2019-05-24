<?php

namespace App\Form;

use App\Entity\Producteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProducteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description', TextareaType::class, [
                "attr" => [
                    "rows" => 5
                ]
            ])
            ->add('drapeau', UrlType::class, [
                "label" => "Lien image drapeau"
            ])
            ->add('capitale')
            ->add('habitant', NumberType::class)
            ->add('surface')
            ->add('tonne', NumberType::class)
            ->add('pourcent', NumberType::class, [
                "label" => "Part du marché"
            ])
            ->add('arabica', NumberType::class, [
                "label" => "Ratio Arabica"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producteur::class,
        ]);
    }
}
