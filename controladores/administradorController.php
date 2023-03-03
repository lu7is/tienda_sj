<?php
    if($peticionAjax){
        require_once "../modelos/administradorModel.php";
    }else{
        require_once "./modelos/administradorModel.php";
    }

    class administradorController extends administradorModel{

        
        public function Registrar_administrador_controller(){
            $Cedula = mainModel::limpiar_cadena($_POST['Cedula']);
            $Nombre = mainModel::limpiar_cadena($_POST['Nombre']);
            $Apellido = mainModel::limpiar_cadena($_POST['Apellido']);
            $Email = mainModel::limpiar_cadena($_POST['Email']);
            $Usuario = mainModel::limpiar_cadena($_POST['Usuario']);
            $Password1 = mainModel::limpiar_cadena($_POST['Password1']);
            $Password = mainModel::limpiar_cadena($_POST['Password']);
            $Direccion = mainModel::limpiar_cadena($_POST['Direccion']);
            $Telefono = mainModel::limpiar_cadena($_POST['Telefono']);
            $Fecha = mainModel::limpiar_cadena($_POST['Fecha']);
            

            if($Password1 != $Password){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"ocurrio un error inesperado",
                    "Texto"=>"las contraseñas ingresadas no coinciden",
                    "Tipo"=>"error"
                ];
            }else{
            $consulta = mainModel::consultas_simples("SELECT cedulaAdmin FROM admin WHERE cedulaAdmin ='$Cedula '");

            if($consulta->rowCount()>=1){
                $alerta = [
                    "Alerta"=>"simple",
                    "Titulo"=>"Error inesperado",
                    "Texto"=>"Esta cedula ya se encuentra registrada en la base de datos",
                    "Tipo"=>"error"
                ];
            }else{
                

            if($Email != ""){
                $consulta2 = mainModel::consultas_simples("SELECT cuentaEmail from cuenta WHERE cuentaEmail ='$Email '");
                    $ec = $consulta2->rowCount();
            }else{
                    $ec = 0;
            }

            if($ec >= 1){
                $alerta = [
                    "Alerta"=>"simple",
                    "Titulo"=>"Error inesperado",
                    "Texto"=>"Este correo ya se encuentra registrado en la base de datos",
                    "Tipo"=>"error"
                ];
            }else{
                $consulta3 = mainModel::consultas_simples("SELECT cuentaUsuario from cuenta WHERE cuentaUsuario ='$Usuario '");
                
                if($consulta3->rowCount()>= 1){
                    $alerta = [
                        "Alerta"=>"simple",
                        "Titulo"=>"Error inesperado",
                        "Texto"=>"Este usuario ya se encuentra registrado en la base de datos",
                        "Tipo"=>"error"
                    ];
                }else{
                    $consulta4 = mainModel::consultas_simples("SELECT id from cuenta ");
                    $numero = ($consulta4->rowCount())+1;
                    
                    $Codigo = mainModel::generar_codigo("AC",7,$numero);

                    $Clave = mainModel::encriptar($Password);

                    $dataAC = [
                        "Codigo"=>$Codigo,
                        "Usuario"=>$Usuario,
                        "Clave"=>$Clave,
                        "Email"=>$Email,
                        "Estado"=>"Activo",
                        "Tipo"=>"Administrador",
                        "Fecha"=>$Fecha
                    ];
                  
                 $guardarCuenta = mainModel::agregar_cuenta($dataAC);
       
                    if($guardarCuenta->rowCount()>=1){

                        $dataAD=[
                          "Cedula"=>$Cedula,
                           "Nombre"=>$Nombre,
                           "Apellido"=>$Apellido,
                           "Telefono"=>$Telefono,
                           "Direccion"=>$Direccion,
                           "Codigo"=>$Codigo
                        ];
                        
                  $guardarAdmin = administradorModel::Registrar_administrador($dataAD);
                  
                    if($guardarAdmin->rowCount()>=1){
                        $alerta = [
                            "Alerta"=>"limpiar",
                            "Titulo"=>"Administrador Registrado",
                             "Texto"=>"El Administrador se ha registrado correctamente",
                             "Tipo"=>"success"
                            ];
                        }else{
                            mainModel::eliminar_cuenta($Codigo);
                            $alerta = [
                                "Alerta"=>"simple",
                                "Titulo"=>"Error inesperado",
                                "Texto"=>"El Administrador no fue registrada",
                                "Tipo"=>"error"
                            ];
                        }

                    }else{
                        $alerta = [
                            "Alerta"=>"simple",
                            "Titulo"=>"Error inesperado",
                            "Texto"=>"La cuenta no fue registrada",
                            "Tipo"=>"error"
                        ];
                    }
                }
            }
        }
            }
            return mainModel::sweet_alert($alerta);
        }
    }


