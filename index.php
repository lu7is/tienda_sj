<?php

  require_once "core/configGeneral.php";
  require_once "controladores/VistasController.php";

  $Plantilla = new vistasController();
  $Plantilla->Obtener_platilla_controlador();
