<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Cart", mappedBy="user")
     * @ORM\JoinColumn(name="id", referencedColumnName="userId")
     */
    private $cart;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Orders", mappedBy="user")
     * @ORM\JoinColumn(name="id", referencedColumnName="userId")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Supply", mappedBy="user")
     * @ORM\JoinColumn(name="id", referencedColumnName="userId")
     */
    private $supply;

    /**
     * @return mixed
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param mixed $cart
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
    }

    /**
     * Add cart
     *
     * @param \AppBundle\Entity\Cart $cart
     *
     * @return User
     */
    public function addCart(\AppBundle\Entity\Cart $cart)
    {
        $this->cart[] = $cart;

        return $this;
    }

    /**
     * Remove cart
     *
     * @param \AppBundle\Entity\Cart $cart
     */
    public function removeCart(\AppBundle\Entity\Cart $cart)
    {
        $this->cart->removeElement($cart);
    }

    /**
     * Add order
     *
     * @param \AppBundle\Entity\Orders $order
     *
     * @return User
     */
    public function addOrder(\AppBundle\Entity\Orders $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \AppBundle\Entity\Orders $order
     */
    public function removeOrder(\AppBundle\Entity\Orders $order)
    {
        $this->orders->removeElement($order);
    }

    public function __construct()
    {
        parent::__construct();
        $this->cart = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }


    /**
     * Add supply
     *
     * @param \AppBundle\Entity\Supply $supply
     *
     * @return User
     */
    public function addSupply(\AppBundle\Entity\Supply $supply)
    {
        $this->supply[] = $supply;

        return $this;
    }

    /**
     * Remove supply
     *
     * @param \AppBundle\Entity\Supply $supply
     */
    public function removeSupply(\AppBundle\Entity\Supply $supply)
    {
        $this->supply->removeElement($supply);
    }

    /**
     * Get supply
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupply()
    {
        return $this->supply;
    }
}
