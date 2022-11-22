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

        protected function Consultas_Simples($consulta){
            $respuesta = self::conectar()->prepare($consulta);
            $respuesta->execute();
            return $respuesta;
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
    }