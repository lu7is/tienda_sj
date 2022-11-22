<?php

    require_once "./modelos/VistasModelo.php";

    class vistasController extends vistasModel{

        public function Obtener_platilla_controlador(){
           return require_once "./vistas/plantilla.php";
        } 
        
        public function Obtener_vistas_controlador(){
            if(isset($_GET['views'])){
                // la palabra explode permite dividir una variable en varias partes
                $ruta = explode("/", $_GET['views']);
                $respuesta = vistasModel::obtener_vistas_modelo($ruta[0]);
            }else{
                $respuesta = "login";
            }
            return $respuesta;
        }
    }