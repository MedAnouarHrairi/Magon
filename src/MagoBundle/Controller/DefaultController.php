<?php

namespace MagoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MagoBundle:Default:index.html.twig');
    }
}
