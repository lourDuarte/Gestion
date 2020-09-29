<?php

require_once "../../../class/Usuario.php";

session_start();

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$username = $_POST ['txtUsername'];
$password = $_POST ['txtPassword'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$perfil = $_POST['cboTipoPerfil'];
$numeroDocumento = $_POST['txtNumeroDocumento'];



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

if (empty(trim($username))) {
	$_SESSION['mensaje_error']= "DEBE INGRESAR NOMBRE DE USUARIO";
	header('location:../alta.php');
	//echo "ERROR NOMBRE VACIO";
	exit;
}

if (empty(trim($password))) {
	$_SESSION['mensaje_error']= "ERROR CONTRASEÑA VACIA";
	header('location:../alta.php');
	//echo "ERROR NOMBRE VACIO";
	exit;
}

if (strlen(trim($password)) < 6){
	$_SESSION['mensaje_error'] = "CONTRASEÑA INSEGURA:ingrese al menos 6 caracteres";
	header('location:../alta.php');
	exit;
}

if (empty(trim($perfil))){
	$_SESSION['mensaje_error'] = "DEBE ESPECIFICAR TIPO DE PERFIL";
	header('location:../alta.php');
	exit;
}


$usuario = new Usuario($nombre, $apellido);
$usuario->setUsername($username);
$usuario->setPassword($password);
$usuario->setFechaNacimiento($fechaNacimiento);
$usuario->setIdTipoDocumento($tipoDocumento);
$usuario->setIdPerfil($perfil);
$usuario->setNumeroDocumento($numeroDocumento);


$usuario->guardar();

//highlight_string(var_export($paciente,true));

header('location:../listado.php');

?>















