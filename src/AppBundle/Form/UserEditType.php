<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, ['label' => "Nom d'utilisateur"])
            ->add(
                'roles', ChoiceType::class, [
                    'choices' => [
                        'Rôle utilisateur' => 'ROLE_USER',
                        'Rôle administrateur' => 'ROLE_ADMIN',
                    ],
                    'multiple' => true
                ]
            )
            ->add('email', EmailType::class, ['label' => 'Adresse email'])
        ;
    }
}

