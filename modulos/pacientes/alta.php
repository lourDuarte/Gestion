<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Paciente</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>
		<form name="frmDatos" method="POST" action = "procesar/guardar.php">

			<label>Nombre</label>
			<input type="text" name="txtNombre">
		<br><br>

			<label>Apellido:</label>
			<input type="text" name="txtApellido">
		<br><br>

			<label>Fecha Nacimiento:</label>
			<input type="date" name="txtFechaNacimiento">
		<br><br> 

			<label>Tipo Documento: </label>
			<select name="cboTipoDocumento">
				<option value="0">Seleccionar</option>
			</select>
		<br><br> 

			<label>Numero Documento:</label>
			<input type="text" name="txtNumeroDocumento">
		<br><br> 

			<label>Descripcion:</label>
			<input class="descripcion" type="text" name="txtDescripcion">
		<br><br> 

		<input type="submit" name="btnGuardar" value="Guardar">		
	</form>

</body>
</html>
