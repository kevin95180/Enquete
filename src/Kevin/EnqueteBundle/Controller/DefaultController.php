<?php

namespace Kevin\EnqueteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KevinEnqueteBundle:Default:index.html.twig', array('name' => $name));
    }
}
