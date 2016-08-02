<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * DescripcionPedido
 */
class DescripcionPedido
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return DescripcionPedido
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $carritos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $platillos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descripcion = "";
        $this->carritos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platillos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     *
     * @return DescripcionPedido
     */
    public function addCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito)
    {
        $this->carritos[] = $carrito;

        return $this;
    }

    /**
     * Remove carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     */
    public function removeCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito)
    {
        $this->carritos->removeElement($carrito);
    }

    /**
     * Get carritos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarritos()
    {
        return $this->carritos;
    }

    /**
     * Add platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     *
     * @return DescripcionPedido
     */
    public function addPlatillo(\Heysoft\MenuBundle\Entity\Platillo $platillo)
    {
        $this->platillos[] = $platillo;

        return $this;
    }

    /**
     * Remove platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     */
    public function removePlatillo(\Heysoft\MenuBundle\Entity\Platillo $platillo)
    {
        $this->platillos->removeElement($platillo);
    }

    /**
     * Get platillos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatillos()
    {
        return $this->platillos;
    }
}
