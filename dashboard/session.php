<?php
    session_start();
    if (!isset($_SESSION['rol']) || !isset($_SESSION['id'])) {
    //echo "<script> alert('No tienes permiso para ver la pagina'); window.location='../'; </script>";
    header("Location:../");
    die();
    }
    $id = $_SESSION['id'];
    if ($_SESSION['rol'] == 1) {
    $rol = "Super Usuario";
    } else if ($_SESSION['rol'] == 2) {
    $rol = "Usuario administrador";
    } else if ($_SESSION['rol'] == 3) {
    $rol = "Usuario cliente";
    }
    include("../conexion/conexion.php");

    $query = "SELECT * FROM roles WHERE rol_id >= ".$_SESSION['rol'];
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado_rol = $stmt->fetchAll();
?>
