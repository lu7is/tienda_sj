<?php
    if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class administradorModel extends mainModel{

        protected function Registrar_administrador($data){
            $sql = mainModel::conectar()->prepare("INSERT INTO admin(cedulaAdmin, nombreAdmin, apellidoAdmin, telAdmin, direccionAdmin, cuentaCodigo ) 
            VALUES (:Cedula, :Nombre, :Apellido, :Telefono, :Direccion, :Codigo)");
            $sql->bindParam(":Cedula",$data['Cedula']);
            $sql->bindParam(":Nombre",$data['Nombre']);
            $sql->bindParam(":Apellido",$data['Apellido']);
            $sql->bindParam(":Telefono",$data['Telefono']);
            $sql->bindParam(":Direccion",$data['Direccion']);
            $sql->bindParam(":Codigo",$data['Codigo']);
            $sql->execute();
           
            return $sql;
           
        }



    }

