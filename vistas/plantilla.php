<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="vistas/css/bootstrap.min.css" rel="stylesheet" />
  <link href="vistas/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="vistas/demo/demo.css" rel="stylesheet" />
  <link href="vistas/css/plantilla.css" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  
</head>


<body class="">
<?php 
session_start(['name' => 'SPR']);

$peticionAjax = false;

require_once "./controladores/VistasController.php";
$vt = new vistasController();
$vistas = $vt->Obtener_vistas_controlador();

  if($vistas == "login" || $vistas == "404"):
      if($vistas == "login"){
        require_once "./vistas/contenidos/login.php";
      }else{
          require_once "./vistas/contenidos/404.php";
        }
  else:

    require_once "././controladores/loginController.php";

    $siSession = new loginController();

    if(!isset($_SESSION['token_sbp']) || !isset($_SESSION['usuario_sbp']) ){
      $siSession->Validar_Sesion();
    }
?>
<?php 

    ?>
    <?php include "modulos/nav.php"; ?>
    <?php include "modulos/barraLateral.php"; ?>
  <div class="wrapper ">
 
  <div class="main-panel" id="main-panel">
    <?php  require_once $vistas; ?>
    <?php include "modulos/footer.php"; ?>    
  </div> 
      </div>   
      <?php
      
        endif;

        include "./vistas/modulos/cerrar.php"; 
      ?>
 
  <!--   Core JS Files   -->
  <script src="vistas/js/core/jquery.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  
  <script src="vistas/js/core/popper.min.js"></script>
  <script src="vistas/js/core/bootstrap.min.js"></script>
  <script src="vistas/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="vistas/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vistas/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="vistas/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
 
  <!-- SWEET ALERT -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!--AÑADIMOS ARCHIVO JS PROPIO-->
  <script src="vistas/js/usuarios/administradores.js"></script>
 <!--AÑADIMOS ARCHIVO SCRIPT PARA LOGIN 27/02/2023-->
 <script src="/vistas/modulos/cerrar.php"></script>

</body>

</html>