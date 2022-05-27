$(document).ready(function () {
    //Accion insertar registros
    $(document).on('submit', '#formTable', function (event) {
        event.preventDefault();
        var table = $("#tableOption").val();
        switch (table) {
            case "gallery":
                var title = $("#title").val();
                var textPop = $("#textPop").val();
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (title != '' && textPop != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            case "service":
                var icon = $("#icon").val();
                var title = $("#title").val();
                var textSimple = $("#textSimple").val();
                var textPop = $("#textPop").val();
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (icon != '' && title != '' && textSimple != '' && textPop != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            case "whyE":
                var format = $("#format").val();
                var text = $("#text").val();
                query = (format != '' && text != '' );
            break;
            case "view":
                var icon = $("#icon").val();
                var title = $("#title").val();
                var quantity = $("#quantity").val();
                query = (icon != '' && title != '' && quantity != '' );
            break;
            case "course":
                var title = $("#title").val();
                var sectionOne = $("#sectionOne").val();
                var sectionTwo = $("#sectionTwo").val();
                var sectionThree = $("#sectionThree").val();
                var extension = $("#temary").val().split('.').pop().toLowerCase();
                query = (title != '' && sectionOne != '' && sectionTwo != '' && sectionThree != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['pdf', '.docx']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#temary").val('');
                        return false;
                    }
                }
            break;
            case "testimony":
                var name = $("#name").val();
                var area = $("#area").val();
                var text = $("#text").val();
                query = (name != '' && area != '' && text != '' );
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (extension != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            case "team":
                var name = $("#name").val();
                var area = $("#area").val();
                var facebook = $("#facebook").val();
                var instagram = $("#instagram").val();
                var twitter = $("#twitter").val();
                query = (name != '' && area != '' && facebook != '' && instagram != '' && twitter != '' );
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (extension != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            case "news":
                var title = $("#title").val();
                var city = $("#city").val();
                var date = $("#date").val();
                var website = $("#website").val();
                var description = $("#description").val();
                query = (title != '' && city != '' && date != '' && website != '' && description != '' );
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (extension != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            default:
                alert("Error");
                return false;
        }
        if (query) {
            $.ajax({
                url: "actions/optionAdmin.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    alert(data);
                    $('#formTable')[0].reset();
                    $('#modalTables').modal('hide');
                    location.reload();
                }
            });
        } else {
            alert("Algunos campos son obligatorios")
        }
    });



    $(document).on('submit', '#formTable2', function (event) {
        event.preventDefault();
        var table = $("#tableOption2").val();
        alert(table);
        switch (table) {
            case "whyC":
                var extension = $("#photo").val().split('.').pop().toLowerCase();
                query = (extension != '');
                if (extension != '') {
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Formato de imagen invalido");
                        $("#photo").val('');
                        return false;
                    }
                }
            break;
            default:
                alert("Error tabla 2");
                return false;
        }
        if (query) {
            $.ajax({
                url: "actions/optionAdmin.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    alert(data);
                    $('#formTable2')[0].reset();
                    $('#modalTables2').modal('hide');
                    location.reload();
                }
            });
        } else {
            alert("Algunos campos son obligatorios")
        }
    });


});
