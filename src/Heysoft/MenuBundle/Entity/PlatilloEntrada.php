<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * PlatilloEntrada
 */
class PlatilloEntrada
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platilloentrada;

    /**
     * @var float
     */
    private $precio;


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
     * Set platilloentrada
     *
     * @param string $platilloentrada
     *
     * @return PlatilloEntrada
     */
    public function setPlatilloentrada($platilloentrada)
    {
        $this->platilloentrada = $platilloentrada;

        return $this;
    }

    /**
     * Get platilloentrada
     *
     * @return string
     */
    public function getPlatilloentrada()
    {
        return $this->platilloentrada;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return PlatilloEntrada
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
