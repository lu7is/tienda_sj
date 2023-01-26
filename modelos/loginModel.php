<?php
    if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class LoginModelo extends mainModel{

        protected function IniciarSesion($datos){
           $sql = mainModel::conectar()->prepare("SELECT * FROM cuenta WHERE CuentaUsuario = :Usuario AND CuentaClave = :Clave AND CuentaEstado = 'Activo' "); 
           $sq->bindParam(':Usuario',$datos['Usuario']);
           $sq->bindParam(':Clave',$datos['Clave']);
           $sql->execute();
           return $sql;
        }
    }