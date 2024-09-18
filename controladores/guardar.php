<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$nombre = isset($_POST['first_name']) ? 
($_POST["first_name"] != "" ? $_POST["first_name"]  : false) : false;

$apellido = isset($_POST['last_name']) ? 
($_POST["last_name"] != "" ? $_POST["last_name"]  : false) : false;

$correo = isset($_POST['email']) ? 
($_POST["email"] != "" ? $_POST["email"]  : false) : false;

$telefono = isset($_POST['phone']) ? 
($_POST["phone"] != "" ? $_POST["phone"]  : false) : false;

$documento = isset($_POST['dni']) ? 
($_POST["dni"] != "" ? $_POST["dni"]  : false) : false;

$num_account = isset($_POST["num_account"]) ? $_POST["num_account"] : '';
$average = isset($_POST["average"]) ? $_POST["average"] : '';

if (
    $nombre &&
    $apellido &&
    $correo &&
    $telefono &&
    $documento
    ) {
        $datebase = new Database();
        $connection = $datebase->getConnection();
        $aprendiz = new Aprendiz($connection);
        $valor = $aprendiz->store([
            "first_name" => $nombre, 
            "last_name" => $apellido, 
            "email" => $correo, 
            "phone" => $telefono,
            "dni"=> $documento,
            'num_account' => $num_account,
            'average' => $average
            ]);
            if ($valor != null) {
                header('location:listar.php');
            }
        }else{
            echo 'Faltan campos obligatorios';
    }