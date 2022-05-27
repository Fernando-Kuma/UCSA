<?php
if ($_GET["opc"] == "profile") {
    profile();
    die();
} else
if ($_GET["opc"] == "users") {
    users();
    die();
} else
if ($_GET["opc"] == "settings") {
    settings();
    die();
}
?>

<?php

function profile()
{ ?>
    <!------Code HTML------>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Informacion del perfil</h6>
                    </div>
                    <div class="col-md-4 text-end" id="button">
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <p class="text-sm">
                    Menu descriptivo de los datos personales del usuario
                </p>
                <hr class="horizontal gray-light my-4">
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                        <strong class="text-dark">Nombre:&nbsp;</strong>
                        <strong class="text-body" id="user_name"></strong>
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Apellidos:&nbsp;</strong>
                        <strong class="text-body" id="user_surnames"></strong>
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Email:&nbsp;</strong>
                        <strong class="text-body" id="user_email"></strong>
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Fecha creacion:&nbsp;</strong>
                        <strong class="text-body" id="user_creation"></strong>
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Rol:&nbsp;</strong>
                        <strong class="text-body" id="user_rol"></strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Interacciones</h6>
            </div>
            <div class="card-body p-3">
                <ul class="list-group" id="interacciones">

                </ul>
            </div>
        </div>
    </div>

<?php }
function users()
{ ?>
    <!------Code HTML------>
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="row gx-4">
                    <div class="col-auto">
                        <h5>Tabla de usuarios</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <button type="button" class="btn btn-dark px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                            Agregar <i class="fas fa-user-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7">Usuario</th>
                                <th class="text-uppercase text-dark text-sm font-weight-bolder opacity-7 ps-2">Rol</th>
                                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Fecha creacion</th>
                                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Ultima conexion</th>
                                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="usuarios_activos">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }
function settings()
{ ?>
    <!------Code HTML------>
    <div class="col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="row gx-4">
                    <div class="col-auto">
                        <h5>Configuracion datos de la pagina</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="mb-3 row" method="POST" id="formUser" enctype="multipart/form-data">
                    <div class="row gx-4">
                        <div class="col-auto">
                            <h5>Informacion contacto</h5>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <button type="button" class="btn btn-info px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                Actualizar <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Correo visible</label>
                        <input type="email" name="name" id="name" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Correo de contacto</label>
                        <input type="email" name="surnames" id="surnames" class="form-control" placeholder="Apellidos">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Telefono</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Telefono 2</label>
                        <input type="text" name="pass" id="pass" class="form-control" placeholder="Contraseña" value="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Direccion</label>
                        <input type="text" name="pass" id="pass" class="form-control" placeholder="Contraseña" value="">
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="operation" id="operation">
                </form>

            </div>
            <div class="card-body">
                <form>
                    <div class="row gx-4">
                        <div class="col-auto">
                            <h5>Redes sociales</h5>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <button type="button" class="btn btn-info px-3 py-2 buttonCreate" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="buttonCreate">
                                Actualizar <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-3">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <label class="col-sm-2 col-form-label">Instragram</label>
                        <div class="col-sm-3">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-3">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <label class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-3">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label">Youtube</label>
                        <div class="col-sm-3">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php }
