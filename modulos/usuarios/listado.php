<?php

require_once '../../class/Usuario.php';


$listaUsuarios= Usuario::ObtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Usuarios</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Listado Usuarios </caption>
		<tr>
			<thead>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Acciones</th>
			</thead>
		</tr>

		<?php foreach ($listaUsuarios as $usuario): ?>
				<tr>
					<td> <?php echo $usuario->getNombre(); ?> </td>
					<td> <?php echo $usuario->getApellido(); ?> </td>
					<td>
						<a href="detalle.php?id= <?php echo $usuario->getIdUsuario();?>" >
							<img src="../../imagenes/iconos/detalle.png" title="ver detalle">
						</a>
						<a href="modificar.php?id=<?php echo $usuario->getIdUsuario(); ?>">
							<img src="../../imagenes/iconos/update.png" title="actualizar">
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $usuario->getIdUsuario(); ?>">
							<img src="../../imagenes/iconos/delete.png" title="eliminar">
						</a>
					</td>
				</tr>

		<?php endforeach ?>
		</table>

	</table>
	<br><br>
	<div align="left">
		<a href="alta.php">
		<img src="../../imagenes/iconos/add.png">Agregar Nuevo Usuario</a>
	</div>


</body>
</html>
