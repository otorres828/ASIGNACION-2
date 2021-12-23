<?php
include '../database/db.php';

// NUEVO ACTOR
if (isset($_POST['nuevoActor'])) {
    if (isset($_POST['nombreactor']) && isset($_POST['nacionalidad'])) {
            $nombreactor = $_POST['nombreactor'];
            $nacionalidad = $_POST['nacionalidad'];
            $sentencia = $base_de_datos->prepare("INSERT INTO actores(nombreactor, nacionalidad) VALUES (?, ?)");
            $resultado = $sentencia->execute([$nombreactor, $nacionalidad]); # Pasar en el mismo orden de los ?
            if ($resultado === true) {
                header("Location: ../Admin/actores.php");
            } else {
                echo "Algo salió mal";
            }          
    }
}

// MODIFICAR ACTOR
if (isset($_POST['modificarActor'])) {
    if (isset($_POST['nombreactor']) && isset($_POST['nacionalidad']) && isset($_POST['idactor']) ) {
        $nombreactor = $_POST['nombreactor'];
        $nacionalidad = $_POST['nacionalidad'];
        $idactor=  $_POST['idactor'];
        $sentencia = $base_de_datos->prepare("UPDATE actores SET nombreactor = ?, nacionalidad = ? WHERE idactor = ?;");
        $resultado = $sentencia->execute([$nombreactor, $nacionalidad, $idactor]); # Pasar en el mismo orden de los ?
        if ($resultado === true) {
            header("Location: ../Admin/actores.php");
        } else {
            echo "Algo salió mal";
        }
        
    }
}

// ELIMINAR ACTOR
if(isset($_GET['idactor'])){
    $idactor=$_GET['idactor'];

    $sentencia = $base_de_datos->prepare("DELETE FROM actores WHERE idactor = ?;");
    $resultado = $sentencia->execute([$idactor]);
    if ($resultado === true) {
        header("Location: ../Admin/actores.php");
    } else {
        echo "Algo salió mal";
    }
}

?>
