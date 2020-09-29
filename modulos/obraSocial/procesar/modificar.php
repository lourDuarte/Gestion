<?php

session_start();

require_once '../../../class/ObraSocial.php';

$id= $_POST['txtId'];
$nombre= $_POST['txtNombre'];
$coSeguro= $_POST['txtCoSeguro'];

$obraSocial= ObraSocial::ObtenerPorId($id);
$obraSocial->setNombre($nombre);
$obraSocial->setCoSeguro($coSeguro);

$obraSocial->actualizar();

//highlight_string(var_export($obraSocial,true));

header('location: ../listado.php?mensaje=2');

?>

