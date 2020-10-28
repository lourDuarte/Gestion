<?

require_once '../../menu.php';

?>

<section id="main-content">
    <section class="wrapper">
      <div align="center">

            <?php if (isset($_SESSION['mensaje_error'])) : ?>

                <font color="red">
                    <h3><?php echo $_SESSION['mensaje_error'] ?></h3>
                </font>

                <br><br>

            <?php
                    unset($_SESSION['mensaje_error']);
                endif;
            ?>

         <div id="mensajeError"></div>
        </div>
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Nuevo Modulo</h4>
       <div class="form-panel">
       <div class=" form">
       	<br>
		<form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action = "procesar/guardar.php">
			<div class="row mt">
                  <label class="col-lg-2 control-label">Nombre</label>
                  <div class="col-lg-10">
					<input type="text" name="txtDescripcion" class="form-control">
					</div>
				</div>
				<div class="row mt">
                 	 <label class="col-lg-2 control-label">Directorio</label>
                 	<div class="col-lg-10">
					<input type="text" name="txtDirectorio" class="form-control">
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