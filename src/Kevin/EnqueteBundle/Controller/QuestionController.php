<?php

namespace Kevin\EnqueteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionController extends Controller
{
    public function listerAction()
    {
        return $this->render('KevinEnqueteBundle:Question:lister.html.twig', array(
                // ...
            ));    }

    public function ajouterAction()
    {
        return $this->render('KevinEnqueteBundle:Question:ajouter.html.twig', array(
                // ...
            ));    }

    public function SupprimerAction()
    {
        return $this->render('KevinEnqueteBundle:Question:Supprimer.html.twig', array(
                // ...
            ));    }

    public function modifierAction()
    {
        return $this->render('KevinEnqueteBundle:Question:modifier.html.twig', array(
                // ...
            ));    }

}
