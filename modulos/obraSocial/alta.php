<!DOCTYPE html>
<html>
<head>
	<title>Nueva Obra Social</title>

</head>
<body>
	<?php require_once "../../menu.php" ?>
	<br><br>

	<br>
	<section id="main-content">
    <section class="wrapper">
    		<?php if (isset($_SESSION['mensaje_error'])): ?>

		<font color="red">

		<?php echo $_SESSION['mensaje_error']?>

		</font>

     <?php unset($_SESSION['mensaje_error']);?>
            
	<?php endif ?>
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Nueva Obra Social</h4>
       <div class="form-panel">
       <div class=" form">
       	<br>
		<form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action = "procesar/guardar.php">
			<div class="row mt">

	          <label class="col-lg-2 control-label">Nombre</label>
               <div class="col-lg-10">
				<input type="text" name="txtNombre" id="txtNombre" class="form-control">
				</div>
				</div>
			<div class="row mt">
			<label class="col-lg-2 control-label">Co Seguro:</label>
			<div class="col-lg-10">
			<input type="text" name="txtCoSeguro" class="form-control">
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
