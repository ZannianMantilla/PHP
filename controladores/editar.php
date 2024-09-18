<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$datebase = new Database();
$connection = $datebase->getConnection();
$aprendiz = new Aprendiz($connection);


$id = $_REQUEST['id'];
$usuario = $aprendiz->getById($id);
var_dump($usuario);

?>