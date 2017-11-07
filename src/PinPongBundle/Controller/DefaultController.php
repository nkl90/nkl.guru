<?php

namespace PinPongBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function tableAction()
    {
        return $this->render('PinPongBundle:Default:table.html.twig');
    }
}
