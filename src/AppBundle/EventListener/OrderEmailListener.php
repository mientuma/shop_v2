<?php


namespace AppBundle\EventListener;


use AppBundle\Event\OrderEmailEvent;

class OrderEmailListener
{
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onOrderEmailEvent(OrderEmailEvent $emailEvent)
    {
        $order = $emailEvent->getOrder();
        $orderId = $order->getId();

        $message = \Swift_Message::newInstance()
            ->setSubject("Nowe zamówienie # ".$orderId)
            ->setFrom('hpnorek@gmail.com')
            ->setTo('mientuma@gmail.com')
            ->setBody('Właśnie złożono zamówienie nr. '.$orderId);
    }

}