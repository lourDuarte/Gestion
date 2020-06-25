<?php

require_once '../../class/Usuario.php';

$id= $_GET['id'];

$usuario= Usuario::ObtenerPorId($id);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>

		<caption> Actualizar Usuario</caption>

		<br><br>
		<form name="frmDatos" method="POST" action = "procesar/modificar.php">

			<input type="hidden" name="txtId" value="<?php echo $usuario->getIdUsuario(); ?>">

			<label>Nombre</label>
			<input type="text" name="txtNombre" value="<?php echo $usuario->getNombre();?>">
		<br><br>

			<label>Apellido:</label>
			<input type="text" name="txtApellido" value="<?php echo  $usuario->getApellido();?>">
		<br><br>

			<label>Username</label>
			<input type="text" name="txtUsername" value="<?php echo $usuario->getUsername();?>">
		<br><br>

			<label>Password</label>
			<input type="text" name="txtPassword" value="<?php echo $usuario->getPassword();?>">
		<br><br>

			<label>Fecha Nacimiento:</label>
			<input type="date" name="txtFechaNacimiento" value="<?php echo  $usuario->getFechaNacimiento();?>">
		<br><br> 

			<label>Tipo Documento: </label>
			<select name="cboTipoDocumento">
				<option value="0">Seleccionar</option>
			</select>
		<br><br> 

			<label>Numero Documento:</label>
			<input type="text" name="txtNumeroDocumento" value="<?php echo  $usuario->getNumeroDocumento();?>">
		<br><br> 


		<input type="submit" name="btnGuardar" value="Actualizar">		
	</form>

</body>
</html>