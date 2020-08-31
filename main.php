<?php
//require_once 'class/Paciente.php';
require_once 'class/Profesional.php';
require_once 'class/Domicilio.php';
//require_once 'class/Usuario.php';




$domicilio=Domicilio::obtenerPorIdPersona(1);


highlight_string(var_export($domicilio,true));




?>