<?php

require_once '../../../class/Paciente.php';

$id= $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];
$descripcion = $_POST['txtDescripcion'];


if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	exit;
}


$paciente = Paciente::ObtenerPorId($id);
$paciente->setNombre($nombre);
$paciente->setApellido($apellido);
$paciente->setFechaNacimiento($fechaNacimiento);
$paciente->setIdTipoDocumento($tipoDocumento);
$paciente->setNumeroDocumento($numeroDocumento);
$paciente->setDescripcion($descripcion);

$paciente->actualizar();

highlight_string(var_export($paciente,true));


header('location: ../listado.php?mensaje=2');
?>

