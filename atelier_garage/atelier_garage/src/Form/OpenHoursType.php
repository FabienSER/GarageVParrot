<?php

namespace App\Form;

use App\Entity\OpenHours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpenHoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('IdDay')
            ->add('StartMorning')
            ->add('EndMorning')
            ->add('StartAfternoon')
            ->add('EndAfternoon')
            ->add('LabelDay')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OpenHours::class,
        ]);
    }
}
