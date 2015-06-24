<?php

namespace GDIP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomMembre', 'text', array(
                "label" => "Nom",
                "required" => true,
            ))
            ->add('prenomMembre', 'text', array(
                "label" => "Prénom",
                "required" => true,
            ))
            ->add('rangMembre', 'integer', array(
                "label" => "Rang",
                "required" => true,
            ))
            ->add('dateReussiteMembre', 'date', array(
                "label" => "Date de réussite",
                "required" => true,
            ))
            ->add('nbSemestreValide', 'integer', array(
                "label" => "Nombre de semestre valide",
                "required" => true,
            ))
            ->add('estAdherent', 'radio', array(
                "label" => "Est adhérent",
                "required" => true,
            ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'GDIP_user_registration';
    }
}