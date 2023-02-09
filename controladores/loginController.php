<?php
//$peticionAjax = true;
//require_once "../core/configGeneral.php";
    
if($peticionAjax){
        require_once "../modelos/loginModelo.php";
    }else{
        require_once "./modelos/loginModelo.php";
    }

    class loginController extends loginModelo{
        
        public function IniciarSesion_controlador(){
            $UsuarioF = mainModel::limpiar_cadena($_POST['UsuarioF']);
            $ClaveF = mainModel::limpiar_cadena($_POST['ClaveF']);
            $ClaveF =mainModel::encriptar($ClaveF);
            $datosLogin = [
                "Usuario" => $UsuarioF,
                "Clave" => $ClaveF
            ];
//DATOS CUENTA ES UNA VARIABLE CREADA PARA ALMACENAR ESA INFORMCAION SIGUIENTE

            $datosCuenta = loginModelo::IniciarSesion_modelo($datosLogin);

            if($datosCuenta->rowCount() == 1){
                $row = $datosCuenta->fetch();
                $fechaActual = date("Y-M-D");
                $horActual = date("h:i:s a");
                $yearActual = date(Y);  
                $consulta1 = mainModel::consultas_simples("SELECT id_bitacora FROM tblbitacora");

                $numero = ($consulta1->rowCount())+1;

                $codigoB = mainModel::generar_codigo($CB, 7, $numero);

                $datosBitacora = [
                    "Codigo" => $codigoB,
                    "Fecha" => $fechaActual,
                    "HoraInicio" => $horActual,
                    "HoraFinal" => "Sin registro",
                    "Tipo" =>  $row['cuentaTipo'],
                    "Year" => $yearActual,
                    "Cuenta" => $row['cuentaCodigo']
                ];
                $guardarBita = mainModel::GuardarBitacora($datosBitacora);
                if($guardarBita->rowCount()>=1){
                    session_start(['name'=>'SBP']);
                    $_SESSION['Usuario_SBP'] = $row['cuentaUsuario'];
                    $_SESSION['Tipo_SBP'] = $row['cuentaTipo'];
                    $_SESSION['Token_SBP'] = md5(uniqid(mt_rand(),true));
                    $_SESSION['Codigo_Cuenta_SBP'] = $row['cuentaCodigo'];
                    $_SESSION['Codigo_Bitacora_SBP'] = $codigoB;

                    if($row['cuentaTipo'] == 'Administrador'){
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
                //return mainModel::sweet_alert($alerta);
                return mainModel::sweet_alert($alerta);
                }

            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un Error Inesperado ",
                    "Texto"=>"Usuario o Contraseña Errada, Intenta Nuevamente!",
                    "Tipo"=>"error"
                ];
                //return mainModel::sweet_alert($alerta);
                return mainModel::sweet_alert($alerta);
           }
        }

        public function Vlidar_Sesion(){
            session_destroy();
            return header("Location: ".SERVERURL." ");
        }


    }