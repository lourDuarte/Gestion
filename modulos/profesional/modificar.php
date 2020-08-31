<?php

require_once '../../class/Profesional.php';

$id= $_GET['id'];

$profesional= Profesional::ObtenerPorId($id);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Profesional</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>

	<?php
		require_once "../../menu.php";
	?>
	<br><br>

		<caption> Actualizar Profesional</caption>

		<br><br>
		<form name="frmDatos" method="POST" action = "procesar/modificar.php">

			<input type="hidden" name="txtId" value="<?php echo $profesional->getIdProfesional(); ?>">

			<label>Nombre</label>
			<input type="text" name="txtNombre" value="<?php echo $profesional->getNombre();?>">
		<br><br>

			<label>Apellido:</label>
			<input type="text" name="txtApellido" value="<?php echo $profesional->getApellido();?>">
		<br><br>

			<label>Fecha Nacimiento:</label>
			<input type="date" name="txtFechaNacimiento" value="<?php echo $profesional->getFechaNacimiento();?>">
		<br><br> 

			<label>Tipo Documento: </label>
			<select name="cboTipoDocumento">
				<option value="0">Seleccionar</option>
			</select>
		<br><br> 

			<label>Numero Documento:</label>
			<input type="text" name="txtNumeroDocumento" value="<?php echo $profesional->getNumeroDocumento();?>">
		<br><br> 

			<label>Matricula:</label>
			<input type="text" name="txtMatricula" value="<?php echo $profesional->getMatricula();?>">
		<br><br> 

		<input type="submit" name="btnGuardar" value="Actualizar">		
	</form>

</body>
</html>