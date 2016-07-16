<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * PlatilloChico
 */
class PlatilloChico
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platillochico;

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
     * Set platillochico
     *
     * @param string $platillochico
     *
     * @return PlatilloChico
     */
    public function setPlatillochico($platillochico)
    {
        $this->platillochico = $platillochico;

        return $this;
    }

    /**
     * Get platillochico
     *
     * @return string
     */
    public function getPlatillochico()
    {
        return $this->platillochico;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return PlatilloChico
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
