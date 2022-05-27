<?php
    include("../../conexion/conexion.php");
    include("functions.php");
    if($_POST["operation"] == "Create"){
        $password = SHA1($_POST["pass"]);
        $photo = '';
        if($_FILES["photo"]["name"] != ''){
            $photo = uploadPhoto();
        }
        $_POST["email"]."<br>".$photo."<br>".$password."<br>".$_POST["id_rol"];
        $stmt = $conexion->prepare("INSERT INTO usuarios(user_name, user_surnames, user_email, user_photo, user_password, user_rol)VALUES(:name, :surnames, :email, :photo, :pass, :rol)");
        $resultados = $stmt->execute(
            array(
                ':name' => $_POST["name"],
                ':surnames' => $_POST["surnames"],
                ':email' => $_POST["email"],
                ':photo' => $photo,
                ':pass' => $password,
                ':rol' => $_POST["id_rol"]
            )
        );
        if(!empty($resultados)){
            echo 'Registro creado';
        }

    }
    if($_POST["operation"] == "Edit"){
        $photo = '';
        if($_FILES["photo"]["name"] != ''){
            $photo = uploadPhoto();
        }else{
            $photo = $_POST["hiddenPhoto"];
        }
        $stmt = $conexion->prepare("UPDATE usuarios SET user_name=:name, user_surnames=:surnames, user_email=:email, user_photo=:photo, user_rol=:rol WHERE id_user = :id");
        $resultado = $stmt->execute(
            array(
                ':name' => $_POST["name"],
                ':surnames' => $_POST["surnames"],
                ':email' => $_POST["email"],
                ':photo' => $photo,
                ':rol' => $_POST["id_rol"],
                ':id' => $_POST["id"]
            )
        );
        if(!empty($resultado)){
            echo 'Registro actualizado';
        }
    }
    if ($_POST["operation"] == "Delete") {
        if($_POST["id"]){
            $photoRemove = getPhoto($_POST["id"], $conexion);
            if($photoRemove != ''){
                unlink("../../img/".$photoRemove);
            }
            $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id_user = :id");
            $resultado = $stmt->execute(
                array(
                    ':id' => $_POST["id"]
                )
            );
            if(!empty($resultado)){
                echo $photoRemove;
            }
        }
    }

?>