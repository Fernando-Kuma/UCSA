<?php
	//$hostname="localhost";
	//$username="root";
	//$password="12345678";
	//$database="mexico";
	//$conexion00 = new mysqli($hostname,$username,$password,$database);
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mexico";
    date_default_timezone_set("Mexico/General");
	setlocale(LC_TIME, 'es_MX.UTF-8');
    $conexion = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
?>