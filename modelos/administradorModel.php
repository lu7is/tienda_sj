<?php
    if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class administradorModel extends mainModel{

        protected function Registrar_administrador($datos){
            $sql = mainModel::conectar()->prepare("INSERT INTO admin(cedulaAdmin, nombreAdmin, telAdmin, CuentaCodigo ) 
            VALUES (:Cedula, :Nombre, :Telefono, :Codigo)");
            $sql->bindParam(":Cedula",$Cedula['Cedula']);
            $sql->bindParam(":Nombre",$Nombre['Nombre']);
            $sql->bindParam(":Telefono",$Telefono['Telefono']);
            $sql->bindParam(":Codigo",$Codigo['Codigo']);
            $sql->execute();
            return $sql;
        }
    }

