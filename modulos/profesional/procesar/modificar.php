<?php

require_once '../../../class/Profesional.php';

$id= $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];
$matricula = $_POST['txtMatricula'];


if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	exit;
}


$profesional = Profesional::ObtenerPorId($id);
$profesional->setNombre($nombre);
$profesional->setApellido($apellido);
$profesional->setFechaNacimiento($fechaNacimiento);
$profesional->setIdTipoDocumento($tipoDocumento);
$profesional->setNumeroDocumento($numeroDocumento);
$profesional->setMatricula($matricula);

$profesional->actualizar();

//highlight_string(var_export($profesional,true));

header('location:../listado.php?mensaje=2');

?>
