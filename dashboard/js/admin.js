$(document).ready(function () {
    //Contenido de formulario y tablas Global
    $('.table').click(function (e) {
        var tables = this.value;
        $.ajax({
            url: "admin_content.php",
            method: "GET",
            data: {
                table: tables
            },
            dataType: "json",
            success: function (data) {
                $("#option").html(data.function.table);
                $("#formTable").html(data.function.form);
                if(table=3){
                    $("#formTable").html(data.function.formE);
                    $("#formTable2").html(data.function.formC);
                }
            }
        });
        showTable(tables);
    });
    //Accion boton crear para abrir formulario Global
    $(document).on('click', '.buttonCreate', function () {
        $('#modalTables').modal('show');
        $("#formTable")[0].reset();
        $(".modal-title").text("Nuevo registro");
        $("#action").val("Crear");
        $("#operation").val("Create");
        $("#formatShow").html("Tipo de formato");
        $("#iconShow").html("New icon");
        $("#photo_show").html("");
    });
    $(document).on('click', '.buttonCreate2', function () {
        $('#modalTables2').modal('show');
        $("#formTable2")[0].reset();
        $(".modal-title2").text("Nuevo registro");
        $("#action2").val("Crear");
        $("#operation2").val("Create");
        $("#photo_show2").html("");
    });
    //Accion boton borrar registro Global
    $(document).on('click', '.delete', function () {
        var id_table = $(this).attr("id");
        var table = $(".delete").val();
        if (confirm("Esta seguro de borrar este registro: " + id_table + " Tabla: " + table)) {
            $.ajax({
                url: "actions/optionAdmin.php",
                method: "POST",
                data: {
                    id: id_table,
                    operation: "Delete",
                    tableOption: table
                },
                success: function (data) {
                    alert(data);
                    location.reload();
                }
            });
        } else {
            return false;
        }
    });
    $(document).on('click', '.delete2', function () {
        var id_table = $(this).attr("id");
        var table = $(".delete2").val();
        if (confirm("Esta seguro de borrar este registro: " + id_table + " Tabla: " + table)) {
            $.ajax({
                url: "actions/optionAdmin.php",
                method: "POST",
                data: {
                    id: id_table,
                    operation2: "Delete",
                    tableOption: table
                },
                success: function (data) {
                    alert(data);
                    location.reload();
                }
            });
        } else {
            return false;
        }
    });
    //Consultas para mostrar registros Global
    function showTable(tab) {
        var table = tab;
        $.ajax({
            url: "actions/selectAdmin.php",
            method: "POST",
            data: {
                table: table
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                var valor = ''
                switch (data.table) {
                    case "1": //Gallery
                        data.datos.forEach(item => {
                        valor += '<tr>' +
                            '<td>' +
                            '<p class="text-xs text-center font-weight-bold mb-0">' + item.titulo + '</p>' +
                            '</td>' +
                            '<td>' +
                            '<div class="avatar avatar-xxl position-relative">' +
                            '<img src="img/' + item.foto + '" class="w-100 border-radius-lg shadow-sm">'+
                            '</div>'+
                            '</td>' +
                            '<td>' +
                            '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text + '</p>' +
                            '</td>' +
                            '<td class="align-middle text-center">' +
                            '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="gallery"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                            '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="gallery"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                            '</td>' +
                            '</tr>'
                        })
                        $("#gallery_active").html(valor);
                        break;
                    case "2": //Service
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<div class="d-flex px-2 py-1">'+
                                '<div><i class="fa ' + item.icon + ' me-2" aria-hidden="true"></i></div>' +
                                '<divc class="d-flex flex-column justify-content-center"><p class="text-xs text-center font-weight-bold mb-0">' + item.titulo + '</p></div>' +
                                '</div>'+
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0">' + item.desc1 + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.desc2 + '</p>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="service"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="service"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                            $("#service_active").html(valor); 
                        break;
                    case "3": //Why
                        var valor2 = ''
                        data.datosElegirnos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0">' + item.formato + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text + '</p>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="whyE"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="whyE"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            });
                        data.datosCarrusel.forEach(item => {
                            valor2 += '<tr>' +
                                '<td>' +
                                '<div class="avatar avatar-xxl position-relative">' +
                                '<img src="img/' + item.foto + '" class="w-100 border-radius-lg shadow-sm">'+
                                '</div>'+
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit2" name="edit2" id=' + item.id + ' value="whyC"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete2" name="delete2" id=' + item.id + ' value="whyC"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            });
                        $("#whyElegirnos_active").html(valor);
                        $("#whyCarrusel_active").html(valor2); 
                        break; 
                    case "4": //View
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<div class="d-flex px-2 py-1">'+
                                '<div><i class="fa ' + item.icon + ' me-2" aria-hidden="true"></i></div>' +
                                '<divc class="d-flex flex-column justify-content-center"><p class="text-xs text-center font-weight-bold mb-0">' + item.titulo + '</p></div>' +
                                '</div>'+
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.cantidad + '</p>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="view"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="view"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                        $("#view_active").html(valor); 
                        break; 
                    case "5": //Course
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.titulo + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text1 + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text2 + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text3 + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<a download="curso" href="docs/'+ item.pdf +'" target="_blank" class="text-xs text-center font-weight-bold mb-0 text-space">Temario</a>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="course"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="course"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                        $("#course_active").html(valor);  
                        break; 
                    case "6": //Testimony
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<div class="avatar avatar-xxl position-relative">' +
                                '<img src="img/' + item.foto + '" class="w-100 border-radius-lg shadow-sm">'+
                                '</div>'+
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.nombre + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.area + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.text + '</p>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="testimony"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="testimony"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                        $("#testimony_active").html(valor);  
                        break;
                    case "7": //Team
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<div class="avatar avatar-xxl position-relative">' +
                                '<img src="img/' + item.foto + '" class="w-100 border-radius-lg shadow-sm">'+
                                '</div>'+
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.nombre + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.area + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<a href="' + item.redsocial1 + '"><p class="text-xs text-center font-weight-bold mb-0 text-space">FACEBOOK</p></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="' + item.redsocial2 + '"><p class="text-xs text-center font-weight-bold mb-0 text-space">INSTAGRAM</p></a>' +
                                '</td>' +
                                '<td>' +
                                '<a href="' + item.redsocial3 + '"><p class="text-xs text-center font-weight-bold mb-0 text-space">TWITTER</p></a>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="team"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="team"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                        $("#team_active").html(valor); 
                        break;
                    case "8": //News
                        data.datos.forEach(item => {
                            valor += '<tr>' +
                                '<td>' +
                                '<div class="avatar avatar-xxl position-relative">' +
                                '<img src="img/' + item.foto + '" class="w-100 border-radius-lg shadow-sm">'+
                                '</div>'+
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.titulo + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.ciudad + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.fecha + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<p class="text-xs text-center font-weight-bold mb-0 text-space">' + item.descripcion + '</p>' +
                                '</td>' +
                                '<td>' +
                                '<a href="' + item.sitioweb + '"><p class="text-xs text-center font-weight-bold mb-0 text-space">Sitio Web</p></a>' +
                                '</td>' +
                                '<td class="align-middle text-center">' +
                                '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + ' value="news"><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
                                '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + ' value="news"><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>'
                            })
                        $("#news_active").html(valor); 
                        break;
                    default: 
                        console.log("Error, recarge la pagina");
                    break;
                }
            }
        });
    };
});
