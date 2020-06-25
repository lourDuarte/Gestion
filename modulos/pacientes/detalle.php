<?php
require_once '../../class/Paciente.php';



$id = $_GET['id'];

$paciente= Paciente::obtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Paciente</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

	<table align="center">
		<caption> Paciente </caption>
		<tr>
			<thead>
				<th>ID Paciente</th>
				<th>ID Persona</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Numero Documento</th>
				<th>Descripcion</th>
				<th>Fecha Nacimiento</th>
				<th>Estado</th>

			</thead>

		<tr>
			<td> <?php echo $paciente->getIdPaciente(); ?> </td>
			<td> <?php echo $paciente->getIdPersona(); ?> </td>
			<td> <?php echo $paciente->getNombre(); ?></td>
			<td> <?php echo $paciente->getApellido(); ?></td>
			<td><?php echo $paciente->getNumeroDocumento(); ?></td>
			<td> <?php echo $paciente->getDescripcion(); ?></td>
			<td> <?php echo $paciente->getFechaNacimiento(); ?></td>
			<td> ACTIVO </td>
		</tr>
	</table>

</body>