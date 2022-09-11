<?php

include("conexion.php");

if (isset($_POST['registrocar'])) {
    if (strlen($_POST['ref'])>=1 &&
    strlen($_POST['carro'])>= 1 &&
    strlen($_POST['planta'])>= 1 &&
    strlen($_POST['ensamble'])>= 1 &&
    strlen($_POST['modelo'])>= 1 &&
    strlen($_POST['ciudad'])>= 1) {
    $ref= trim($_POST['ref']);
    $carro= trim($_POST['carro']);
    $planta= trim($_POST['planta']);
    $ensamble= date($_POST['ensamble']);
    $modelo= trim($_POST['modelo']);
    $ciudad= trim($_POST['ciudad']);
    $consulta="INSERT INTO carros(id, nombre, planta, ensamble, modelo, ciudad) VALUES ('$ref','$carro','$planta','$ensamble','$modelo','$ciudad')";
    $resultado= mysqli_query($conex,$consulta);
    if ($resultado) {
        ?>
        <h2>¡Has agregado el carro correctamente!</h2>
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