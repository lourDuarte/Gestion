
<?php

require_once '../../../class/Contacto.php';


$idPersona= $_GET['idPersonaContacto'];


$contacto= Contacto::obtenerPorIdPersona($idPersona);

$contacto->eliminar();

header('location:/programacion3/Gestion/modulos/$modulo/detalle.php');



?>