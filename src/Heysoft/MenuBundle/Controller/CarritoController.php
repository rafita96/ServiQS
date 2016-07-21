<?php

namespace Heysoft\MenuBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarritoController extends Controller
{
	public function AgregarAction(Request $request)
    {	
    	$data = $request->request->get('id',null);

    	$repository = $this->getDoctrine()->getRepository('HeysoftMenuBundle:Platillo');

    	$platillo = $repository->findOneById($data);
        $platillo->setIngredientes('Has accionado un llamado AJAX');

		$em = $this->getDoctrine()->getManager();
		$em->persist($platillo);
		$em->flush($platillo);

    	$response = array("code" => 100, "success" => true);

        return new JsonResponse($response);
    }
}