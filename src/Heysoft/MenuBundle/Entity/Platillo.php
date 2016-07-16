<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Platillo
 */
class Platillo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platillo;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var int
     */
    private $duracion;

    /**
     * @var string
     */
    private $ingredientes;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var bool
     */
    private $cdia;


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
     * Set platillo
     *
     * @param string $platillo
     *
     * @return Platillo
     */
    public function setPlatillo($platillo)
    {
        $this->platillo = $platillo;

        return $this;
    }

    /**
     * Get platillo
     *
     * @return string
     */
    public function getPlatillo()
    {
        return $this->platillo;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Platillo
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

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Platillo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Platillo
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set ingredientes
     *
     * @param string $ingredientes
     *
     * @return Platillo
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get ingredientes
     *
     * @return string
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Platillo
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set cdia
     *
     * @param boolean $cdia
     *
     * @return Platillo
     */
    public function setCdia($cdia)
    {
        $this->cdia = $cdia;

        return $this;
    }

    /**
     * Get cdia
     *
     * @return bool
     */
    public function getCdia()
    {
        return $this->cdia;
    }
}
