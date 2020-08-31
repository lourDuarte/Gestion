<?php

require_once '../../class/Profesional.php';

const SIN_ACCION = 0;
const PROFESIONAL_GUARDADO = 1;
const PROFESIONAL_MODIFICADO = 2;
const PROFESIONAL_ELIMINADO = 3;

if (isset($_GET['mensaje'])) {
	$mensaje = $_GET['mensaje'];
} else {
	$mensaje = SIN_ACCION;
}


$listadoProfesionales = Profesional::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Profesionales</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

		<?php if ($mensaje == PROFESIONAL_GUARDADO){ ?>
				<h3>Profesional Guardado con exito</h3>
				<br><br>
		<?php }elseif ($mensaje == PROFESIONAL_MODIFICADO){ ?>
				<h3>Profesional Actualizado con exito</h3>
				<br><br>
		<?php }elseif ($mensaje == PROFESIONAL_ELIMINADO){?>
				<h3>Profesional Eliminado</h3>
		<?php } ?>



	<table align="center">
		<caption> Listado Profesionales </caption>
		<tr>
			<thead>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Matricula</th>
				<th>Acciones</th>
			</thead>
		</tr>

		<?php foreach ($listadoProfesionales as $profesional): ?>
				<tr>
					<td> <?php echo $profesional->getNombre(); ?> </td>
					<td> <?php echo $profesional->getApellido(); ?> </td>
					<td> <?php echo $profesional->getMatricula(); ?> </td>
					<td>
						<a href="detalle.php?id=<?php echo $profesional->getIdProfesional(); ?>">
							<img src="../../imagenes/iconos/detalle.png" title="ver detalle">
						</a>
						<a href="modificar.php?id=<?php echo $profesional->getIdProfesional(); ?>">
							<img src="../../imagenes/iconos/update.png" title="actualizar">
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $profesional->getIdProfesional(); ?>">
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
		<img src="../../imagenes/iconos/add.png">Agregar Nuevo Profesional</a>
		<br><br>
		<a href="../especialidad/listado.php">
		<img src="../../imagenes/iconos/detalle.png">Ver especialidades</a>
	</div>


</body>
</html>