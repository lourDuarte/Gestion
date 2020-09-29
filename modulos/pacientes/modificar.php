<?php

require_once '../../class/Paciente.php';
require_once "../../class/TipoDocumento.php";
require_once '../../class/ObraSocial.php';


$listadoDocumento= TipoDocumento::obtenerTodos();
$listaObraSocial=ObraSocial::obtenerTodos();


$id= $_GET['id'];

$paciente= Paciente::ObtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Paciente</title>

</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

	<section id="main-content">
    <section class="wrapper">
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Actualizar Paciente</h4>
       <div class="form-panel">
       <div class=" form">
       	<br>
			<form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action="procesar/modificar.php">
			<input type="hidden" name="txtId" value="<?php echo $paciente->getIdPaciente(); ?>">
			<div class="row mt">
                  <label class="col-lg-2 control-label">Nombre</label>
                  <div class="col-lg-10">
                    <input type="text" name="txtNombre" value="<?php echo $paciente->getNombre() ?>" class="form-control">
                    
                  </div>
                </div>
            <div class="row mt">
                  <label class="col-lg-2 control-label">Apellido</label>
                  <div class="col-lg-10">
                    <input type="text" name="txtApellido" value="<?php echo $paciente->getApellido() ?>" class="form-control">
                    
                  </div>
                </div>
			<div class="row mt">
              <label class="col-lg-2 control-label">Fecha Nacimiento</label>
              <div class="col-lg-10">
              <input type="date" name="txtFechaNacimiento" value="<?php echo $paciente->getFechaNacimiento(); ?>">
              </div>
          </div>
          <div class="row mt">
          <label class="col-lg-2 control-label">Tipo Documento: </label>
          <div class="col-lg-10">
		<select name="cboTipoDocumento" id="cboTipoDocumento">
			<option value="0">Seleccionar</option>
				<?php foreach ($listadoDocumento as $tipoDocumento): ?>
					<option value=<?php echo $tipoDocumento->getIdTipoDocumento();?>><?php echo $tipoDocumento; ?> 
				</option>
				
				<?php endforeach ?>
			
		</select>
		</div>
		</div>
		<div class="row mt">
                  <label class="col-lg-2 control-label">Numero Documento</label>
                  <div class="col-lg-10">
                    <input type="text" name="txtNumeroDocumento" value="<?php echo $paciente->getNumeroDocumento(); ?>"class="form-control">
                   
                  </div>
                </div>
        		<div class="row mt">
                  <label class="col-lg-2 control-label">Descripcion</label>
                  <div class="col-lg-10">
                    <input type="text" name="txtDescripcion" value="<?php echo $paciente->getDescripcion();?>" class="form-control">
                  </div>
              </div>
              <div class="row mt">
                  <label class="col-lg-2 control-label">Obra Social: </label>
                  
                  <select name="cboObraSocial[]" multiple style="width: 150px; height: 150px;">

             <?php foreach ($listaObraSocial as $obraSocial) :?>

              <?php

              $selected = '';
              $idObraSocial = $obraSocial->getIdObraSocial();

              if ($paciente->tieneObraSocial($idObraSocial)) {
                $selected = "SELECTED";
              }

              ?>

              <option value="<?php echo $obraSocial->getIdObraSocial(); ?>" <?php echo $selected ?> >
                <?php echo $obraSocial ?>
              </option>

             <?php endforeach ?>

        </select>
    </div>

                 <div align="left">
  
                  <div class="row mt">
                  <div class="col-lg-offset-2 col-lg-10">
                   <input type="submit" name="btnGuardar" value="Actualizar">
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

