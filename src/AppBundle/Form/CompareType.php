<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CompareType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $placeholder1 = "";
        $placeholder2 = "";
        if (isset($options['data']['placeholder1'])){
            $placeholder1 = $options['data']['placeholder1'];
        }
        if (isset($options['data']['placeholder2'])){
            $placeholder2 = $options['data']['placeholder2'];
        }
        $builder
            ->add('software1', TextType::class, array(
                'label' => 'Choisir le premier logiciel :',
                'attr' => array('autocomplete' => 'off', 'placeholder' => $placeholder1),
                'constraints' => array(new NotBlank()),
            ))
            ->add('software2', TextType::class, array(
                'label' => 'Choisir le deuxième logiciel :',
                'attr' => array('autocomplete' => 'off','placeholder' => $placeholder2),
                'constraints' => array(new NotBlank()),
            ))
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
        ));
    }



}
