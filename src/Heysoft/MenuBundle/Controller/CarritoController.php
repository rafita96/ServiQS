<?php

namespace Heysoft\MenuBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heysoft\MenuBundle\Entity\DescripcionPedido;

use Heysoft\MenuBundle\Resources\extra\Cantidad;

class CarritoController extends Controller
{

  public function verAction(Request $request)
  {
    $user = $this->getUser();
    $carrito = $user->getCarrito();

    $platillos = array();
    $id = array();
    $descripciones = $carrito->getDescripciones()->toArray();

    foreach($descripciones as $descripcion)
    {
      $platillo = $descripcion->getPlatillo();
      if(!in_array($platillo->getId() , $id))
      {
        array_push($id, $platillo->getId());
        $cantidad = new Cantidad($platillo);
        array_push($platillos, $cantidad);
      }
      else
      {
        foreach($platillos as $p)
        {
          if($p->getPlatillo() === $platillo)
          {
            $p->aumentar();
            break;
          }
        }
      }
    }

    return $this->render('HeysoftMenuBundle:Carrito:vercarrito.html.twig', array('carrito' => $carrito, 'platillos' => $platillos));
  }

	public function AgregarAction(Request $request)
    {	
    	$data = $request->request->get('id',null);

    	$repository = $this->getDoctrine()->getRepository('HeysoftMenuBundle:Platillo');

      $user = $this->getUser();
      $em = $this->getDoctrine()->getManager();

      $carrito = $user->getCarrito();

      $platillo = $repository->findOneById($data);

      $descripcion = new DescripcionPedido();
      $descripcion->setPlatillo($platillo);
      $carrito->addDescripcione($descripcion);

      $em->persist($descripcion);
      $em->flush($descripcion);

		  $em->persist($carrito);
      $em->flush($carrito);

    	$response = array("code" => 100, "success" => true);

      return new JsonResponse($response);
    }
}