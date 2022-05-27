$(document).ready(function () {
    activeContact();
    //Consultas de usuarios en tabla
    function activeContact() {
        $.ajax({
          url: "actions/selectContact.php",
          method: "POST",
          dataType: "json",
          success: function(data) {
            console.log(data);
            var valor = ''
            data.datos.forEach(item => {
              valor += '<tr>' +
                '<td>' +
                '<p class="text-xs text-center font-weight-bold mb-0">' + item.titulo + '</p>' +
                '</td>' +
                '<td>' +
                '<p class="text-xs text-center font-weight-bold mb-0">' + item.nombre + '</p>' +
                '</td>' +
                '<td>' +
                '<p class="text-xs text-center font-weight-bold mb-0">' + item.correo + '</p>' +
                '</td>' +
                '<td>' +
                '<p class="text-xs text-center font-weight-bold mb-0">' + item.fecha + '</p>' +
                '</td>' +
                '<td>' +
                '<p class="text-xs text-center font-weight-bold mb-0">' + item.mensaje + '</p>' +
                '</td>' +
                '</tr>'
            })
            $("#active_contacts").html(valor);
          }
        });
      }

});
