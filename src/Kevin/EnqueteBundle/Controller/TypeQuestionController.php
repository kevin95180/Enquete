<?php

namespace Kevin\EnqueteBundle\Controller;

use Kevin\EnqueteBundle\Entity\TypeQuestion;
use Kevin\EnqueteBundle\Form\TypeQuestionForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeQuestionController extends Controller
{
    public function ajouterAction(Request $request)
    {
        $typeQuestion = new TypeQuestion();
        $form = $this->createForm(new TypeQuestionForm(), $typeQuestion);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeQuestion);
            $em->flush();

//            $this->get("session")->getFlashBag()->add("success", "groupe bien ajouté");

            return $this->redirect($this->generateUrl("kevin_enquete_ajouter"));
        }
        
        return $this->render('KevinEnqueteBundle:TypeQuestion:ajouter.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function listerAction()
    {
        return $this->render('KevinEnqueteBundle:TypeQuestion:lister.html.twig', array(
                // ...
            ));    }

    public function modifierAction()
    {
        return $this->render('KevinEnqueteBundle:TypeQuestion:modifier.html.twig', array(
                // ...
            ));    }

    public function supprimerAction()
    {
        return $this->render('KevinEnqueteBundle:TypeQuestion:supprimer.html.twig', array(
                // ...
            ));    }

}
