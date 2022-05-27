<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/apple-icon.png">
  <title id="titulo">
    <?php echo $rol;  ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body class="g-sidenav-show bg-gray-100">
  <?php include("menu.php"); ?>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!----------------------------->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 pt-4 z-index-2">
      <div class="container-fluid py-1">
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <ul class="navbar-nav justify-content-start">
            <li class="nav-item d-xl-none ps-0 pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
              </a><a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved14.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row">
          <div class="col-lg-12 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <button id="gallery" value="1" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-images text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Galeria</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="service" value="2" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-notes-medical text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Servicios</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="why" value="3" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-handshake text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">¿Porque?</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="view" value="4" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-list-ol text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Contador</span>
                  </buttona>
                </li>
                <li class="nav-item">
                  <button id="course" value="5" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-clipboard-list text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Cursos</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="testimony" value="6" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-syringe text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Testimonios</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="team" value="7" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-user-tie text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Equipo</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button id="news" value="8" class="nav-link mb-0 px-0 py-1 active table" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">
                    <i class="fas fa-money-check text-dark" width="16px" height="16px"></i>
                    <span class="ms-1">Noticias</span>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row option" id="option">
        <!--Div dinamico para la informacion de tablas-->
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                <a href="#" class="font-weight-bold" target="_blank">by People</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalTables" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title"></h5>
          <button type="button" class="btn nav-link mb-1 px-0 py-0" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times-circle fa-2x"></i>
          </button>
        </div>
        <div class="modal-body" >
          <form class="mb-3 row" method="POST" id="formTable" enctype="multipart/form-data">

          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalTables2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title2" id="modal-title2"></h5>
          <button type="button" class="btn nav-link mb-1 px-0 py-0" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times-circle fa-2x"></i>
          </button>
        </div>
        <div class="modal-body" >
          <form class="mb-3 row" method="POST" id="formTable2" enctype="multipart/form-data">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="js/admin.js"></script>
  <script src="js/adminInsert.js"></script>
  <script src="js/adminEdit.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>