<?php
  session_start();
  $peticionAjax = false;
?>

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
  <!-- CSS Files -->
  <link href="<?php echo SERVERURL;?>/vistas/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo SERVERURL;?>/vistas/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo SERVERURL;?>/vistas/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo SERVERURL;?>/vistas/css/plantilla.css" rel="stylesheet" />
</head>


<body class="">
<?php 
require_once "./controladores/VistasController.php";
$vt = new vistasController();
$vistas = $vt->Obtener_vistas_controlador();

  if($vistas == "login"):
   require_once "contenidos/login.php";
  else:
?>
  <div class="wrapper ">
      <?php include "modulos/nav.php"; ?>

      <?php include "modulos/barraLateral.php"; ?><br>


      <?php  require_once $vistas; ?>

      </div>
      
      <?php require_once "modulos/footer.php"; ?>
      
      <?php
      endif;
  ?>
  
  
  <!--   Core JS Files   -->
  <script src="<?php echo SERVERURL;?>/vistas/js/core/jquery.min.js"></script>
  <script src="<?php echo SERVERURL;?>/vistas/js/core/popper.min.js"></script>
  <script src="<?php echo SERVERURL;?>/vistas/js/core/bootstrap.min.js"></script>
  <script src="<?php echo SERVERURL;?>/vistas/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo SERVERURL;?>/vistas/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo SERVERURL;?>/vistas/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo SERVERURL;?>/vistas/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo SERVERURL;?>/vistas/demo/demo.js"></script>
  
</body>

</html>