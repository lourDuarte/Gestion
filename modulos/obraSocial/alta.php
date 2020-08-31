<!DOCTYPE html>
<html>
<head>
	<title>Nueva Obra Social</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php require_once "../../menu.php" ?>
	<br><br>
	<?php if (isset($_SESSION['mensaje_error'])): ?>

		<font color="red">

		<?php echo $_SESSION['mensaje_error']?>

		</font>

     <?php unset($_SESSION['mensaje_error']);?>
            
	<?php endif ?>
	<br>
		<form name="frmDatos" method="POST" action = "procesar/guardar.php">

		<caption>Nueva Obra Social</caption>
		<br><br>
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
