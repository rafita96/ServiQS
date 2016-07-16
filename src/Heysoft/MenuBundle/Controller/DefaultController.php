<?php

namespace Heysoft\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeysoftMenuBundle:Default:index.html.twig');
    }
}
