<!DOCTYPE html>
<html>
<head>
	<title>Nueva Especialidad</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php 
		require_once "../../menu.php";
	?>
	<br><br>
		<form name="frmDatos" method="POST" action = "procesar/guardar.php">

		<caption>Agregar Nueva Especialidad </caption>
		<br><br>
			<label>Tipo</label>
			<input type="text" name="txtTipo">
		<br><br>
		<input type="submit" name="btnGuardar" value="Guardar">		
	</form>
</body>