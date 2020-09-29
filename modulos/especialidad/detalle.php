<?php

require_once '../../class/Especialidad.php';
//require_once '../../class/TipoEspecialidad.php';

$id=$_GET['id'];

$especialidad=Especialidad::obtenerPorId($id);

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
		<h3> Detalle Especialidad</h3>
		<tr>
			<thead>
				<th>Id Especialidad</th>
				<th>Tipo</th>
			</thead>


			<tr>
				<td> <?php echo $especialidad->getIdEspecialidad(); ?></td>
				<td> <?php echo $especialidad->getTipo(); ?></td>	
			</tr>


	</table>

		