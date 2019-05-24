<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Producteur;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('quantite')
            ->add('date', DateTimeType::class, [
                'attr' => ['hidden' => true]
            ])
            ->add('suivi')
            ->add('origine', EntityType::class, [
                'class' => Producteur::class,
                'choice_label' => "nom"
            ])
            ->add('exportateur', EntityType::class, [
                'class' => User::class,
                'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere("u.type =    'exportateur'")
                    ->orderBy('u.entreprise', "ASC");
                },
                'choice_label' => "entreprise"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
