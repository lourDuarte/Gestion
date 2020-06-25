<!DOCTYPE html>
<html>
<head>
	<title>Nueva Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>
		<form name="frmDatos" method="POST" action = "procesar/guardar.php">

			<label>Nombre</label>
			<input type="text" name="txtNombre">
		<br><br>

			<label>Co Seguro:</label>
			<input type="text" name="txtCoSeguro">
		<br><br>

		<input type="submit" name="btnGuardar" value="Guardar">		
	</form>

</body>
</html>
