<?php

    $peticionAjax = true;
    require_once "../core/configGeneral.php";

    if(isset($_POST['Cedula'])){
        require_once "../controladores/administradorController.php";
        $InstAdmin = new administradorController();
        echo $cedula =$_POST['Cedula'];
       echo  $usu =$_POST['Usuario'];
        echo $pass =$_POST['Password1'];
         
        if(isset($_POST['Cedula']) && isset($_POST['Usuario']) && isset($_POST['Password1']) ){
            echo $InstAdmin->Registrar_administrador_controller();
           // $InstAdmin->Registrar_administrador_controller();
        }
    }else{

        session_start();
        session_destroy();
       echo '<script> window.location.href="'.SERVERURL.'login/"</script>';
       
    }