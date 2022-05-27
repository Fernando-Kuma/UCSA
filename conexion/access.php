<?php
	if(isset($_POST['login']) && $_POST["option"] == "Ingresar"){
		include ("conexion.php");
        $pass= sha1 ($_POST['pass']);
        $query = 'SELECT * FROM usuarios WHERE user_email="'.$_POST['email'].'" AND user_password="'.$pass.'"';
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $fila){
            session_start();
            $_SESSION['id'] = $fila["id_user"];
            $_SESSION['rol'] = $fila["user_rol"];
            
            $_SESSION['name'] = $fila["user_name"];
            $_SESSION['surnames'] = $fila["user_surnames"];
            $_SESSION['email'] = $fila["user_email"];
            $_SESSION['photo'] = $fila["user_photo"];
        }
        if(!empty($resultado)){
            echo '<script>alert("Usuario ingresado");</script>';
            $query = 'UPDATE usuarios SET user_admission_date=CURRENT_TIMESTAMP WHERE id_user='.$_SESSION['id'];
            $stmt = $conexion ->prepare($query);
            $stmt->execute();
            switch ($_SESSION['rol']) {
                case '1':
                case '2':
                case '3':
                    header("Location:../dashboard/index.php");
                default:
                    echo "<script>alert('Error Usuarios'); window,history.go(-1);</script>";
                break;	
            }
        }else{
            echo "<script>alert('Datos incorrectos'); window,history.go(-1);</script>";
        }
    }else{
        header("Location:../");
    }
?>