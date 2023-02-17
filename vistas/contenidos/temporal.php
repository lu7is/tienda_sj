
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
  
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
        
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-16">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                <form id="" class ="frmAdministradores" method ="POST" action ="././Ajax/administradorAjax.php" data-form ="save" autocomplete="off" enctype = "multipart/form-data ">
                          <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Cedula</label>
                            <input type="number" class="form-control" name="Cedula" placeholder="Escribe aqui..." autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Nombre</label>
                            <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Apellido</label>
                            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">*Email</label>
                              <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">*Usuario</label>
                            <input type="text" class="form-control" id="Usuario"  name="Usuario" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password1" name="Password1" placeholder="Password"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password" name="Password" placeholder="Password"autocomplete="off">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">*Dirección</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Escribe tu dirección"autocomplete="off">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">*Telefono</label>
                              <input type="number" class="form-control" id="Telefono" name="Telefono" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputZip">*Fecha de Nacimiento</label>
                              <input type="date" class="form-control" id="Fecha" name="Fecha" autocomplete="off">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Registrar Administradores</button>
                          <div class="RespuestaAjax"></div>
                        </form>
                 
                </div>
                
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid col-lg-16">
          <nav>
            <ul>
              <li>
                
              </li>
              <li>
               
              </li>
              <li>
               
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Desarrollado por  <a href="" target="_blank">SolutionSoft</a>. Derechos de Autor <a href="" target="_blank">SolutionSoft</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>