<?php

require_once "../../../class/Profesional.php";

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


$profesional = new Profesional($nombre, $apellido);
$profesional->setFechaNacimiento($fechaNacimiento);
$profesional->setIdTipoDocumento($tipoDocumento);
$profesional->setNumeroDocumento($numeroDocumento);
$profesional->setMatricula($matricula);

$profesional->guardar();

//highlight_string(var_export($profesional,true));

header('location:../listado.php?mensaje=1');

?>

