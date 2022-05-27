    <?php
    include("../../conexion/conexion.php");
    include("functionsTables.php");
    session_start();
    switch ($_POST["table"]) {
        case 1:
        case "gallery":
            $gallery = new gallery();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $gallery->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $gallery->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        case 2: 
        case "service":
            $service = new service();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $service->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $service->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        case 3:
        case "whyE": 
        case "whyC": 
            $why = new why();
            if(isset($_POST["id"])){
                if($_POST["table"] == 'whyE'){
                    $salida = array(
                        "datos" => $why->selectOneE($_POST["id"],$conexion),
                        "table" => $_POST["table"],
                    );
                }else{
                    $salida = array(
                        "datos" => $why->selectOneC($_POST["id"],$conexion),
                        "table" => $_POST["table"],
                    );
                }
            }else{
                $salida = array(
                "datosCarrusel" => $why->selectCarrusel($conexion),
                "datosElegirnos" => $why->selectElegirnos($conexion),
                "table" => $_POST["table"],
            );
            }
            break;
        case 4: 
        case "view":
            $view = new view();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $view->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $view->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            
            break;
        case 5:
        case "course": 
            $course = new course();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $course->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $course->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        case 6:
        case "testimony": 
            $testimony = new testimony();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $testimony->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $testimony->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        case 7:
        case "team": 
            $team = new team();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $team->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $team->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        case 8: 
        case "news":
            $news = new news();
            if(isset($_POST["id"])){
                $salida = array(
                    "datos" => $news->selectOne($_POST["id"],$conexion),
                    "table" => $_POST["table"],
                );
            }else{
                $salida = array(
                    "datos" => $news->select($conexion),
                    "table" => $_POST["table"],
                );
            }
            break;
        default:
            $salida = array(
                "datos" => "null",
                "table" => "null",
            );
            break;
    }
    echo json_encode($salida);
    ?>