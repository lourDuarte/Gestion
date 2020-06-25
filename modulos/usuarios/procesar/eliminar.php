<?php

require_once "../../../class/Usuario.php";

$id=$_GET['id'];

$usuario= Usuario::ObtenerPorId($id);

$usuario->getIdUsuario();
$usuario->getIdPersona();
$usuario->getNombre();
$usuario->getApellido();
$usuario->getPassword();
$usuario->getUsername();
$usuario->getFechaNacimiento();
$usuario->getIdTipoDocumento();
$usuario->getNumeroDocumento();
$usuario->getEstado();

$usuario->eliminar();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once "../../../menu.php";
	?>
	<br><br>

	<div align="center">
		<?php 
		echo 'usuario eliminado';
		?>

</body>
</html>