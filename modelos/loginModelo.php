<?php
   
//ESTE LOGIN FUNCIONO EL 8 DE FEBRERO DEL 2023  A LAS 12 DE LA NOCHE
if($peticionAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class loginModelo extends mainModel{

        protected function IniciarSesion_modelo($datos){
           $sql = mainModel::conectar()->prepare("SELECT * FROM cuenta WHERE cuentaUsuario = :Usuario AND cuentaClave = :Clave 
                                                  AND cuentaEstado = 'Activo' "); 
           
           $sql->bindParam(':Usuario',$datos['Usuario']);
           $sql->bindParam(':Clave',$datos['Clave']);
           $sql->execute();
           return $sql;
        }
//IGUALAMOS EL TOKEN DEL USUARIO CON EL DE LA SESCION PARA CERRAR LA SESION 28/02/2023
        protected function cerrarSesion_modelo($datos){
            if($datos['Usuario']!="" && $datos['token_u']==$datos['Token']){
                $Abitacora = mainModel::ActualizarBitacora($datos['Codigo'], $datos['Hora']);
                if($Abitacora->rowCount()==1){
                    session_unset();
                    session_destroy();
                    $respuesta = "true";
                }else{
                    $respuesta = "false";
                }
            }else{
                $respuesta = "false";
            }
            return $respuesta;
        }
    }
    
    
