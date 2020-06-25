<?php

require_once "class/Usuario.php";

session_start();

if (!isset($_SESSION['usuario'])) {
	header('location: formulario_login.php');
}

$usuario = $_SESSION['usuario'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="static/css/table.css">
</head>
<body>
		<?php echo $usuario->getUsername(); ?>
		/
		<a href="/programacion3/gestion/modulos/pacientes/listado.php">Pacientes</a>
		/
		<a href="/programacion3/gestion/modulos/profesional/listado.php"> Profesionales</a>
		/
		<a href="/programacion3/gestion/modulos/usuarios/listado.php">Usuarios</a>
		/
		<a href="/programacion3/gestion/modulos/obraSocial/listado.php">Obra Sociales</a>
		/
		<a href="/programacion3/gestion/modulos/especialidad/listado.php">Especialidades</a>
		/
		<a href="/programacion3/gestion/logout.php">Salir</a>


</body>
</html>