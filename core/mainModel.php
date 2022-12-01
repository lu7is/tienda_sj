<?php
    if($peticionAjax){
        require_once "../core/configApp.php";
    }else{
        require_once "./core/configApp.php";
    }
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
            $sql = self::conectar()->prepare("INSERT INTO cuenta (cuentaCodigo, cuentaPrivilegio, cuentaUsuario, cuentaClave, cuentaEmail, cuentaEstado, cuentaTipo, cuentaGenero ) 
            VALUES(:Codigo, :Privilegio, :Usuario, :Clave, :Email, :Estado, :Tipo, :Genero )");
            $sql->bindParam(":Codigo",$Codigo['Codigo']);
            $sql->bindParam(":Privilegio",$Privilegio['Privilegio']);
            $sql->bindParam(":Usuario",$Usuario['Usuario']);
            $sql->bindParam(":Clave",$Clave['Clave']);
            $sql->bindParam(":Email",$Email['Email']);
            $sql->bindParam(":Estado",$Estado['Estado']);
            $sql->bindParam(":Tipo",$Tipo['Tipo']);
            $sql->bindParam(":Genero",$Genero['Genero']);
            $sql->execute();
            return $sql();
        }

        protected function eliminar_cuenta($codigo){
            $sql=self::conectar()->prepare("DELETE FROM cuenta WHERE cuentaCodigo =:Codigo ");
            $sql->bindParam(":Codigo",$Codigo);
            $sql->execute();
            return $sql();

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

        protected function generar_codigo ($letra, $longitud, $num){
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
                    Swal(
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
                        text: ".$datos['Texto'].",
                        icon: '".$datos['Tipo']."',
                        confirmButtonText: 'Aceptar'
                      }).then(function () {
                        $('.FormularioAjax')[0].reset();
                      })
                    </script>
                ";

            }
            return $alerta;
        }


    }