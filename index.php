<?php

require_once(__DIR__ . "/libs/Database.php");
require_once(__DIR__ . "/libs/Modelo.php");
include_once("clases/Aprendiz.php");
$database = new Database();
$connection = $database->getConnection($database);
$aprendiz = new Aprendiz($connection);


if (
    !isset ($_POST["first_name"])&& 
    !isset ($_POST["last_name"])&& 
    !isset ($_POST["email"])&& 
    !isset ($_POST["phone"])&& 
    !isset ($_POST["dni"])
    ) {
        $aprendiz -> store ([
            'first_name' => $_POST["first_name"],
            'last_name' => $_POST["last_name"],
            'email' => $_POST["email"],
            'phone' => $_POST["phone"],
            'dni' => $_POST["dni"],
            'num_account' => isset($_POST["num_account"]) ? $_POST["num_account"] : '' ,
            'average' => isset($_POST["average"]) ? $_POST["user_account"] : ''
        ]);
    } else {
        echo ("No llego nada");
    }

// $results = $aprendiz->getAll();
// var_dump($results);
// $result = $aprendiz->getAll();
// $result = $aprendiz->getById(1);
// var_dump($result)

// $result = $aprendiz->getById(4);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $aprendiz->update(4, [
//     'first_name' => 'Jhon',
//     'last_name' => 'Carreño',
//     'address' => 'SENA Giron',
//     'num_account' => 2696521
// ]);

// $aprendiz->delete(2);
?>