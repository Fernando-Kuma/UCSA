<?php

    $footer = '<div class="modal-footer">
    <input type="hidden" name="id" id="id">
    <input type="hidden" name="operation" id="operation">
    <input type="submit" name="action" id="action" class="btn btn-info">
    </div>';

    $salida = array();
    switch ($_GET["table"]) {
        case 1: $salida = array( "function" => gallery() ); break;
        case 2: $salida = array( "function" => service() ); break;
        case 3: $salida = array( "function" => why() ); break; 
        case 4: $salida = array( "function" => view() ); break; 
        case 5: $salida = array( "function" => course() ); break; 
        case 6: $salida = array( "function" => testimony() ); break;
        case 7: $salida = array( "function" => team() ); break;
        case 8: $salida = array( "function" => news() ); break;
        default: $salida = array( "function" => gallery() ); break;
    }
    echo json_encode($salida);
?>

<?php
function gallery() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de Galerias</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Imagen</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">texto pop</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="gallery_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Titulo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" >
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Foto</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control" >
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">Texto Pop</label>
                <textarea class="form-control" id="textPop" name="textPop" rows="2" placeholder="Texto descriptivo" ></textarea>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="gallery">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer ;
    return $code; };

function service() {
    // <!------Code HTML------>
    $table = '<div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row gx-4">
                                <div class="col-auto">
                                    <h5>Tabla de Nuestro Servicios</h5>
                                </div>
                                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                    <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" id="buttonCreate">
                                        Agregar<i class="fas fa-plus-circle ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Texto vista</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Texto pop</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="service_active">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-2">
                <label class="col-sm-1 col-form-label">Icono</label>
                <select class="form-select" name="icon" id="icon">
                    <option id="iconShow" selected>[]</option>
                    <option value="fa-graduation-cap" class="fa">&#xf19d</option>
                    <option value="fa-certificate" class="fa">&#xf0a3</option>
                    <option value="fa-file-text-o" class="fa">&#xf15c</option>
                    <option value="fa-bullhorn" class="fa">&#xf0a1</option>
                    <option value="fa-building-o" class="fa">&#xf1ad</option>
                    <option value="fa-heartbeat" class="fa">&#xf21e</option>
                    <option value="fa-external-link" class="fa">&#xf35d</option>
                    <option value="fa-flag" class="fa">&#xf024</option>
                    <option value="fa-university" class="fa">&#xf19c</option>
                    <option value="fa-users" class="fa">&#xf0c0</option>
                    <option value="fa-user" class="fa">&#xf007</option>
                    <option value="fa-check" class="fa">&#xf00c</option>
                    <option value="fa-trophy" class="fa">&#xf091</option>
                    <option value="fa-coffee" class="fa">&#xf0f4</option>
                    <option value="fa-file" class="fa">&#xf15b</option>
                    <option value="fa-clock-o" class="fa">&#xf017</option>
                    <option value="fa-comments" class="fa">&#xf086</option>
                    <option value="fa-phone" class="fa">&#xf095</option>
                    <option value="fa-envelope" class="fa">&#xf0e0</option>
                    <option value="fa-map-marker" class="fa">&#xf041</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-4 col-form-label">Titulo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Texto Vista</label>
                <textarea class="form-control" id="textSimple" name="textSimple" rows="1" placeholder="Texto simple" required></textarea>
            </div>  
            <div class="form-group col-md-6">
                <label class="col-sm-4 col-form-label">Foto Pop</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Texto Pop</label>
                <textarea class="form-control" id="textPop" name="textPop" rows="2" placeholder="Texto descriptivo" required></textarea>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="service">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };

function why() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de ¿Porque elegirnos?</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Formato</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Texto</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="whyElegirnos_active">
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de ¿Porque elegirnos? Carrusel</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate2" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate2">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Imagen</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="whyCarrusel_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $formE = '<div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Tipo de parrafo</label>
                <select class="form-control" id="inlineFormCustomSelect" name="format" id="format">
                    <option id="formatShow" selected >Tipo de texto a mostrarse</option>
                    <option value="Párrafo">Párrafo</option>
                    <option value="Titulo">Titulo</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-5 col-form-label">Texto</label>
                <textarea class="form-control" id="text" name="text" rows="1" placeholder="Texto descriptivo" required></textarea>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="whyE">';

    $formC = '<div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Foto</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="modal-footer">
                <input type="hidden" name="tableOption2" id="tableOption2" value="whyC">
                <input type="hidden" name="id2" id="id2">
                <input type="hidden" name="operation2" id="operation2">
                <input type="submit" name="action2" id="action2" class="btn btn-info">
            </div>';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["formE"] = $formE . $footer;
    $code["formC"] = $formC ;
    return $code; };

