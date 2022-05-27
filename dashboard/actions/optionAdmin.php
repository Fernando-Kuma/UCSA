<?php
    include("../../conexion/conexion.php");
    include("functionsTables.php");
    
    if($_POST["tableOption"]){
        $tabla = $_POST["tableOption"];
    }else{
        $tabla = $_POST["tableOption2"];
    }
    switch ($tabla) {
        case "gallery":
            $gallery = new gallery();
            if($_POST["operation"] == "Create"){
                $gallery->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $gallery->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $gallery->delete($_POST["id"],$conexion);
            }
        break;
        case "service":
            $service = new service();
            if($_POST["operation"] == "Create"){
                $service->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $service->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $service->delete($_POST["id"],$conexion);
            }
        break;
        case "whyE":
            $why = new why();
            if($_POST["operation"] == "Create"){
                $why->createElegirnos($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $why->editElegirnos($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $why->deleteElegirnos($_POST["id"],$conexion);
            }
        break;
        case "whyC":
            $why = new why();
            if($_POST["operation2"] == "Create"){
                $why->createCarrusel($conexion);
            }
            if($_POST["operation2"] == "Edit"){
                $why->editCarrusel($conexion);
            }
            if ($_POST["operation2"] == "Delete") {
                $why->deleteCarrusel($_POST["id"],$conexion);
            }
        break;
        case "view":
            $view = new view();
            if($_POST["operation"] == "Create"){
                $view->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $view->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $view->delete($_POST["id"],$conexion);
            }
        break;
        case "course":
            $course = new course();
            if($_POST["operation"] == "Create"){
                $course->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $course->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $course->delete($_POST["id"],$conexion);
            }
        break;
        case "testimony":
            $testimony = new testimony();
            if($_POST["operation"] == "Create"){
                $testimony->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $testimony->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $testimony->delete($_POST["id"],$conexion);
            }
        break;
        case "team":
            $team = new team();
            if($_POST["operation"] == "Create"){
                $team->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $team->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $team->delete($_POST["id"],$conexion);
            }
        break;
        case "news":
            $news = new news();
            if($_POST["operation"] == "Create"){
                $news->create($conexion);
            }
            if($_POST["operation"] == "Edit"){
                $news->edit($conexion);
            }
            if ($_POST["operation"] == "Delete") {
                $news->delete($_POST["id"],$conexion);
            }
        break;
        default:
        
        break;
    }
    
?>