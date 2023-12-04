<?php

namespace QI\TimeCoffee\Model\Repository;

use QI\TimeCoffee\Model\User;
use \PDO;

class UserRepository{
    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    /**
     * Insert a new call in database
     * @param User $user
     * @return bool
     */
    public function insert($user){
        $stmt = $this->connection->prepare("insert into calls values(null,?,?,?,?);");
        $stmt->bindParam(1,$user->user->id, PDO::PARAM_INT);
        $stmt->bindParam(2,$user->name, PDO::PARAM_STR);
        $stmt->bindParam(3,$user->email);
        $stmt->bindParam(4,$user->password);
        return $stmt->execute();
    }

    public function findAll(){
        $stmt = $this->connection->query("SELECT us.*,u.name FROM users us inner join users u on us.user_id = u.id;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}