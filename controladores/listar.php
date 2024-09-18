<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$datebase = new Database();
$connection = $datebase->getConnection();
$aprendiz = new Aprendiz($connection);
$lista = $aprendiz->getAll();

?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>CORREO</th>
        <th>TELEFONO</th>
        <th>DNI</th>
        <th>Cuenta</th>
        <th>Promedio</th>
        <th>Editar</th>
    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($lista); $i++){
        ?>
        <tr>
            <td><?= $lista[$i]['id'] ?></td>
            <td><?= $lista[$i]['first_name'] ?></td>
            <td><?= $lista[$i]['last_name'] ?></td>
            <td><?= $lista[$i]['email'] ?></td>
            <td><?= $lista[$i]['phone'] ?></td>
            <td><?= $lista[$i]['dni'] ?></td>
            <td><?= $lista[$i]['num_account'] ?></td>
            <td><?= $lista[$i]['average'] ?></td>
            <td>
                <div>
                    <a href="editar.php?id=<?= $lista[$i]['id'] ?>">Editar</a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
?>