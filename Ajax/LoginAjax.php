<?php
  /* Instancia del controlador creado 24/02/2023 */ 
    $peticionAjax = true;
    require_once "../core/configGeneral.php";
    $fr = $_GET['Token'];

    echo $fr;

    if(isset($_GET['Token'])){
       require_once "../controladores/loginController.php";
      $logut = new loginController();
       echo $logut->cerrar_sesion();
    }else{
        session_start(['name' => 'SMP']);
        session_unset();
        session_destroy();
        header("Location:".SERVERURL."");
        exit();
       
    }

    
   