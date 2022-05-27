    <?php
    include("../../conexion/conexion.php");
    include("functions.php");
    session_start();

    if (isset($_POST["id"])) {
        echo json_encode(showUser($_POST["id"], $conexion));
    } else {
        $salida = array(
            "datos" => users($_SESSION['rol'], $conexion),
            "usuario" => activeUser($_SESSION['id'], $conexion)
        );
        echo json_encode($salida);
    }

    ?>