<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Profesional</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>

		<caption> Nuevo Profesional</caption>

		<br><br>
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

			<label>Matricula:</label>
			<input type="text" name="txtMatricula">
		<br><br> 

		<input type="submit" name="btnGuardar" value="Guardar">		
	</form>

</body>
</html>
