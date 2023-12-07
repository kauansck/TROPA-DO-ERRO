<?php

namespace QI\TimeCoffee\Model;

class Detail
{
    private $id;
    private $quantity;
    private $price;

    public function __construct($quantity,$price){
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
