<?php

require_once '../../class/ObraSocial.php';

CONST SIN_ACCION = 0;
CONST OBRA_SOCIAL_GUARDADA = 1;
CONST OBRA_SOCIAL_ACTUALIZADA = 2;
CONST OBRA_SOCIAL_ELIMNADA = 3;

if (isset($_GET['mensaje'])){
	$mensaje=$_GET['mensaje'];
}else {
	$mensaje = SIN_ACCION;
} 


$listadoObraSocial = ObraSocial::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";

	?>
	<br><br>

	<?php if ($mensaje == OBRA_SOCIAL_GUARDADA){ ?>
		  <h3>Obra Social Guardada con Exito</h3>
		  <br><br>
	<?php }elseif ($mensaje == OBRA_SOCIAL_ACTUALIZADA){ ?>
		  <h3>Obra Social Actualizada con Exito</h3>
		  <br><br>
	<?php }elseif ($mensaje == OBRA_SOCIAL_ELIMNADA){ ?>
		  <h3>Obra Social eliminada</h3>
		  <br><br>
	<?php } ?>


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