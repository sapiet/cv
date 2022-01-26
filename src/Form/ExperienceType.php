<?php

namespace App\Form;

use App\Entity\Experience;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $currentYear = (int) (new \DateTimeImmutable())->format('Y');
        $years = range($currentYear - 40, $currentYear + 1);
        // $years = [2020, 2021];

        $builder
            ->add('company')
            ->add('jobName')
            ->add('startDate', null, compact('years'))
            ->add('endDate', null, compact('years'))
            ->add('city')
            ->add('description')
            // ->add('profile', null, ['choice_label' => 'firstname'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Experience::class,
        ]);
    }
}
