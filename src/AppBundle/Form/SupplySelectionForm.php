<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class SupplySelectionForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', ChoiceType::class, array(
                'label' => 'Okres',
                'choices' => array(
                    'Dzisiaj' => date_modify(new \DateTime(), '-1 day'),
                    'Ten tydzień' => date_modify(new \DateTime(), '-1 week'),
                    'Ten miesiąc' => date_modify(new \DateTime(), '-1 month'),
                    'Ten rok' => date_modify(new \DateTime(), '-1 year'),
                    'Wszystkie' => 'Wszystkie'
                )
            ))
            ->add('submit', SubmitType::class, array('label' => 'Wyślij'))
            ->getForm();
    }
}