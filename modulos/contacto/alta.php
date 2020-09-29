<?


require_once '../../class/TipoContacto.php';

$idPersona = $_GET['idPersona'];
$idLlamada = $_GET['idLlamada'];
$moduloLlamada = $_GET['modulo'];


$listaTipoContactos = TipoContacto::ObtenerTodos();

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
		<form name="frmDatos" id="frmDatos" method="POST" action="procesar/guardar.php">

		    <input type="hidden" name="txtIdPersona" value='<?php echo $idPersona ?>'>
		    <input type="hidden" name="txtIdLlamada" value='<?php echo $idLlamada ?>'>
		    <input type="hidden" name="txtModulo" value='<?php echo $moduloLlamada ?>'>

			<label>valor:</label>
			<input type="text" name="txtValor">

			<br><br>
			<label>Tipo de Contacto:</label>
			<select name="cboTipoContacto" id="cboTipoContacto"> 
				<option value="0">Seleccionar</option>

				<?php foreach($listaTipoContactos as $tipoContacto): ?>

					<option value=<?php echo $tipoContacto->getIdTipoContacto();?> > <?php echo $tipoContacto ?>
						
					</option>

				<?php endforeach; ?>
			</select>
			<br><br>
		   	<input type="submit" value="Guardar"> 
		</form>
</body>
</html>