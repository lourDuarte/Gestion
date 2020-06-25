<?php

require_once '../../class/Especialidad.php';

$listadoEspecialidades = Especialidad::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Especialidades</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Listado Especialidades </caption>
		<tr>
			<thead>
				<th>Nombre</th>
				<th>Acciones</th>
			</thead>
		</tr>

		<?php foreach ($listadoEspecialidades as $especialidad): ?>
				<tr>
					<td> <?php echo $especialidad->getTipo(); ?> </td>
					<td>
						<a href="detalle.php?id=<?php echo $especialidad->getIdEspecialidad(); ?>">
							<img src="../../imagenes/iconos/detalle.png" title="ver detalle">
						</a>
						<a href="modificar.php?id=<?php echo $especialidad->getIdEspecialidad(); ?>">
							<img src="../../imagenes/iconos/update.png" title="actualizar">
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $especialidad->getIdEspecialidad(); ?>">
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
		<img src="../../imagenes/iconos/add.png">Agregar Nueva Especialidad</a>
	</div>


</body>
</html>