<?php
require_once '../../class/Usuario.php';

$id = $_GET['id'];

$usuario= Usuario::obtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Datos Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Usuario </caption>
		<tr>
			<thead>
				<th>ID Usuario</th>
				<th>ID Persona</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Username</th>
				<th>Password</th>
				<th>Numero Documento</th>
				<th>Fecha Nacimiento</th>
				<th>Estado</th>

			</thead>

		<tr>
			<td> <?php echo $usuario->getIdUsuario();?></td>
			<td> <?php echo $usuario->getIdPersona(); ?> </td>
			<td> <?php echo $usuario->getNombre(); ?></td>
			<td> <?php echo $usuario->getApellido(); ?></td>
			<td> <?php echo $usuario->getUsername(); ?></td>
			<td> <?php echo $usuario->getPassword(); ?></td>
			<td> <?php echo $usuario->getNumeroDocumento(); ?></td>
			<td> <?php echo $usuario->getFechaNacimiento(); ?></td>
			<td> ACTIVO </td>
		</tr>
	</table>

</body>