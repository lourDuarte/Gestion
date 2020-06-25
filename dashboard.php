
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
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="static/css/table.cc">
</head>
<body>

	<?php require_once "menu.php"; ?>

	<br><br>
	<div align="center">
		
		<h1> Bienvenido <?echo $usuario->getNombre()?> </h1>
	</div>


</body>
</html>