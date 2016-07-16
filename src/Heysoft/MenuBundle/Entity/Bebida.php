<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Bebida
 */
class Bebida
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bebida;

    /**
     * @var int
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
     * Set bebida
     *
     * @param string $bebida
     *
     * @return Bebida
     */
    public function setBebida($bebida)
    {
        $this->bebida = $bebida;

        return $this;
    }

    /**
     * Get bebida
     *
     * @return string
     */
    public function getBebida()
    {
        return $this->bebida;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Bebida
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
