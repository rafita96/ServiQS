<?php

namespace Heysoft\MenuBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heysoft\MenuBundle\Entity\DescripcionPedido;

class CarritoController extends Controller
{
	public function AgregarAction(Request $request)
    {	
    	$data = $request->request->get('id',null);

    	$repository = $this->getDoctrine()->getRepository('HeysoftMenuBundle:Platillo');
        // $em = $this->getDoctrine()->getManager();

  //       $carrito = $user->getCarrito();

  //       $platillo = $repository->findOneById($data);

  //       $descripcion = new DescripcionPedido();
  //       $descripcion->addPlatillo($platillo);
  //       $em->persist($descripcion);
  //       $em->flush($descripcion);
        
  //       $carrito->addDescripciones($descripcion);

		// $em->persist($carrito);
  //       $em->flush($carrito)

    	$response = array("code" => 100, "success" => true);

        return new JsonResponse($response);
    }
}