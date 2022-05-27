$(document).ready(function() {
    showTable();
    //Consultas de usuarios en tabla
    function showTable() {
        $.ajax({
            url: "js/consultas.php",
            method: "POST",
            dataType: "json",
            success: function (data) {
                console.log(data);
                var valor = '';
                data.galeria.forEach(item => {
                    console.log(item);
                    valor += '<div class="col-md-4 col-xs-6 work">' +
                    '<img class="img-responsive" src="dashboard/img/' + item.foto + '">'+ 
                    '<div class="overlay">' +
                    '<div class="work-content">' +
                    '<h3>Ver fotos</h3>' +
                    '<div class="work-link">' +
                    '<a href="#galeria-pop'+ item.id +'"><i class="fa fa-external-link"></i></a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' + 
                    '</div>' +
                    '<div id="galeria-pop'+ item.id +'" class="popupview">' +
                    '<div id="popupBody">' +
                    '<div class="container-text-pop">' +
                    '<h2>' + item.titulo + '</h2>' +
                    '<p align="justify">' + item.text + '</p>' +
                    '</div>' +
                    '<div class="imgs-pop">' +
                    '<img src="dashboard/img/' + item.foto + '">' +
                    '</div>' +
                    '<a id="cerrar-pop" href="#galeria">&times;</a>' +
                    '</div>' +
                    '</div>'
                });
                $("#gallery_active").html(valor);


                /*
                */

                /*switch (data.table) {
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
                }*/
            }
        });
    };

});
