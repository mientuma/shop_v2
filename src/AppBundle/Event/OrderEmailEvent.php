<?php


namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;


class OrderEmailEvent extends Event
{
    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }


}