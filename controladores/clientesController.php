<?php
    if($peticionAjax){
        require_once "../modelos/clientesModel.php";
    }else{
        require_once "./modelos/clientesModel.php";
    }

    class clientesController extends clientesModel{

        
        public function Registrar_Clientes(){
            $CedulaC = mainModel::limpiar_cadena($_POST['CedulaC']);
            $NombreC = mainModel::limpiar_cadena($_POST['NombreC']);
            $ApellidoC = mainModel::limpiar_cadena($_POST['ApellidoC']);
            $EmailC = mainModel::limpiar_cadena($_POST['EmailC']);
            $UsuarioC = mainModel::limpiar_cadena($_POST['UsuarioC']);
            $Password1C = mainModel::limpiar_cadena($_POST['Password1C']);
            $PasswordC = mainModel::limpiar_cadena($_POST['PasswordC']);
            $DireccionC = mainModel::limpiar_cadena($_POST['DireccionC']);
            $SexoC = mainModel::limpiar_cadena($_POST['SexoC']);
            $TelefonoC = mainModel::limpiar_cadena($_POST['TelefonoC']);
            $FechaC = mainModel::limpiar_cadena($_POST['FechaC']);
            

            if($Password1C != $PasswordC){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"ocurrio un error inesperado",
                    "Texto"=>"las contraseñas ingresadas no coinciden",
                    "Tipo"=>"error"
                ];
            }else{
            $consulta = mainModel::consultas_simples("SELECT cedulaCliente FROM tblcliente WHERE cedulaCliente ='$CedulaC '");

            if($consulta->rowCount()>=1){
                $alerta = [
                    "Alerta"=>"simple",
                    "Titulo"=>"Error inesperado",
                    "Texto"=>"Esta cedula ya se encuentra registrada en la base de datos",
                    "Tipo"=>"error"
                ];
            }else{
            if($EmailC != ""){
                $consulta2 = mainModel::consultas_simples("SELECT cuentaEmail from cuenta WHERE cuentaEmail ='$EmailC '");
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
                $consulta3 = mainModel::consultas_simples("SELECT cuentaUsuario from cuenta WHERE cuentaUsuario ='$UsuarioC '");
                
                if($consulta3->rowCount()>= 1){
                    $alerta = [
                        "Alerta"=>"simple",
                        "Titulo"=>"Error inesperado",
                        "Texto"=>"Este usuario ya se encuentra registrado en la base de datos",
                        "Tipo"=>"error"
                    ];
                }else{
                    $consulta4 = mainModel::consultas_simples("SELECT id from cuenta ");
                    $numeroC = ($consulta4->rowCount())+1;
                    $CodigoC = mainModel::generar_codigo("AC",7,$numeroC);

                    $ClaveC = mainModel::encriptar($PasswordC);

                    $dataAC = [
                        "Codigo"=>$CodigoC,
                        "Usuario"=>$UsuarioC,
                        "Clave"=>$ClaveC,
                        "Email"=>$EmailC,
                        "Estado"=>"Activo",
                        "Tipo"=>"Cliente",
                        "Fecha"=>$FechaC
                    ];

                     $guardarCuenta = mainModel::agregar_cuenta($dataAC);
                  
                    if($guardarCuenta->rowCount()>=1){

                        $dataAD=[
                          "Cedula"=>$CedulaC,
                           "Nombre"=>$NombreC,
                           "Apellido"=>$ApellidoC,
                           "Telefono"=>$TelefonoC,
                           "Sexo" => $SexoC,
                           "Direccion"=>$DireccionC,
                           "Codigo"=>$CodigoC
                        ];
         // echo print_r ($dataAD);
                      $guardarAdmins = clientesModel::Registrar($dataAD);
                     if($guardarAdmins->rowCount()>=1){
                        $alerta = [
                            "Alerta"=>"limpiar",
                            "Titulo"=>"Cliente Registrado",
                             "Texto"=>"El Administrador se ha registrado correctamente",
                             "Tipo"=>"success"

                            ];
                        }else{
                            mainModel::eliminar_cuenta($CodigoC);
                            $alerta = [
                                "Alerta"=>"simple",
                                "Titulo"=>"Error inesperado",
                                "Texto"=>"El Cliente no fue registrado",
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


