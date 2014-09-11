<?php

namespace Kevin\EnqueteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnqueteForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("titre")
                ->add("utilisateurUtilisateur")
                ->add("save", "submit");
    }

    public function getName() {
        return "EnqueteForm";
    }

}
