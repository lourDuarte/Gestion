<?php

require_once '../../class/Paciente.php';

$id= $_GET['id'];

$paciente= Paciente::ObtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Paciente</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>
	<form name="frmDatos" method="POST" action="procesar/modificar.php">

		<input type="hidden" name="txtId" value="<?php echo $paciente->getIdPaciente(); ?>">

		<label>Nombre:</label>
		<input type="text" name="txtNombre" value="<?php echo $paciente->getNombre() ?>">
		<br><br>

		<label>Apellido:</label>
		<input type="text" name="txtApellido" value="<?php echo $paciente->getApellido() ?>">
		<br><br>
		 
		 <label>Fecha Nacimiento:</label>
		 <input type="date" name="txtFechaNacimiento" value="<?php echo $paciente->getFechaNacimiento(); ?>">
		<br><br> 

		<label>Tipo Documento: </label>
		<select name="cboTipoDocumento">
			 <option value="0">Seleccionar</option>
		</select>
		<br><br> 

		<label>Numero Documento:</label>
		<input type="text" name="txtNumeroDocumento" value="<?php echo $paciente->getNumeroDocumento(); ?>">
		<br><br> 

		<label>Descripcion:</label>
		<input type="text" name="txtDescripcion" value="<?php echo $paciente->getDescripcion(); ?>">
		<br><br> 

		 <input type="submit" name="btnGuardar" value="Actualizar">	
	</form>

</body>
</html>