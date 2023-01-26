<?php
    if($peticionAjax){
        require_once "../modelos/LoginModelo.php";
    }else{
        require_once "./modelos/LoginModelo.php";
    }

    class LoginControlador extends LoginModelo{
        
        public function IniciarSesion(){
            $UsuarioF = mainModel::limpiar_cadena($_POST['Usuario']);
            $ClaveF = mainModel::limpiar_cadena($_POST['Clave']);

            $ClaveF = mainModel::encriptar($ClaveF);
            $datosLogin = [
                "Usuario" => $UsuarioF,
                "Clave" => $ClaveF
            ];
//DATOS CUENTA ES UNA VARIABLE CREADA PARA ALMACENAR ESA INFORMCAION SIGUIENTE
            $datosCuenta = LoginModelo::IniciarSesion($datosLogin);

            if($datosCuenta->rowCount() == 1){
                $row = $datosCuenta->fetch();
                $fechaActual = date("Y-M-D");
                $yearActual = date(Y);
                $horActual = date("h:i:s a");  
                $consulta1 = mainModel::consultas_simples("SELECT id_bitacora FROM tblbitacora");

                $numero = ($consulta1->rowCount())+1;

                $codigoB = mainModel::generar_codigo($CB, 7, $numero);

                $datosBitacora = [
                    "Codigo" => $codigoB,
                    "Fecha" => $fechaActual,
                    "HoraInicio" => $horActual,
                    "HoraFinal" => "Sin registro",
                    "Tipo" =>  $row['CuentaTipo'],
                    "Year" => $yearActual,
                    "Cuenta" => $row['CuentaCodigo']
                ];
                $guardarBita = mainModel::GuardarBitacora($datosBitacora);
                if($guardarBita->rowCount()>=1){
                    session_start(['name'=>'SBP']);
                    $_SESSION['Usuario_SBP'] = $row['CuentaUsuario'];
                    $_SESSION['Tipo_SBP'] = $row['CuentaTipo'];
                    $_SESSION['Token_SBP'] = md5(uniqid(mt_rand(),true));
                    $_SESSION['Codigo_Cuenta_SBP'] = $row['CuentaCodigo'];
                    $_SESSION['Codigo_Bitacora_SBP'] = $codigoB;

                    if($row['CuentaTipo'] == 'Administrador'){
                        $url = $SERVERURL."dashboard";
                    }else{
                        $url = $SERVERURL."perfil";
                    }

                    return $urlLocation = '<script> window.location = "'.$url.'" </script>';
                }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un Error Inesperado",
                    "Texto"=>"No se Ha Podido Iniciar Sesion Por Favor Intenta Nuevamente",
                    "Tipo"=>"error"
                ];
                return mainModel::sweet_alert($alerta);
                }

            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un Error Inesperado",
                    "Texto"=>"Usuario o Contraseña Errada, Intenta Nuevamente!",
                    "Tipo"=>"error"
                ];
                return mainModel::sweet_alert($alerta);
            }



        }
    }