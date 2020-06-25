<?php

require_once '../../class/ObraSocial.php';

$listadoObraSocial = ObraSocial::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<table align="center">
		<caption> Listado Obra Sociales </caption>
		<tr>
			<thead>
				<th>Nombre</th>
				<th>Acciones</th>
			</thead>
		</tr>

		<?php foreach ($listadoObraSocial as $obraSocial): ?>
				<tr>
					<td> <?php echo $obraSocial->getNombre(); ?> </td>
					<td>
						<a href="detalle.php?id=<?php echo $obraSocial->getIdObraSocial(); ?>">
							<img src="../../imagenes/iconos/detalle.png" title="ver detalle">
						</a>
						<a href="modificar.php?id=<?php echo $obraSocial->getIdObraSocial(); ?>">
							<img src="../../imagenes/iconos/update.png" title="actualizar">
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $obraSocial->getIdObraSocial(); ?>">
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
		<img src="../../imagenes/iconos/add.png">Agregar Nueva Obra Social</a>
	</div>


</body>
</html>