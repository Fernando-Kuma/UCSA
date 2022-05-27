<?php

    function activeUser($id, $conexion){
        $query = "SELECT * FROM usuarios 
        INNER JOIN roles
        ON user_rol = rol_id
        WHERE id_user=".$id;
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $fila) {
            $usuario = array();
            $usuario["id"] = '<button type="button" class="btn btn-dark edit" name="edit" id='.$fila["id_user"].'><i class="fas fa-user-edit"></i></button>';
            $usuario["name"] = $fila["user_name"];
            $usuario["surnames"] = $fila["user_surnames"];
            $usuario["email"] = $fila["user_email"];
            $usuario["photo"] = $fila["user_photo"];
            $usuario["creation"] = $fila["user_creation_date"];
            $usuario["admission"] = $fila["user_admission_date"];
            $usuario["rol"] = $fila["rol_name"];
        }
        return $usuario;
    };

    function users($rol, $conexion){

        $query = "SELECT * FROM usuarios INNER JOIN roles
        ON user_rol = rol_id WHERE user_rol >= ".$rol;
        $datos = array();
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $fila) {
            $sub_array = array();
            $sub_array["id"] = $fila["id_user"];
            $sub_array["name"] = $fila["user_name"];
            $sub_array["surnames"] = $fila["user_surnames"];
            $sub_array["email"] = $fila["user_email"];
            $sub_array["photo"] = $fila["user_photo"];
            $sub_array["creation"] = $fila["user_creation_date"];
            $sub_array["admission"] = $fila["user_admission_date"];
            $sub_array["rol"] = $fila["rol_name"];
            $datos[] = $sub_array;
        }
        return $datos;
    };

    function showUser($id, $conexion){
        $salida = array();
        $query = 'SELECT * FROM usuarios INNER JOIN roles
        ON user_rol = rol_id WHERE id_user='.$id;
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $fila) {
            $salida["id"] = $fila["id_user"];
            $salida["name"] = $fila["user_name"];
            $salida["surnames"] = $fila["user_surnames"];
            $salida["email"] = $fila["user_email"];
            $salida["id_rol"] = $fila["user_rol"];
            $salida["rol"] = $fila["rol_name"];
            if($fila["user_photo"] != ''){
                $salida["photo"] = 
                '<img src="../img/' . $fila["user_photo"] . '" class="img-thumbnail" width="75" height="37" />
                <input type="hidden" name="hiddenPhoto" value="'.$fila["user_photo"].'">';
                
            } else {
                $salida["photo"] = 
                '<input type="hidden" name="hiddenPhoto" value="'.$fila["user_photo"].'">';
            }
        }
        return $salida;
    };

    function uploadPhoto(){
        if (isset($_FILES["photo"])) {
            $extension = explode('.', $_FILES["photo"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './../../img/'.$nuevo_nombre;
            move_uploaded_file($_FILES["photo"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function getPhoto($id, $conexion){
        $query = "SELECT user_photo FROM usuarios WHERE id_user=".$id;
        $stmt = $conexion->prepare($query);
        
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["user_photo"];
        }
    }

    function contacts($conexion){
        $query = "SELECT * FROM contacto";
        $datos = array();
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $fila) {
            $sub_array = array();
            $sub_array["id"] = $fila["con_id"];
            $sub_array["nombre"] = $fila["con_nombre"];
            $sub_array["correo"] = $fila["con_correo"];
            $sub_array["titulo"] = $fila["con_titulo"];
            $sub_array["mensaje"] = $fila["con_mensaje"];
            $sub_array["fecha"] = $fila["con_fecha"];
            $datos[] = $sub_array;
        }
        return $datos;
    };
?>