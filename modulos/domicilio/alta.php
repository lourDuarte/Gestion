<?php



$idPersona = $_GET['idPersona'];
$idLlamada = $_GET['idLlamada'];
$moduloLlamada = $_GET['modulo'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alta de Domicilio</title>


</head>
<body>

	<?php require_once "../../menu.php"; ?>
	<br>
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Domicilio</h4>
       <div class="form-panel">
       <div class=" form">
		<form name="frmDatos" method="POST" action="procesar/guardar.php">

		    <input type="hidden" name="txtIdPersona" value='<?php echo $idPersona ?>'>
		    <input type="hidden" name="txtIdLlamada" value='<?php echo $idLlamada ?>'>
		    <input type="hidden" name="txtModulo" value='<?php echo $moduloLlamada ?>'>

		    <div class="row mt">
	        <label class="col-lg-2 control-label">Calle:</label>
	        <div class="col-lg-10">
		    <input type="text" name="txtCalle" class="form-control">
		    </div>
		</div>
			<div class="row mt">
		    	<label  class="col-lg-2 control-label">Altura:</label>
		    <div class="col-lg-10">
		    <input type="number" name="txtAltura" class="form-control">
		    </div>
		</div>

			<div class="row mt">
		    <label class="col-lg-2 control-label">Piso:</label>
		    <div class="col-lg-10">
		    <input type="text" name="txtPiso" class="form-control">
			</div>
			</div> 
			<div class="row mt">
		    <label class="col-lg-2 control-label">Manzana:</label>
		    <div class="col-lg-10">
		    <input type="text" name="txtManzana" class="form-control">
			</div>
		</div>
		</div>
			        <div align="left">
                 
                  <div class="row mt">
                  <div class="col-lg-offset-2 col-lg-10">
                   <input type="submit" name="btnGuardar" value="Guardar">
                   </div>
                   </div>
              	</div>

		</form>
	</div>
</div>
</div>
</div>
</section>
</section>

</body>
</html>