<?php

namespace QI\TimeCoffee\Model;

class User{
    private $id;
    private $name;
    private $email;
    private $password;
    
    /**
     * Create a new User object
     * @param string $name
     * @param string $email
     * @param string $password
     */
    
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email; 
        $this->password = $password;
    }

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}