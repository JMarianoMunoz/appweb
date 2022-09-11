<?php

include("conexion.php");

if (isset($_POST['registrocl'])) {
    if (strlen($_POST['nombre'])>=1 &&
    strlen($_POST['cedula'])>= 1 &&
    strlen($_POST['reserva'])>= 1) {
    $nombre= trim($_POST['nombre']);
    $cedula= trim($_POST['cedula']);
    $reserva= trim($_POST['reserva']);
    $consulta2="INSERT INTO clientes(nombre, cedula, reserva) VALUES ('$nombre','$cedula','$reserva')";
    $resultado2= mysqli_query($conex,$consulta2);
    if ($resultado2) {
        ?>
        <h2>¡Has agregado tu reserva correctamente!</h2>
        <?php
         include("index.php");
         
    } else {
        ?>
        <h3>¡Ups! Ha ocurrido un error.</h3>
        <?php
    }
} else {
    ?>
        <h3>¡Por favor, complete los campos!</h3>
    <?php
}
}


?>
