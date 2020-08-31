<?php

require_once '../../class/ObraSocial.php';

$id= $_GET['id'];

$obraSocial= ObraSocial::ObtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php require_once "../../menu.php"?>

	<br><br>
	<form name="frmDatos" method="POST" action="procesar/modificar.php">

	<caption>Actualizar obra Social</caption>
	<br><br>
		<input type="hidden" name="txtId" value="<?php echo $obraSocial->getIdObraSocial(); ?>">

		<label>Nombre:</label>
		<input type="text" name="txtNombre" value="<?php echo $obraSocial->getNombre(); ?>">
		<br><br>

		<label>Co Seguro:</label>
		<input type="text" name="txtCoSeguro" value="<?php echo $obraSocial->getCoSeguro(); ?>">
		<br><br>
		 
		
		 <input type="submit" name="btnGuardar" value="Actualizar">	
	</form>

</body>
</html>