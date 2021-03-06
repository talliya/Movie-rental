<?php

namespace DvdWorld\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array("label"=>"Name:"));
        $builder->add('surname', 'text', array("label"=>"Surname:"));
        $builder->add('phone_number', 'text', array("label"=>"Phone number:"));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'dvdworld_user_registration';
    }
}