<?php

require_once "../../../class/Profesional.php";

session_start();

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];
$matricula = $_POST['txtMatricula'];


if (empty(trim($nombre))) {
	$_SESSION['mensaje_error']= "ERROR NOMBRE VACIO";
	header('location:../alta.php');
	//echo "ERROR NOMBRE VACIO";
	exit;
}

if (empty(trim($apellido))) {
	$_SESSION['mensaje_error']= "ERROR APELLIDO VACIO";
	header('location:../alta.php');
	//echo "ERROR NOMBRE VACIO";
	exit;
}

if (empty(trim($matricula))){
	$_SESSION['mensaje_error']= "DEBE INGRESAR SU MATRICULA";
	header('location:../alta.php');

	exit;
}

if (strlen(trim($matricula)) < 3 ) {
	$_SESSION['mensaje_error']="LA MATRICULA DEBE TENER 3 CARACTERES";
	header('location:../alta.php');
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

