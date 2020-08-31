<?php

require_once '../../class/Profesional.php';
require_once '../../class/Especialidad.php';

$id=$_GET['id'];

$especialidad= Especialidad::obtenerPorId($id);
$profesionales=Profesional::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Especialidad</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Profesionales con atencion en <?php echo $especialidad->getTipo(); ?> </caption>
		<tr>
			<thead>
				<th>Profesional</th>
				<th>Estado</th>
			</thead>
		<?php
			foreach ($profesionales as $profesional): ?>
			<tr>
				<td> <?php echo $profesional->getNombre()." ". $profesional->getApellido(); ?></td>
				<td> <?php echo $profesional->getEstado(); ?></td>	
			</tr>
		<?php endforeach ?>

	</table>

		