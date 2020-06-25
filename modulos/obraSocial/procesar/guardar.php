<?php

require_once '../../../class/ObraSocial.php';

$nombre = $_POST['txtNombre'];
$coSeguro = $_POST['txtCoSeguro'];


$obraSocial= new ObraSocial;
$obraSocial->setNombre($nombre);
$obraSocial->setCoSeguro($coSeguro);

$obraSocial->guardar();

//highlight_string(var_export($obraSocial,true));

?>

