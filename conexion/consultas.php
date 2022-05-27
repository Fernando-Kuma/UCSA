<?php
    include("conexion.php");
    $con1 = "SELECT * FROM galeria";
    $galeria = $conexion->query($con1);
    $con2 = "SELECT * FROM servicios";
    $servicios = $conexion->query($con2);
    $con3 = "SELECT * FROM elegirnos";
    $elegirnos = $conexion->query($con3);
    $con4 = "SELECT * FROM carrusel";
    $carrusel = $conexion->query($con4);
    $con5 = "SELECT * FROM cursos";
    $cursos = $conexion->query($con5);
    $con6 = "SELECT * FROM equipo";
    $equipo = $conexion->query($con6);
    $con7 = "SELECT * FROM noticias";
    $noticias = $conexion->query($con7);
    $con8 = "SELECT * FROM numeros";
    $numeros = $conexion->query($con8);
    $con9 = "SELECT * FROM testimonios";
    $testimonios = $conexion->query($con9); 
?>