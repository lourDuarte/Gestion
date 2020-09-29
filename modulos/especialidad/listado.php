<?php

require_once '../../class/Especialidad.php';

$listadoEspecialidades = Especialidad::obtenerTodos();

const SIN_ACCION = 0;
const ESPECIALIDAD_GUARDADO = 1;
const ESPECIALIDAD_ACTUALIZADA = 2;

if (isset($_GET['mensaje'])) {
	$mensaje = $_GET['mensaje'];
} else {
	$mensaje = SIN_ACCION;
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Especialidades</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>

	<br><br>
	<?php if ($mensaje == ESPECIALIDAD_GUARDADO){ ?>
			<h3>Especialidad añadida con exito</h3>
			<br><br>
	<?php }elseif ($mensaje == ESPECIALIDAD_ACTUALIZADA){ ?>
		 	<h3>Especialidad actualizada con exito</h3>
		 	<br><br>
	<?php } ?>

	<br>

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