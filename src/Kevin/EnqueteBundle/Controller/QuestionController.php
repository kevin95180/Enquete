<?php

namespace Kevin\EnqueteBundle\Controller;

use Kevin\EnqueteBundle\Entity\Question;
use Kevin\EnqueteBundle\Form\QuestionForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function listerAction()
    {
        return $this->render('KevinEnqueteBundle:Question:lister.html.twig', array(
                // ...
            ));    }

    public function ajouterAction(Request $request)
    {
        $question = new Question();
        $form = $this->createForm(new QuestionForm(), $question);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

//            $this->get("session")->getFlashBag()->add("success", "Création de la question");

            return $this->redirect($this->generateUrl("kevin_enquete_lister"));
        }
        
        return $this->render('KevinEnqueteBundle:Question:ajouter.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function supprimerAction()
    {
        return $this->render('KevinEnqueteBundle:Question:supprimer.html.twig', array(
                // ...
            ));    }

    public function modifierAction()
    {
        return $this->render('KevinEnqueteBundle:Question:modifier.html.twig', array(
                // ...
            ));    }

}
