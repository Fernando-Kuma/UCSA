  $(document).ready(function() {
    
    
    $("#option").load('index_content.php?opc=profile');
    activeUser();
    $('#profile').on('click', function() {
      $("#option").load('index_content.php?opc=profile');
      activeUser();
      return false;
    });
    $('#users').on('click', function() {
      $("#option").load('index_content.php?opc=users');
      activeUsers();
      return false;
    });
    $('#settings').on('click', function() {
      $("#option").load('index_content.php?opc=settings');
      return false;
    });

    //Accion boton
    $(document).on('click', '.buttonCreate', function() {
      $("#formUser")[0].reset();
      $(".modal-title").text("Nuevo usuario");
      $("#action").val("Crear");
      $("#operation").val("Create");
      $("#photo_show").html("");
      $('#pass').prop("disabled", false);
      $("#rol").val("").text("Tipo de rol");
    });

    
    
    //Accion boton editar
    $(document).on('click', '.edit', function() {
      var id = $(this).attr("id");
      $("#formUser")[0].reset();
      $.ajax({
        url: "actions/selectUser.php",
        method: "POST",
        data: {
          id: id
        },
        dataType: "json",
        success: function(data) {
          console.log(data);
          $('#modalUsuario').modal('show');
          $('.modal-title').text("Editar Usuario");
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('#surnames').val(data.surnames);
          $('#email').val(data.email);
          $('#rol').val(data.id_rol).text(data.rol);
          $('#photo_show').html(data.photo);
          $('#pass').prop("disabled", true);
          $('#action').val("Editar");
          $('#operation').val("Edit");
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    });
    //Accion insertar registros
    $(document).on('submit', '#formUser', function(event) {
      event.preventDefault();
      var operation = $("#operation").val();
      var name = $("#name").val();
      var surnames = $("#surnames").val();
      var email = $("#email").val();
      var pass = $("#pass").val();
      var rol = $("#id_rol").val();
      var extension = $("#photo").val().split('.').pop().toLowerCase();
      if (operation == "Create") {
        query = (name != '' && surnames != '' && email != '' && pass != '' && rol != '');
      }
      if (operation == "Edit") {
        query = (name != '' && surnames != '' && email != '' && rol != '');
      }
      if (extension != '') {
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          alert("Formato de imagen invalido");
          $("#photo").val('');
          return false;
        }
      }
      if (query) {
        $.ajax({
          url: "actions/optionUser.php",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(data) {
            alert(data);
            $('#formUser')[0].reset();
            $('#modalUsuario').modal('hide');
            location.reload();
          }
        });
      } else {
        alert("Algunos campos son obligatorios")
      }
    });
    //Accion boton borrar
    $(document).on('click', '.delete', function() {
      var id_user = $(this).attr("id");
      if (confirm("Esta seguro de borrar este registro: " + id_user)) {
        $.ajax({
          url: "actions/optionUser.php",
          method: "POST",
          data: {
            id: id_user,
            operation: "Delete"
          },
          success: function(data) {
            alert(data);
            location.reload();
          }
        });
      } else {
        return false;
      }
    });



    //Consultas de usuarios en tabla
    function activeUser() {
      $.ajax({
        url: "actions/selectUser.php",
        method: "POST",
        dataType: "json",
        success: function(data) {
          var valor = ''
          data.datos.forEach(item => {
            valor += '<li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">' +
              '<div class="avatar me-3">' +
              '<img src="../img/' + item.photo + '" alt="kal" class="border-radius-lg shadow">' +
              '</div>' +
              '<div class="d-flex align-items-start flex-column justify-content-center">' +
              '<h5 class="mb-0">Usuario:&nbsp;</h5>' +
              '<h5 class="mb-0">Ultima conexion:&numsp;</h5>' +
              '</div>' +
              '<div class="d-flex align-items-start flex-column justify-content-center">' +
              '<h6 class="mb-0 text-secondary">' + item.name + '  ' + item.surnames + '</h6>' +
              '<h6 class="mb-0 text-secondary">' + item.admission + '</h6>' +
              '</div>' +
              '</li>'
          })
          console.log(data);
          $('#user_name').text(data.usuario.name);
          $('#user_surnames').text(data.usuario.surnames);
          $('#user_email').text(data.usuario.email);
          $('#user_creation').text(data.usuario.creation);
          $('#user_rol').text(data.usuario.rol);
          $('#button').html(data.usuario.id);
          $("#interacciones").html(valor);
        }
      });
    }

    function activeUsers() {
      $.ajax({
        url: "actions/selectUser.php",
        method: "POST",
        dataType: "json",
        success: function(data) {
          console.log(data);
          var valor = ''
          data.datos.forEach(item => {
            valor += '<tr>' +
              '<td>' +
              '<div class="d-flex px-2 py-1">' +
              '<div>' +
              '<img src="../img/' + item.photo + '" class="avatar avatar-sm me-3" alt="user1">' +
              '</div>' +
              '<div class="d-flex flex-column justify-content-center">' +
              '<h6 class="mb-0 text-sm">' + item.name + ' ' + item.surnames + '</h6>' +
              '<p class="text-xs text-secondary mb-0">' + item.email + '</p>' +
              '</div>' +
              '</div>' +
              '</td>' +
              '<td>' +
              '<p class="text-xs font-weight-bold mb-0">' + item.rol + '</p>' +
              '</td>' +
              '<td class="align-middle text-center">' +
              '<span class="text-secondary text-xs font-weight-bold">' + item.creation + '</span>' +
              '</td>' +
              '<td class="align-middle text-center">' +
              '<span class="text-secondary text-xs font-weight-bold">' + item.admission + '</span>' +
              '</td>' +
              '<td class="align-middle text-center">' +
              '<button type="button" class="btn px-3 mb-0 edit" name="edit" id=' + item.id + '><i class="fas fa-pencil-alt text-info" aria-hidden="true"></i></button>' +
              '<button type="button" class="btn px-3 mb-0 delete" name="delete" id=' + item.id + '><i class="far fa-trash-alt text-danger" aria-hidden="true"></i></button>' +
              '</td>' +
              '</tr>'
          })
          $("#usuarios_activos").html(valor);
        }
      });
    };

  });
