<?php

namespace Heysoft\MenuBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarritoController extends Controller
{
	public function AgregarAction(Request $request)
    {	
    	$repository = $this->getDoctrine()->getRepository('HeysoftMenuBundle:Platillo');
    	$response = array("code" => 100, "success" => true);
        return new JsonResponse($response);
    }
}