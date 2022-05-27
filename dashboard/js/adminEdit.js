$(document).ready(function () {
    //Accion boton editar registros
    $(document).on('click', '.edit', function () {
        var id = $(this).attr("id");
        var table = $(".edit").val();
        $("#formTable")[0].reset();
        $.ajax({
            url: "actions/selectAdmin.php",
            method: "POST",
            data: {
                id: id,
                table: table
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                $('#modalTables').modal('show');
                $('.modal-title').text("Editar Usuario");
                $('#id').val(data.datos.id);
                $('#action').val("Editar");
                $('#operation').val("Edit");
                switch (data.table) {
                    case "gallery":
                        $('#id').val(data.datos.id);
                        $('#title').val(data.datos.title);
                        $('#textPop').val(data.datos.textPop);
                        $('#photo_show').html(data.datos.photo_show);
                    break;
                    case "service":
                        $('#id').val(data.datos.id);
                        $('#iconShow').val(data.datos.icon).text(data.datos.icon);
                        $('#title').val(data.datos.title);
                        $('#textSimple').val(data.datos.textSimple);
                        $('#textPop').val(data.datos.textPop);
                        $('#photo_show').html(data.datos.photo);
                    break;
                    case "whyE":
                        $('#id').val(data.datos.id);
                        $('#formatShow').val(data.datos.format).text(data.datos.format);
                        $('#text').val(data.datos.text);
                    break;
                    case "view":
                        $('#id').val(data.datos.id);
                        $('#iconShow').val(data.datos.iconShow).text(data.datos.iconShow);
                        $('#title').val(data.datos.title);
                        $('#quantity').val(data.datos.quantity);
                    break;
                    case "course":
                        $('#id').val(data.datos.id);
                        $('#title').val(data.datos.title);
                        $('#sectionOne').val(data.datos.sectionOne);
                        $('#sectionTwo').val(data.datos.sectionTwo);
                        $('#sectionThree').val(data.datos.sectionThree);
                        $('#temary_show').html(data.datos.pdf);
                    break;
                    case "testimony":
                        $('#id').val(data.datos.id);
                        $('#name').val(data.datos.name);
                        $('#area').val(data.datos.area);
                        $('#text').val(data.datos.text);
                        $('#photo_show').html(data.datos.photo);
                    break;
                    case "team":
                        $('#id').val(data.datos.id);
                        $('#name').val(data.datos.name);
                        $('#area').val(data.datos.area);
                        $('#facebook').val(data.datos.facebook);
                        $('#instagram').val(data.datos.instagram);
                        $('#twitter').val(data.datos.twitter);
                        $('#photo_show').html(data.datos.photo);
                    break;
                    case "news":
                        $('#id').val(data.datos.id);
                        $('#city').val(data.datos.city);
                        $('#date').val(data.datos.date);
                        $('#title').val(data.datos.title);
                        $('#description').val(data.datos.description);
                        $('#website').val(data.datos.website);
                        $('#photo_show').html(data.datos.photo);
                    break;
                    default:
                        alert("Error");
                        return false;
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });

    $(document).on('click', '.edit2', function () {
        var id = $(this).attr("id");
        var table = $(".edit2").val();
        $("#formTable2")[0].reset();
        $.ajax({
            url: "actions/selectAdmin.php",
            method: "POST",
            data: {
                id: id,
                table: table
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                $('#modalTables2').modal('show');
                $('.modal-title2').text("Editar Usuario");
                $('#id2').val(data.datos.id);
                $('#action2').val("Editar");
                $('#operation2').val("Edit");
                switch (data.table) {
                    case "whyC":
                        $('#id2').val(data.datos.id);
                        $('#photo_show').html(data.datos.photo);
                    break;
                    default:
                        alert("Error");
                        return false;
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
