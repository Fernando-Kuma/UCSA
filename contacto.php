<?php
	if(isset($_POST['Ccon'])){
		include ("conexion/conexion00.php");
		if($conexion00){
			$destino = "fernando998@outlook.es";
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$titulo = $_POST['titulo'];
			$mensaje = $_POST['mensaje'];
			$fecha = date("y/m/d");
			if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$query = "ALTER TABLE contacto AUTO_INCREMENT = 1";
				$auto=mysql_query($query,$conexion00);
				$insert = "INSERT INTO contacto(con_nombre,con_correo,con_titulo,con_mensaje,con_fecha) VALUES ('$nombre','$correo','$titulo','$mensaje','$fecha')";
				$ingreso=mysql_query($insert,$conexion00);
				$contenido = "Nombre: ".$nombre." <".$correo."> ".$fecha."\nTitulo: ".$titulo."\nMensaje: ".$mensaje;
	    		if($ingreso){
					mail($destino,"Correo de Contacto UCSA",$contenido);
					mysql_free_result($ingreso);
					include ("conexion/desconexion00.php");
					echo "<script> alert('Se enviaron los datos'); window.location='index.php'; </script>";
				}else{
					include ("conexion/desconexion00.php");
					echo "<script> alert('!No se ingreso a la base de datos'); window,history.go(-1);</script>";
				}
			}else{
				echo "<script> alert('La direccion: ($correo) no es válida'); window,history.go(-1);</script>";
			}
		}else{
			echo "<script> alert('No se conecto la base de datos'); window,history.go(-1);</script>";
		}
	}	
?>