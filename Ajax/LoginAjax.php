<?php
$peticionAjax = true;
require_once "../core/configGeneral.php";

if(isset($_POST['UsuarioF']) && isset($_POST['ClaveF'])){
    require_once "../controladores/loginController.php";
    $login = new  loginController();
    echo $login->IniciarSesion_controlador();
   // echo $login->IniciarSesion_controlador();
}else{
    session_start();
    session_destroy();
   echo '<script> window.location.href="'.SERVERURL.'"</script>';
}
