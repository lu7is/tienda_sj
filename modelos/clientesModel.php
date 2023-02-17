<?php
    if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class clientesModel extends mainModel{

        protected function Registrar($datwa){
            $sql = mainModel::conectar()->prepare("INSERT INTO cliente (cedulaCliente,nombreCliente,apellidoCliente,telCliente,sexoCliente,direccionCliente,CuentaCodigo) 
            VALUES (:Cedula, :Nombre, :Apellido, :Telefono, :Direccion,:Sexo, :Codigo)");
            $sql->bindParam(":Cedula",$datwa['Cedula']);
            $sql->bindParam(":Nombre",$datwa['Nombre']);
            $sql->bindParam(":Apellido",$datwa['Apellido']);
            $sql->bindParam(":Telefono",$datwa['Telefono']);
            $sql->bindParam(":Sexo",$datwa['Sexo']);
            $sql->bindParam(":Direccion",$datwa['Direccion']);
            $sql->bindParam(":Codigo",$datwa['Codigo']);
            $sql->execute();
           
            return $sql;
           
        }



    }

