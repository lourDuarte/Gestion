<?php

require_once '../../../class/Tratamiento.php';

$id = $_POST['txtId'];
$tipo = $_POST['txtTipo'];
$observacion= $_POST['txtObservacion'];

$tratamiento= Tratamiento::obtenerPorId($id);
$tratamiento->setTipo($tipo);
$tratamiento->setObservacion($observacion);

$tratamiento->actualizar();

header('location:../listado.php');

?>