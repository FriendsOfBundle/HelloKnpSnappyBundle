<?php

namespace FOB\HelloSnappyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FOBHelloSnappyBundle:Default:index.html.twig', array('name' => $name));
    }
}
