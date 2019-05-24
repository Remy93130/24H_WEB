<?php

namespace App\Form;

use App\Entity\Cafe;
use App\Entity\Commande;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateTimeType::class, [
                "label" => false,
                "attr" => ['hidden' => true]
            ])
            ->add('etat', HiddenType::class, [
                "attr" => ["value" => "Preparation"]
            ])
            // ->add('acheteur')
            // ->add('vendeur')
            ->add('cafe', EntityType::class, [
                'class' => Cafe::class,
                'choice_label' => function (Cafe $cafe) {
                    return $cafe->getNom() . " | " .
                        $cafe->getProprietaire()->getEntreprise() . " | " .
                        strtoupper($cafe->getType()) . " | " . $cafe->getStock() . " Kg restants";
                }
            ])
            ->add('quantite', NumberType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