function view() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de conteo</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Cantidad</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="view_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-2">
                <label class="col-sm-1 col-form-label">Icono</label>
                <select class="form-select" name="icon" id="icon">
                    <option id="iconShow" selected>[]</option>
                    <option value="fa-graduation-cap" class="fa">&#xf19d</option>
                    <option value="fa-certificate" class="fa">&#xf0a3</option>
                    <option value="fa-file-text-o" class="fa">&#xf15c</option>
                    <option value="fa-bullhorn" class="fa">&#xf0a1</option>
                    <option value="fa-building-o" class="fa">&#xf1ad</option>
                    <option value="fa-heartbeat" class="fa">&#xf21e</option>
                    <option value="fa-external-link" class="fa">&#xf35d</option>
                    <option value="fa-flag" class="fa">&#xf024</option>
                    <option value="fa-university" class="fa">&#xf19c</option>
                    <option value="fa-users" class="fa">&#xf0c0</option>
                    <option value="fa-user" class="fa">&#xf007</option>
                    <option value="fa-check" class="fa">&#xf00c</option>
                    <option value="fa-trophy" class="fa">&#xf091</option>
                    <option value="fa-coffee" class="fa">&#xf0f4</option>
                    <option value="fa-file" class="fa">&#xf15b</option>
                    <option value="fa-clock-o" class="fa">&#xf017</option>
                    <option value="fa-comments" class="fa">&#xf086</option>
                    <option value="fa-phone" class="fa">&#xf095</option>
                    <option value="fa-envelope" class="fa">&#xf0e0</option>
                    <option value="fa-map-marker" class="fa">&#xf041</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Titulo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-2 col-form-label">Cantidad</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="view">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };

function course() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de Proximos Cursos
                                </h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Parrafo 1</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Parrafo 2</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Parrafo 3</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Temario</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="course_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-6">
                <label class="col-sm-3 col-form-label">Titulo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-3 col-form-label">Temario</label>
                <span id="temary_show"></span>
                <input type="file" name="temary" id="temary" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-5 col-form-label">Parrafo uno</label>
                <input type="text" name="sectionOne" id="sectionOne" class="form-control" placeholder="Parrafo uno" required>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-5 col-form-label">Parrafo dos</label>
                <input type="text" name="sectionTwo" id="sectionTwo" class="form-control" placeholder="Parrafo dos" required>
            </div>
            <div class="form-group col-md-4">
                <label class="col-sm-5 col-form-label">Parrafo tres</label>
                <input type="text" name="sectionThree" id="sectionThree" class="form-control" placeholder="Parrafo tres" required>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="course">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };
    
function testimony() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de Testimonios</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Foto</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Nombre</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Area</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Testimonio</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="testimony_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Area</label>
                <input type="text" name="area" id="area" class="form-control" placeholder="Area" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Foto</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Testimonio</label>
                <textarea class="form-control" id="text" name="text" placeholder="Testimonio" rows="1" required></textarea>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="testimony">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };

function team() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de Nuestro equipo</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Foto</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Nombre</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Area</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Facebook</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Instagram</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Twitter</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="team_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Foto</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Area</label>
                <input type="text" name="area" id="area" class="form-control" placeholder="Area" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Direccion Facebook" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Direccion Instagram" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Twitter</label>
                <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Direccion Twitter" required>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="team">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };

function news() {
    // -----Code HTML-----
    $table = '<div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <h5>Tabla de Noticias recientes</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                    Agregar<i class="fas fa-plus-circle ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Titulo</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Foto</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Ciudad</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Fecha</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Descripcion</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Direccion web</th>
                                        <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="news_active">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>';
    // -----Code HTML-----
    $form = '<div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Titulo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Foto</label>
                <span id="photo_show"></span>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Ciudad</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Ciudad" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Fecha</label>
                <input type="date" name="date" id="date" class="form-control" placeholder="Fecha" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-4 col-form-label">Direccion web</label>
                <input type="text" name="website" id="website" class="form-control" placeholder="Direccion web" required>
            </div>
            <div class="form-group col-md-6">
                <label class="col-sm-2 col-form-label">Descripcion</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descripcion" rows="1" required></textarea>
            </div>
            <input type="hidden" name="tableOption" id="tableOption" value="news">';
    $code = array();
    global $footer;
    $code["table"] = $table;
    $code["form"] = $form . $footer;
    return $code; };
?>


