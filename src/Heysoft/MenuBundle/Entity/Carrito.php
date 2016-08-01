<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Carrito
 */
class Carrito
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $platillos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->platillos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     *
     * @return Carrito
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
    /**
     * @var \Heysoft\MenuBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Heysoft\MenuBundle\Entity\User $user
     *
     * @return Carrito
     */
    public function setUser(\Heysoft\MenuBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Heysoft\MenuBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
