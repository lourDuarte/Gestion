<?php

session_start();

require_once '../../../class/ObraSocial.php';

$nombre = $_POST['txtNombre'];
$coSeguro = $_POST['txtCoSeguro'];


$obraSocial= new ObraSocial;
$obraSocial->setNombre($nombre);
$obraSocial->setCoSeguro($coSeguro);

$obraSocial->guardar();

//highlight_string(var_export($obraSocial,true));

if (empty(trim($nombre))){
	$_SESSION['mensaje_error']="DEBE INGRESAR NOMBRE DE LA OBRA SOCIAL";
	header("location:../alta.php");
	exit;
}

header('location: ../listado.php?mensaje=1');

?>

