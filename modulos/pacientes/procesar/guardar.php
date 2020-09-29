<?php

require_once "../../../class/Paciente.php";
require_once '../../../class/obraSocialPaciente.php';

session_start();

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];
$descripcion = $_POST['txtDescripcion'];


if (empty(trim($nombre))) {
	$_SESSION['mensaje_error']= "ERROR NOMBRE VACIO";
	header('location:../alta.php');
	
	exit;
}

if (empty(trim($apellido))) {
	$_SESSION['mensaje_error']= "ERROR APELLIDO VACIO";
	header('location:../alta.php');
;
	exit;
}


if (strlen(trim($numeroDocumento)) < 8 ) {
	$_SESSION['mensaje_error']="EL DOCUMENTO DEBE TENER AL MENOS 8 CARACTERES";
	header('location:../alta.php');
	exit;
}

if(empty(trim($numeroDocumento))){
	$_SESSION['mensaje_error'] = "NUMERO DE DOCUMENTO VACIO";
	header('location:../alta.php');
	exit;
}


//if (empty(trim($descripcion))) {
//	$_SESSION['mensaje_error']= "ERROR DESCRIPCION VACIA";
//	header('location:../alta.php');

//	exit;
//}





$paciente = new Paciente($nombre, $apellido);
$paciente->setFechaNacimiento($fechaNacimiento);
$paciente->setIdTipoDocumento($tipoDocumento);
$paciente->setNumeroDocumento($numeroDocumento);
$paciente->setDescripcion($descripcion);

$paciente->guardar();

//highlight_string(var_export($paciente,true));

//add obra social

$listaObraSocial = $_POST['cboObraSocial'];

foreach ($listaObraSocial as $obraSocial_id) {
	$obraSocialPaciente= new obraSocialPaciente();
	$obraSocialPaciente->setIdPaciente($paciente->getIdPaciente());
	$obraSocialPaciente->setIdObraSocial($obraSocial_id);
	$obraSocialPaciente->guardar();
}

header('location: ../listado.php?mensaje=1');

?>


