<?php

require_once '../../../class/Profesional.php';
require_once '../../../class/EspecialidadProfesional.php';
require_once '../../../class/obraSocialProfesional.php';

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
	$_SESSION['mensaje_error'] ="LA MATRICULA DEBE TENER 3 CARACTERES";
	header('location:../alta.php');
	exit;
}

if (strlen(trim($numeroDocumento)) < 7){
	$_SESSION['mensaje_error'] = "EL NUMERO DE DOCUMENTO CONTENER 8 CARACTERES";
	header('location:../alta.php');
	exit;
}




$profesional = new Profesional($nombre, $apellido);
$profesional->setFechaNacimiento($fechaNacimiento);
$profesional->setIdTipoDocumento($tipoDocumento);
$profesional->setNumeroDocumento($numeroDocumento);
$profesional->setMatricula($matricula);

$profesional->guardar();

highlight_string(var_export($profesional,true));

//add especialidad

$listaEspecialidad= $_POST['cboEspecialidad'];

foreach ($listaEspecialidad as $especialidad_id) {
	$especialidadProfesional= new EspecialidadProfesional();
	$especialidadProfesional->setIdProfesional($profesional->getIdProfesional());
	$especialidadProfesional->setIdEspecialidad($especialidad_id);
	$especialidadProfesional->guardar();
}

//add obra social

$listaObraSocial = $_POST['cboObraSocial'];

foreach ($listaObraSocial as $obraSocial_id) {
	$obraSocialProfesional= new obraSocialProfesional();
	$obraSocialProfesional->setIdProfesional($profesional->getIdProfesional());
	$obraSocialProfesional->setIdObraSocial($obraSocial_id);
	$obraSocialProfesional->guardar();
}

//header('location:../listado.php?mensaje=1');

?>

