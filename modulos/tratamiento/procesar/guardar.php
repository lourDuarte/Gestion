<?php
require_once '../../../class/Tratamiento.php';

session_start();

$tipo=$_POST['txtTipo'];
$observacion=$_POST['txtObservacion'];

$tratamiento= new Tratamiento;
$tratamiento->setTipo($tipo);
$tratamiento->setObservacion($observacion);

$tratamiento->guardar();

header('location:../listado.php');

?>