<?php

namespace Imbuzzit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImbuzzitAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
