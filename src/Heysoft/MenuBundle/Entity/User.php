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
}

