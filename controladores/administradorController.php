<?php
    if($peticionAjax){
        require_once "../modelos/administradorModel.php";
    }else{
        require_once "./modelos/administradorModel.php";
    }

    class administradorController extends administradorModel{

        public function Registrar_administrador_controller(){
            
        }
    }


