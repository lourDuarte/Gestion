<?php
require_once '../../class/Paciente.php';

const SIN_ACCION = 0;
const PACIENTE_GUARDADO = 1;
const PACIENTE_MODIFICADO = 2;
const PACIENTE_ELIMINADO = 3;

if (isset($_GET['mensaje'])) {
	$mensaje = $_GET['mensaje'];
} else {
	$mensaje = SIN_ACCION;
}


$listaPacientes = Paciente::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Pacientes</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

		<?php if ($mensaje == PACIENTE_GUARDADO){ ?>
				<h3>Paciente Guardado con exito</h3>
				<br>
				<br>
		<?php }elseif ($mensaje == PACIENTE_MODIFICADO){ ?>
				<h3>Paciente Actualizado con exito</h3>
				<br>
				<br>
		<?php }elseif ($mensaje == PACIENTE_ELIMINADO){ ?>
				<h3>Paciente Actualizado con exito</h3>
				<br>
				<br> 
		<?php } ?>


	<table align="center">
		<caption> Listado Pacientes </caption>
		<tr>
			<thead>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Acciones</th>
			</thead>
		</tr>

		<?php foreach ($listaPacientes as $paciente): ?>
				<tr>
					<td> <?php echo $paciente->getNombre(); ?> </td>
					<td> <?php echo $paciente->getApellido(); ?> </td>
					<td>
						<a href="detalle.php?id= <?php echo $paciente->getIdPaciente();?>" >
							<img src="../../imagenes/iconos/detalle.png" title="ver detalle">
						</a>
						<a href="modificar.php?id=<?php echo $paciente->getIdPaciente(); ?>">
							<img src="../../imagenes/iconos/update.png" title="actualizar">
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $paciente->getIdPaciente(); ?>">
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
		<img src="../../imagenes/iconos/add.png">Agregar Nuevo Paciente</a>
	</div>


</body>
</html>










