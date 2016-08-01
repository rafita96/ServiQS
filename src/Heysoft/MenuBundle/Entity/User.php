<?php

namespace Heysoft\MenuBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @var \Heysoft\MenuBundle\Entity\Carrito
     */
    private $carrito;


    /**
     * Set carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     *
     * @return User
     */
    public function setCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito = null)
    {
        $this->carrito = $carrito;

        return $this;
    }

    /**
     * Get carrito
     *
     * @return \Heysoft\MenuBundle\Entity\Carrito
     */
    public function getCarrito()
    {
        return $this->carrito;
    }
}
