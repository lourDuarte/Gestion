<?php

require_once '../../../class/Usuario.php';

$id= $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];

if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	exit;
}


$usuario = Usuario::ObtenerPorId($id);
$usuario->setNombre($nombre);
$usuario->setApellido($apellido);
$usuario->setUsername($username);
$usuario->setPassword($password);
$usuario->setFechaNacimiento($fechaNacimiento);
$usuario->setIdTipoDocumento($tipoDocumento);
$usuario->setNumeroDocumento($numeroDocumento);

$usuario->actualizar();

//highlight_string(var_export($usuario,true));

header('location:../listado.php');

?>


