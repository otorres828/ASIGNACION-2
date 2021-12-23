<?php

include '../database/db.php';
$consulta = "select * from actores";
# Preparar sentencia e indicar que vamos a usar un cursor
$actores = $base_de_datos->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
# Ejecutar sin parámetros
$actores->execute();
?>