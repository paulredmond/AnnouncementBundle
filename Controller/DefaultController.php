<?php

namespace Redmonster\PaulRevereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RedmonsterPaulRevereBundle:Default:index.html.twig', array('name' => $name));
    }
}
