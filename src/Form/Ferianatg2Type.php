<?php

namespace App\Form;

use App\Entity\Ferianatg2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Ferianatg2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('tauxdegradation')
            ->add('defconso')
            ->add('rendement')
            ->add('consogaz')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ferianatg2::class,
        ]);
    }
}
