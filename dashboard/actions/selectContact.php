    <?php
    include("../../conexion/conexion.php");
    include("functions.php");
    session_start();
    
    $salida = array(
        "datos" => contacts($conexion),
    );
    echo json_encode($salida);

    ?>