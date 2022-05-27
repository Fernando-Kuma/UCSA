<?php
include("../conexion/conexion.php");
    $datos = array();

    $query = "SELECT * FROM galeria";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach ($resultado as $fila) {
        $sub_array = array();
        $sub_array["id"] = $fila["id_galeria"];
        $sub_array["foto"] = $fila["gal_foto"];
        $sub_array["titulo"] = $fila["gal_titulo"];
        $sub_array["text"] = $fila["gal_text"];
        $datos[] = $sub_array;
    }
    $galerias = $datos;
    unset($datos);

    $query = "SELECT * FROM servicios";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach ($resultado as $fila) {
        $sub_array = array();
        $sub_array["id"] = $fila["id_servicios"];
        $sub_array["icon"] = $fila["serv_icon"];
        $sub_array["titulo"] = $fila["serv_titulo"];
        $sub_array["desc1"] = $fila["serv_desc1"];
        $sub_array["desc2"] = $fila["serv_desc2"];
        $sub_array["foto"] = $fila["serv_foto"];
        $datos[] = $sub_array;
    }
    $servicio = $datos;
    
    $salida = array(
        "galeria" => $galerias,
        "servicio" => $servicio
    );
    
    echo json_encode($salida);
    /* 
$query = "SELECT * FROM servicios";
$datos = array();
$stmt = $conexion->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll();
foreach ($resultado as $fila) {
    $sub_array = array();
                $sub_array["id"] = $fila["id_servicios"];
                $sub_array["icon"] = $fila["serv_icon"];
                $sub_array["titulo"] = $fila["serv_titulo"];
                $sub_array["desc1"] = $fila["serv_desc1"];
                $sub_array["desc2"] = $fila["serv_desc2"];
                $sub_array["foto"] = $fila["serv_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };
    class why{ 
        public function selectElegirnos($conexion){
            $query = "SELECT * FROM elegirnos";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_elegirnos"];
                $sub_array["formato"] = $fila["ele_formato"];
                $sub_array["text"] = $fila["ele_texto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
        public function selectCarrusel($conexion){
            $query = "SELECT * FROM carrusel";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_carrusel"];
                $sub_array["foto"] = $fila["carr_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }

    };
    class view{
        public function select($conexion){
            $query = "SELECT * FROM numeros";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_numeros"];
                $sub_array["icon"] = $fila["num_iconos"];
                $sub_array["titulo"] = $fila["num_titulo"];
                $sub_array["cantidad"] = $fila["num_cantidad"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };
    class course{
        public function select($conexion){
            $query = "SELECT * FROM cursos";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_cursos"];
                $sub_array["titulo"] = $fila["cur_titulo"];
                $sub_array["text1"] = $fila["cur_text1"];
                $sub_array["text2"] = $fila["cur_text2"];
                $sub_array["text3"] = $fila["cur_text3"];
                $sub_array["pdf"] = $fila["cur_pdf"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };
    class testimony{
        public function select($conexion){
            $query = "SELECT * FROM testimonios";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_testimonios"];
                $sub_array["foto"] = $fila["test_foto"];
                $sub_array["nombre"] = $fila["test_nombre"];
                $sub_array["area"] = $fila["test_area"];
                $sub_array["text"] = $fila["test_text"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };
    class team{
        public function select($conexion){
            $query = "SELECT * FROM equipo";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_equipo"];
                $sub_array["nombre"] = $fila["equi_nombre"];
                $sub_array["area"] = $fila["equi_area"];
                $sub_array["redsocial1"] = $fila["equi_redsocial1"];
                $sub_array["redsocial2"] = $fila["equi_redsocial2"];
                $sub_array["redsocial3"] = $fila["equi_redsocial3"];
                $sub_array["foto"] = $fila["equi_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };
    class news{
        public function select($conexion){
            $query = "SELECT * FROM noticias";
            $datos = array();
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $fila) {
                $sub_array = array();
                $sub_array["id"] = $fila["id_noticias"];
                $sub_array["ciudad"] = $fila["not_ciudad"];
                $sub_array["fecha"] = $fila["not_fecha"];
                $sub_array["titulo"] = $fila["not_titulo"];
                $sub_array["descripcion"] = $fila["not_descripcion"];
                $sub_array["sitioweb"] = $fila["not_sitioweb"];
                $sub_array["foto"] = $fila["not_foto"];
                $datos[] = $sub_array;
            }
            return $datos;
        }
    };

    function uploadPhoto(){
        if (isset($_FILES["photo"])) {
            $extension = explode('.', $_FILES["photo"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './../img/'.$nuevo_nombre;
            move_uploaded_file($_FILES["photo"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function uploadPdf(){
        if (isset($_FILES["temary"])) {
            $extension = explode('.', $_FILES["temary"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './../docs/'.$nuevo_nombre;
            move_uploaded_file($_FILES["temary"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }
    */    
?>

