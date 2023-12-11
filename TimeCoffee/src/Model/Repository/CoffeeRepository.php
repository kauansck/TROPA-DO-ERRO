<?php

namespace QI\TimeCoffee\Model\Repository;

use QI\TimeCoffee\Model\Coffee;
use \PDO;

class CoffeeRepository{
    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    /**
     * Insert a new product in database
     * @param Coffee $coffee
     * @return bool
     */
    public function insert($coffee){
        
        $stmt = $this->connection->prepare("INSERT INTO coffees VALUES (null,?,?,?,?,?,?);");
        $stmt->bindParam(1,$coffee->name);
        $stmt->bindParam(2,$coffee->size);
        $stmt->bindParam(3,$coffee->complements);
        $stmt->bindParam(4,$coffee->price);
        $stmt->bindParam(5,$coffee->quantity,PDO::PARAM_INT);
        $stmt->bindParam(6,$coffee->description);
        return $stmt->execute();
    }

    public function findAll(){
        $stmt = $this->connection->query("SELECT * FROM coffees;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Find a product from of code
     * @param int $id
     * @return mixed
     */
    public function findOne($id){
        $stmt = $this->connection->query("SELECT * FROM coffees where id=$id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Remove a product from of code
     * @param int $id
     * @return bool
     */
    public function delete($id){
        $stmt = $this->connection->query("delete from coffees where id=$id");
        return $stmt->execute();
    }

    /**
     * Update a product in database
     * @param Coffee $coffee
     * @return bool
     */
    public function update($coffee){
        $stmt = $this->connection->prepare("update coffee set product_name = ?, quantity = ?, price = ?, size = ?, complement = ?, description = ? where id = ?");
        $stmt->bindParam(1, $coffee->product_name);
        $stmt->bindParam(2, $coffee->quantity);
        $stmt->bindParam(3, $coffee->price);
        $stmt->bindParam(4, $coffee->size);
        $stmt->bindParam(5, $coffee->complement);
        $stmt->bindParam(6, $coffee->description);
        $stmt->bindParam(7, $coffee->id);
        return $stmt->execute();
    }
}

    