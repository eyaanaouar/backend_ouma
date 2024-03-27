<?php

namespace App\Form;

use App\Entity\Birmchergatg3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Birmchergatg3Type extends AbstractType
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
            'data_class' => Birmchergatg3::class,
        ]);
    }
}
