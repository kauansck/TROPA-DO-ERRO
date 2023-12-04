<?php

namespace QI\TimeCoffee\Controller;

use Exception;
use QI\TimeCoffee\Model\User;
use QI\TimeCoffee\Model\Repository\UserRepository;
use QI\TimeCoffee\Model\User as ModelUser;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;
    case "findAll":
        findAll();
        break;

    default:
        $_SESSION["msg_warning"] = "Operação inválida.";
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
    $errors = array();
    $user = new User(
        $_POST["user_name"],
        $_POST["user_email"],
        $_POST["user_password"],
    );
    $user->id = 1;
    $user->name = $_POST["createUser_name"];
    $user->email = $_POST["createUser_email"];
    $user->password = password_hash($_POST["createUser_password"], PASSWORD_DEFAULT);
    $user->id = 1;
    $user = new user(
        $_POST["name"],
        $_POST["email"],
        $_POST["password"]
    );
    if (!empty($_POST["name"])) {
        $user->name = $_POST["name"];
    }
    // TODO Validar os dados informados
    try {
        $user_repository = new UserRepository();
        $result = $user_repository->insert($user);
        if ($result) {
            $_SESSION["msg_success"] = "Usuário cadastrado com sucesso!";
        } else {
            $_SESSION["msg_warning"] = "Não foi possível cadastrar um novo usuário.";
        }
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . $exception->getLine() . " - " . $exception->getMessage();
        Logger::writeLog($log);
    } finally {
        header("location:../View/message.php");
        exit;
    }
}

function findAll()
{
    try {
        $user_repository = new UserRepository();
        $_SESSION["list_of_users"] = $user_repository->findAll();
        header("location:../View/list-of-users.php");
    } catch (Exception $exception) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados.";
        $log = $exception->getFile() . " - " . $exception->getLine() . " - " . $exception->getMessage();
        Logger::writeLog($log);
        header("location:../View/message.php");
    }
}
