<?php

namespace Sopinet\Template\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SopinetTemplateLandingBundle:Default:index.html.twig', array('name' => $name));
    }
}
