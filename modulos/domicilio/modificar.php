<?php

require_once '../../class/Domicilio.php';

$idDomicilio = $_GET['idDomicilio'];
$idPersona = $_GET['idPersona'];
$idLlamada = $_GET['idLlamada'];
$moduloLlamada = $_GET['modulo'];

$domicilio= Domicilio::obtenerPorIdPersona($idPersona);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alta de Domicilio</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
</head>
<body>

	<?php require_once "../../menu.php"; ?>
	<br>
	<br>
		<h3>Actualizar Domicilio</h3>
		<br>
		<form name="frmDatos" method="POST" action="procesar/modificar.php">
			<input type="hidden" name="txtDomicilio" value='<?php echo $idDomicilio; ?>'>
		    <input type="hidden" name="txtIdPersona" value='<?php echo $idPersona; ?>'>
		    <input type="hidden" name="txtIdLlamada" value='<?php echo $idLlamada;?>'>
		    <input type="hidden" name="txtModulo" value='<?php echo $moduloLlamada; ?>'>

	        <label>Calle:</label>
		    <input type="text" name="txtCalle" value="<?php echo $domicilio->getCalle();?>">
		    <br><br> 

		    <label>Altura:</label>
		    <input type="number" name="txtAltura" value="<?php echo $domicilio->getAltura();?>">
		    <br><br>

		    <label>Piso:</label>
		    <input type="text" name="txtPiso" value="<?php echo $domicilio->getPiso();?>">
			<br><br>

		    <label>Manzana:</label>
		    <input type="text" name="txtManzana" value="<?php echo $domicilio->getManzana();?>">
			<br><br> 

		    <input type="submit" name="btnGuardar" value="Guardar">			

		</form>

</body>
</html>