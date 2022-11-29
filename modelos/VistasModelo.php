<?php

    class vistasModel{
        protected function obtener_vistas_modelo($vistas){
            $listaBlanca = ["usuarios", "dashboard", "perfil", "clientes"];
        
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas.".php")){
                    $contenido = "./vistas/contenidos/".$vistas.".php";
                }else{
                    $contenido = "login";
                }
            }elseif($vistas == "login"){

                $contenido = "login";

            }elseif($vistas == "index"){

                $contenido = "login"; 
            }else{
                $contenido = "404";
            }
            return $contenido;
        }
    }