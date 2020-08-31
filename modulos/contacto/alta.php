<?




$idPersona = $_GET['idPersona'];
$idLlamada = $_GET['idLlamada'];
$moduloLlamada = $_GET['modulo'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Alta de Contacto</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>

	<?php require_once "../../menu.php"; ?>
	<br>
	<br>
		<h3>Contacto</h3>
		<br>
		<form name="frmDatos" method="POST" action="procesar/guardar.php">

		    <input type="hidden" name="txtIdPersona" value='<?php echo $idPersona ?>'>
		    <input type="hidden" name="txtIdLlamada" value='<?php echo $idLlamada ?>'>
		    <input type="hidden" name="txtModulo" value='<?php echo $moduloLlamada ?>'>

			<label>valor:</label>
			<input type="text" name="txtValor">

			<br><br>
			<label>descripcion:</label>
			<input type="text" name="txtDescripcion">

		</form>
</body>
</html>