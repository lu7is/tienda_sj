<?php

    $peticionAjax = true;
    require_once "../core/configGeneral.php";

    if(isset($_POST['CedulaC'])){
        require_once "../controladores/clientesController.php";
        $InstClient = new clientesController();  
        if(isset($_POST['CedulaC']) && isset($_POST['UsuarioC']) && isset($_POST['Password1C']) ){
            echo $InstClient->Registrar_Clientes();
           // $InstAdmin->Registrar_administrador_controller();
        }
    }else{

        //session_start();
        session_destroy();
       echo '<script> window.location.href="'.SERVERURL.'login/"</script>';
       
    }