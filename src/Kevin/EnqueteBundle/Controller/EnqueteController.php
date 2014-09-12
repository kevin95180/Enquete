<?php

namespace Kevin\EnqueteBundle\Controller;

use Kevin\EnqueteBundle\Entity\Enquete;
use Kevin\EnqueteBundle\Form\EnqueteForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EnqueteController extends Controller
{
    public function ajouterAction(Request $request)
    {
        $enquete = new Enquete();
        $form = $this->createForm(new EnqueteForm(), $enquete);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enquete);
            $em->flush();

//           $this->get("session")->getFlashBag()->add("success", "Enquete créée");

            return $this->redirect($this->generateUrl("kevin_enquete_typeQuestion_ajouter"));
        }
        
        return $this->render('KevinEnqueteBundle:Enquete:ajouter.html.twig', array(
                "form" => $form->createView()
            ));    }

    public function supprimerAction()
    {
        return $this->render('KevinEnqueteBundle:Enquete:supprimer.html.twig', array(
                // ...
            ));    }

    public function listerAction()
    {
        return $this->render('KevinEnqueteBundle:Enquete:lister.html.twig', array(
                // ...
            ));    }

    public function modifierAction()
    {
        return $this->render('KevinEnqueteBundle:Enquete:modifier.html.twig', array(
                // ...
            ));    }

}
