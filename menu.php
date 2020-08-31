<?php

require_once "class/Usuario.php";

session_start();

if (!isset($_SESSION['usuario'])) {
	header('location: /programacion3/Gestion/formulario_login.php');
}

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="static/css/menu.css">
</head>
<body>
 
	<ul id="barra">

	<li><?php echo $usuario ."/";?></li>

	<li><a href="/programacion3/gestion/dashboard.php">INICIO</a></li>

	<?php foreach ($usuario->perfil->getModulos() as $modulo): ?>
		<li><a href="/programacion3/gestion/modulos/<?php echo $modulo->getDirectorio()?>/listado.php">
			<?php echo "/"." ". $modulo. "/"." ";?>
		</a></li>

	<?php endforeach ?>
	
	<li><a href="/programacion3/Gestion/logout.php">Salir</a></li>
	</ul>

</body>
</html>