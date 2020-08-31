
<?php

require_once "../../class/TipoDocumento.php";


$listadoDocumento= TipoDocumento::obtenerTodos();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Paciente</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
	<script type="text/javascript" src="../../satic/js/validacion.js"></script>
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>
	        <div align="center">

            <?php if (isset($_SESSION['mensaje_error'])) : ?>

                <font color="red">
                    <?php echo $_SESSION['mensaje_error'] ?>
                </font>

                <br><br>

            <?php
                   unset($_SESSION['mensaje_error']);
                endif;
            ?>

            <div id="mensajeError"></div>
		<form name="frmDatos" method="POST" action = "procesar/guardar.php">

		<h2 align="center">Agregar Nuevo Paciente </h2>
		<br><br>
			<label>Nombre</label>
			<input type="text" name="txtNombre" id="txtNombre">
		<br><br>

			<label>Apellido:</label>
			<input type="text" name="txtApellido" id="txtApellido">
		<br><br>

			<label>Fecha Nacimiento:</label>
			<input type="date" name="txtFechaNacimiento">
		<br><br> 

			<label>Tipo Documento: </label>
			<select name="cboTipoDocumento">
				<option value="0">Seleccionar</option>
				<?php foreach ($listadoDocumento as $tipoDocumento): ?>
					<option value=<?php echo $tipoDocumento->getIdTipoDocumento();?>><?php echo $tipoDocumento; ?> 
				</option>
				
				<?php endforeach ?>
			</select>
		<br><br> 

			<label>Numero Documento:</label>
			<input type="text" name="txtNumeroDocumento">
		<br><br> 

			<label>Descripcion:</label>
			<input class="descripcion" type="text" name="txtDescripcion">
		<br><br> 

		<input type="submit" name="btnGuardar" value="Guardar" align="center" onclick="validar();">
	</form>
	<br><br>



</body>
</html>
