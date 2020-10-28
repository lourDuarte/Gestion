
<?php


require_once '../../class/TipoDocumento.php';

require_once '../../class/Especialidad.php';

require_once '../../class/ObraSocial.php';

$listadoTipoDocumento = TipoDocumento::obtenerTodos();

$listaEspecialidad= Especialidad::ObtenerTodos();

$listaObraSocial = ObraSocial::obtenerTodos();



?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Profesional</title>

	<script type="text/javascript" src="../../satic/js/validacionProfesional.js"></script>
    <script type="text/javascript">

        function soloNumeros(e){
            var key = e.charCode;
             
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

        
         <br>

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
       <h4><i class="fa fa-angle-right"></i> Nuevo Profesional</h4>
       <br>
       <div class="form-panel">
       <div class=" form">
       	<br>
		<form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action = "procesar/guardar.php">

		<div class="row mt">
            <label class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
				<input type="text" name="txtNombre" class="form-control">
			</div>
		</div>
		<div class="row mt">
            <label class="col-lg-2 control-label">Apellido</label>
            <div class="col-lg-10">
				<input type="text" name="txtApellido" class="form-control">
			</div>
		</div>
			<div class="row mt">
            <label class="col-lg-2 control-label">Fecha Nacimiento</label>
             <div class="col-lg-10">
				<input type="date" name="txtFechaNacimiento" class="form-control">
			</div>
			</div> 

			<div class="row mt">
			<label class="col-lg-2 control-label">Tipo Documento: </label>
			<div class="col-lg-10">
			<select name="cboTipoDocumento" id="cboTipoDocumento">
			    <option value="0">Seleccionar</option>

				<?php foreach ($listadoTipoDocumento as $tipoDocumento): ?>

					<option value="<?php echo $tipoDocumento->getIdTipoDocumento(); ?>">
					    <?php echo $tipoDocumento; ?>
					</option>

				<?php endforeach ?>

			</select>
		</div>
			</div> 
		<div class="row mt">
            <label class="col-lg-2 control-label">Numero Documento</label>
            <div class="col-lg-10">
				<input type="text" name="txtNumeroDocumento" class="form-control" id="txtNumeroDocumento">
			</div>
		</div>
		<div class="row mt">
			<label class="col-lg-2 control-label">Matricula:</label>
			<div class="col-lg-10">
			<input type="text" name="txtMatricula" id="txtMatricula" onkeypress="return soloNumeros(event);" onpaste="return false" class="form-control">
		</div>
		</div>
        <div class="row mt">
             <label class="col-lg-2 control-label">Especialidad: </label>
              <div class="col-lg-10">
              <select name= "cboEspecialidad[]" multiple style="width: 150px; height: 150px;">
                  <?php foreach($listaEspecialidad as $especialidad): ?>
                    <option value="<?php echo $especialidad->getIdEspecialidad();?>"><?php echo $especialidad?></option>
                  <?php endforeach?>
                </select>
                </div>
              </div>

               <div class="row mt">
             <label class="col-lg-2 control-label">Obra Sociales admitidas: </label>
              <div class="col-lg-10">
              <select name= "cboObraSocial[]" multiple style="width: 150px; height: 150px;">
                  <?php foreach($listaObraSocial as $obraSocial): ?>
                    <option value="<?php echo $obraSocial->getIdObraSocial();?>"><?php echo $obraSocial?></option>
                  <?php endforeach?>
                </select>
                </div>
              </div>


		 <div align="left">    
             <div class="row mt">
                  <div class="col-lg-offset-2 col-lg-10">
                   <input type="submit" name="btnGuardar"value="Guardar" onclick="validarProfesional();">
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
