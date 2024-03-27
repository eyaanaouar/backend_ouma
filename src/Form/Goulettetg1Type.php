<?php

namespace App\Form;

use App\Entity\Goulettetg1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Goulettetg1Type extends AbstractType
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
            'data_class' => Goulettetg1::class,
        ]);
    }
}
