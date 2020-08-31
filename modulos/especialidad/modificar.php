<?php

require_once "../../class/Especialidad.php";

$id=$_GET['id'];

$especialidad=Especialidad::obtenerPorId($id);


?>

<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Especialidad</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">

</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>
	<form name="frmDatos" method="POST" action="procesar/modificar.php">

	<caption>Actualizar Especialidad</caption>
	<br><br>
		<input type="hidden" name="txtId" value="<?php echo $especialidad->getIdEspecialidad(); ?>">

		<label>Tipo:</label>
		<input type="text" name="txtTipo" value="<?php echo $especialidad->getTipo(); ?>">
		<br><br>		 
		
		 <input type="submit" name="btnGuardar" value="Actualizar">	
	</form>

</body>
</html>