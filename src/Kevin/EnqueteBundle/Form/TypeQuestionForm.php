<?php

namespace Kevin\EnqueteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TypeQuestionForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("libelle")
                ->add("save", "submit");
    }

    public function getName() {
        return "TypeQuestionForm";
    }

}
