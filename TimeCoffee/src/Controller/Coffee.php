<?php

namespace QI\TimeCoffee\Controller;

use Exception;
use QI\TimeCoffee\Model\Coffee;
use QI\TimeCoffee\Model\Repository\CoffeeRepository;
use QI\TimeCoffee\Controller\Logger;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;
    case "findAll":
        findAll();
        break;
    case "findOne":
        findOne();
        break;
    case "delete":
        delete();
        break;
    case "edit":
        update();
        break;
    default:
        $_SESSION["msg_warning"] = "Operação inválida!";
        header("location:../View/message.php");
        break;
}

function insert()
{
    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado.";
        header("location:../View/message.php");
        exit;
    }

    $coffee = new Coffee(
        $_POST["product_name"],
        $_POST["size"],
        $_POST["complement"],
        $_POST["price"],
        $_POST["quantity"]
    );
    if (!empty($_POST["description"])) {
        $coffee->description = $_POST["description"];
    }
    // TODO Validar os dados informados
    try {
        $coffee_repository = new CoffeeRepository();
        $result = $coffee_repository->insert($coffee);
        if ($result) {
            $_SESSION["msg_success"] = "Seu produto foi registrado com sucesso.";
        } else {
            $_SESSION["msg_warning"] = "Não foi possível registrar este produto!";
        }
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . 
        $exception->getLine() . " - " . 
        $exception->getMessage();
        Logger::writeLog($log);
    } finally {
        header("location:../View/message.php");
        exit;
    }
}

function findAll()
{
    try {
        $coffee_repository = new CoffeeRepository();
        $_SESSION["list_of_product"] = $coffee_repository->findAll();
        header("location:../View/list-of-product.php");
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . 
        $exception->getLine() . " - " . 
        $exception->getMessage();
        Logger::writeLog($log);
        header("location:../View/message.php");
    }
}

function findOne()
{
    $id = $_GET["code"];
    if (empty($id)) {
        $_SESSION["msg_error"] = "O código do produto é inválido.";
        header("location:../View/message.php");
        exit;
    }
    try {
        $coffee_repository = new CoffeeRepository();
        $coffee = $coffee_repository->findOne($id);
        if (!empty($coffee)) {
            $_SESSION["coffee"] = $coffee;
            header("location:../View/edit-product.php");
        } else {
            $_SESSION["msg_warning"] = "O produto $id não existe em nossa base de dados!";
            header("location:../View/message.php");
        }
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro insperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . 
        $exception->getLine() . " - " . 
        $exception->getMessage();
        Logger::writeLog($log);
        header("location:../View/message.php");
    }
}

function delete()
{
    $id = $_GET["code"];
    if (empty($id)) {
        $_SESSION["msg_error"] = "O código do produto é inválido.";
        header("../View/message.php");
        exit;
    }
    try {
        $coffee_repository = new CoffeeRepository();
        $result = $coffee_repository->delete($id);
        if ($result) {
            $_SESSION["msg_success"] = "O produto foi removido com sucesso.";
        } else {
            $_SESSION["msg_warning"] = "Não foi possível remover o produto!";
        }
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . 
        $exception->getLine() . " - " . 
        $exception->getMessage();
        Logger::writeLog($log);
    } finally {
        header("location:../View/message.php");
    }
}

function update(){
    if(empty($_POST)){
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nosso sistema.";
        header("location:../View/message.php");
        exit;
    } 
    $coffee = new Coffee(
        $_POST["name"],
        $_POST["size"],
        $_POST["complements"],
        $_POST["price"],
        $_POST["quantity"]
    );
}
