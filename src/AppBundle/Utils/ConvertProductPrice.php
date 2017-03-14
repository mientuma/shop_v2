<?php

namespace AppBundle\Utils;



use AppBundle\Entity\Products;

class ConvertProductPrice
{
    private $product;

    function __construct(Products $products)
    {
        $this->product = $products;
    }

    public function convertProductPrice($products)
    {
        foreach ($products as $product)
        {
            $this->product = $product;
            $price = $this->product->getPrice();
            $moneyFormatPrice = number_format($price, 2);
            $this->product->setPrice($moneyFormatPrice);
        }
    }
}