<?php
    if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class clientesModel extends mainModel{

        protected function Registrar_Clientee($data){
            $sql = mainModel::conectar()->prepare("INSERT INTO tblcliente (cedulaCliente, nombreCliente, apellidoCliente, sexoCliente, telCliente, direccionCliente, cuentaCodigo ) 
            VALUES (:Cedula, :Nombre, :Apellido, :Telefono,:Sexo,:Direccion, :Codigo)");
            $sql->bindParam(":Cedula",$data['Cedula']);
            $sql->bindParam(":Nombre",$data['Nombre']);
            $sql->bindParam(":Apellido",$data['Apellido']);
            $sql->bindParam(":Telefono",$data['Telefono']);
            $sql->bindParam(":Sexo",$data['Sexo']);
            $sql->bindParam(":Direccion",$data['Direccion']);
            $sql->bindParam(":Codigo",$data['Codigo']);
            $sql->execute();
           
            return $sql;
           
        }



    }

