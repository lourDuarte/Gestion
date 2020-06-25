<?php
require_once '../../class/ObraSocial.php';

$id = $_GET['id'];

$obraSocial= ObraSocial::obtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Obra Social</caption>
		<tr>
			<thead>
				<th>ID Obra Social</th>
				<th>Nombre</th>
				<th>CO Seguro</th>

			</thead>

		<tr>
			<td> <?php echo $obraSocial->getIdObraSocial(); ?> </td>
			<td> <?php echo $obraSocial->getNombre(); ?></td>
			<td> <?php echo $obraSocial->getCoSeguro(); ?></td>
		</tr>
	</table>

</body>