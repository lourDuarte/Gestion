
<?php


require_once '../../class/TipoDocumento.php';

$listadoTipoDocumento = TipoDocumento::obtenerTodos();



?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Profesional</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/form.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">

	<script type="text/javascript" src="../../satic/js/validacion.js"></script>
    <script type="text/javascript">

        function soloNumeros(e){
            var key = e.charCode;
            console.log(key); 
            if(key >= 48 && key <= 57){ //se utiliza codigo ASCII
                 return key;
            }else{
               	alert("Solo se permite ingreso de numeros")
                return false;
            }
        }
    </script>


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

		<caption> Nuevo Profesional</caption>

		<br><br>
		<form name="frmDatos" id="frmDatos" method="POST" action = "procesar/guardar.php">

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

				<?php foreach ($listadoTipoDocumento as $tipoDocumento): ?>

					<option value="<?php echo $tipoDocumento->getIdTipoDocumento(); ?>">
					    <?php echo $tipoDocumento; ?>
					</option>

				<?php endforeach ?>

			</select>
		<br><br> 

			<label>Numero Documento:</label>
			<input type="text" name="txtNumeroDocumento">
		<br><br> 

			<label>Matricula:</label>
			<input type="text" name="txtMatricula" id="txtMatricula" onkeypress="return soloNumeros(event);" onpaste="return false">
		<br><br> 

		<input type="submit" name="btnGuardar" value="Guardar" onclick="validar();">		
	</form>

</body>
</html>
