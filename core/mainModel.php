 <?php
    if($peticionAjax){
        require_once "../core/configApp.php";
    }else{
        require_once "./core/configApp.php";
    }

    $alerta;

    class mainModel {
        protected function conectar(){
            $enlace = new PDO(SGBD,USER,PASS);
            return $enlace;
        }

        protected function consultas_simples($consulta){
            $respuesta = self::conectar()->prepare($consulta);
            $respuesta->execute();
            return $respuesta;
        }

        protected function agregar_cuenta($datos){
            $sql = self::conectar()->prepare("INSERT INTO cuenta (cuentaCodigo, cuentaUsuario, cuentaClave, cuentaEmail, cuentaEstado, cuentaTipo, fecha ) 
            VALUES(:Codigo, :Usuario, :Clave, :Email, :Estado, :Tipo, :Fecha )");
            $sql->bindParam(":Codigo",$datos['Codigo']);
            $sql->bindParam(":Usuario",$datos['Usuario']);
            $sql->bindParam(":Clave",$datos['Clave']);
            $sql->bindParam(":Email",$datos['Email']);
            $sql->bindParam(":Estado",$datos['Estado']);
            $sql->bindParam(":Tipo",$datos['Tipo']);
            $sql->bindParam(":Fecha",$datos['Fecha']);
            $sql->execute();
            return $sql;
        }

        protected function eliminar_cuenta($codigo){
            $sql=self::conectar()->prepare("DELETE FROM cuenta WHERE cuentaCodigo =:Codigo ");
            $sql->bindParam(":Codigo",$Codigo);
            $sql->execute();
            return $sql;

        }

        protected function GuardarBitacora($datos){
            $sql=self::conectar()->prepare("INSERT INTO tblbitacora(bitacoraCodigo, bitacoraFecha, bitacoraHoraInicio, bitacoraHoraFinal, bitacoraTipo, bitacoraYear, cuentaCodigo)
                                            VALUES (:Codigo, :Fecha, :HoraInicio, :HoraFinal, :Tipo, :Year, :Cuenta)");
            $sql->bindParam(":Codigo",$datos['Codigo']);
            $sql->bindParam(":Fecha",$datos['Fecha']);
            $sql->bindParam(":HoraInicio",$datos['HoraInicio']);
            $sql->bindParam(":HoraFinal",$datos['HoraFinal']);
            $sql->bindParam(":Tipo",$datos['Tipo']);
            $sql->bindParam(":Year",$datos['Year']);
            $sql->bindParam(":Cuenta",$datos['Cuenta']);
            $sql->execute();
            return $sql;
        }

        protected function ActualizarBitacora($CodigoEn, $Hora){
            $sql=self::conectar()->prepare("UPDATE tblbitacora SET BitacoraHoraFinal = :Hora WHERE BitacoraCodigo = :Codigo ");
            $sql->bindParam(":Hora",$Hora);
            $sql->bindParam(":Codigo",$CodigoEn);
            $sql->execute();
            return $sql;
        }

        protected function EliminarBitacora($CodigoEn){
            $sql=self::conectar()->prepare("DELETE FROM tblbitacora WHERE CuentaCodigo = :Codigo ");
            $sql->bindParam(":Codigo",$CodigoEn);
            $sql->execute();
            return $sql;
        }

        public function encriptar($string){
            $output = FALSE;
            $key = hash('sha256', SECRET_KEY);
            $iv = substr(hash('sha256', SECRET_IV),0, 16);
            $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }

        protected function desencriptar($string){
            $key = hash('sha256', SECRET_KEY);
            $iv = substr(hash('sha256', SECRET_IV),0 , 16);
            $output = openssl_decrypt(base64_decode($string),METHOD, $key,0, $iv);
            return $output;
        }

        protected function generar_codigo($letra, $longitud, $num){
            for($i = 1; $i <= $longitud; $i++){
                $number = rand(0,9);
                $letra.= $number;
            }
            return $letra.$num;
        }

        protected function limpiar_cadena($cadena){
            $cadena = trim($cadena);
            $cadena = stripslashes($cadena);
            $cadena = str_ireplace("<script>", "", $cadena);
            $cadena = str_ireplace("</script>", "", $cadena);
            $cadena = str_ireplace("<script src", "", $cadena);
            $cadena = str_ireplace("<script type", "", $cadena);
            $cadena = str_ireplace("SELECT * FROM", "", $cadena);
            $cadena = str_ireplace("DELETE FROM", "", $cadena);
            $cadena = str_ireplace("INSERT INTO", "", $cadena);
            $cadena = str_ireplace("--", "", $cadena);
            $cadena = str_ireplace("[", "", $cadena);
            $cadena = str_ireplace("]", "", $cadena);
            $cadena = str_ireplace("==", "", $cadena);
            $cadena = str_ireplace(";", "", $cadena);
            return $cadena;
        }

        protected function sweet_alert($datos){
            if($datos['Alerta']=="simple"){
                $alerta="
                    <script>
                    Swal.fire(
                        '".$datos['Titulo']."',
                        '".$datos['Texto']."',
                        '".$datos['Tipo']."'
                      )
                    </script>
                ";
            }elseif($datos['Alerta']=="recargar"){
                $alerta="
                    <script>
                    Swal.fire({
                        title: '".$datos['Titulo']."',
                        text: ".$datos['Texto'].",
                        icon: '".$datos['Tipo']."',
                        confirmButtonText: 'Aceptar'
                      }).then(function () {
                        location.reload();
                      })
                    </script>
                ";
            }elseif($datos['Alerta']=="limpiar"){
                $alerta="
                    <script>
                    Swal.fire({
                        title: '".$datos['Titulo']."',
                        text: '".$datos['Texto']."',
                        icon: '".$datos['Tipo']."',
                        confirmButtonText: 'Aceptar'
                      }).then(function () {
                        $('.frmAdministradores')[0].reset();
                        $('.frmclientes')[0].reset();
                        $(window).attr('location','usuarios');
                      })
                     
                    </script>
                ";

            }

            return $alerta;
        }
  

    }