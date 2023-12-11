<?php

namespace QI\TimeCoffee\Model;

class Coffee
{
    private $id;
    private $name;
    private $size;
    private $complements;
    private $price;
    private $quantity;
    private $description;

    /**
     * Create a new Coffee object
     * @param string $name
     * @param int $size
     * @param string $complements
     * @param float $price
     * @param int $quantity
     * @param string $description
     */
    public function __construct($name, $size, $complements, $price, $quantity){
        $this->name = $name;
        $this->size = $size;
        $this->complements = $complements;
        $this->price = $price;
        $this->quantity = $quantity;
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
