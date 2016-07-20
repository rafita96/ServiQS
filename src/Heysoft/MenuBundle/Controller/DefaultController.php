<?php

namespace Heysoft\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeysoftMenuBundle:Default:index.html.twig');
    }

    public function categoriaAction($nombre)
    {
    	$repository = $this->getDoctrine()->getRepository("HeysoftMenuBundle:Platillo");

    	$platillos = $repository->findPlatilloPorCategoria($nombre);
    	return $this->render('HeysoftMenuBundle:Menu:showplatillos.html.twig', array('platillos' => $platillos, 'categoria' => $nombre));
    }
}
