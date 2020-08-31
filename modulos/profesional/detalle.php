<?php
require_once '../../class/Profesional.php';


$id = $_GET['id'];

$profesional= Profesional::obtenerPorId($id);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Profesional</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Profesional </caption>
		<tr>
			<thead>
				<th>ID Profesional</th>
				<th>ID Persona</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Matricula</th>
				<th>Numero Documento</th>
				<th>Fecha Nacimiento</th>
				<th>Estado</th>

			</thead>

		<tr>
			<td> <?php echo $profesional->getIdProfesional(); ?> </td>
			<td> <?php echo $profesional->getIdPersona(); ?> </td>
			<td> <?php echo $profesional->getNombre(); ?></td>
			<td> <?php echo $profesional->getApellido(); ?></td>
			<td> <?php echo $profesional->getMatricula(); ?></td>
			<td> <?php echo $profesional->getNumeroDocumento(); ?></td>
			<td> <?php echo $profesional->getFechaNacimiento(); ?></td>
			<td> ACTIVO </td>
		</tr>
	</table>
	<br><br>

</div>
</body>