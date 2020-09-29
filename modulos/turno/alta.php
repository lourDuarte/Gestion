<?php

require_once '../../class/Profesional.php';
require_once '../../menu.php';
require_once '../../class/AgendaDia.php';
//require_once '../../class/EstadoAgenda.php';

$listaProfesional= Profesional::obtenerTodos();

$diaSemana = AgendaDia::obtenerTodos()

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nueva Agenda</title>
</head>
<body>

	<section id="main-content">
    	<section class="wrapper">
    <div class="row mt">

      <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> Nueva Agenda</h4>
       <br>
       <div class="form-panel">
       <div class=" form">
       	<br>
		<form class="cmxform form-horizontal style-form" id="commentForm" name="frmDatos" method="POST" action = "procesar/guardar.php">

		<div class="row mt">
			<label class="col-lg-2 control-label">Profesional </label>
			<div class="col-lg-10">
			<select name="cboProfesional" id="cboProfesional">
			    <option value="0">Seleccionar</option>

				<?php foreach ($listaProfesional as $profesional): ?>

					<option value="<?php echo $profesional->getIdProfesional(); ?>">
					    <?php echo $profesional; ?>
					</option>

				<?php endforeach ?>

			</select>
		</div>
			</div> 
		

		<div class="row mt">
            <label class="col-lg-2 control-label">Fecha inicio de atencion</label>
             <div class="col-lg-10">
				<input type="date" name="txtFechaInicio" class="form-control">
			</div>
			</div> 
			<div class="row mt">
            <label class="col-lg-2 control-label">Fecha final de atencion</label>
             <div class="col-lg-10">
				<input type="date" name="txtFechaFinal" class="form-control">
			</div>
			</div> 

		<div class="row mt">
            <label class="col-lg-2 control-label">Duracion por turno</label>
            <div class="col-lg-10">
				<input type="text" name="txtDuracion" class="form-control">
			</div>
		</div>

		<div class="row mt">
			<label class="col-lg-12 control-label">Hora Inicio de Atencion</label>
				<div class="col-lg-10">
				<input type="time" name="txtHoraInicio" class="form-control" id="txtHoraInicio">
			</div>
		</div>
		<div class="row mt">
			<label class="col-lg-12 control-label">Hora Final de Atencion</label>
				<div class="col-lg-10">
				<input type="time" name="txtHoraFinal" class="form-control" id="txtHoraFinal">
			</div>
		</div>
			<div class="row mt">
             <label class="col-lg-12 control-label">Dias Disponibles</label>
             <div class="col-lg-10">
             	<br>
                <input type="checkbox" name="txtLunes" >Lunes
             	<input type="checkbox" name="txtMartes" >Martes
             	<input type="checkbox" name="txtMiercoles" >Miercoles
             	<input type="checkbox" name="txtJueves" >Jueves
             	<input type="checkbox" name="txtViernes" >Viernes
             </div>
         </div>


		 <div align="left"> 

            <div class="row mt" align="left">
                  <div class="col-lg-offset-2 col-lg-10">
                   <input type="submit" name="btnGuardar"value="Guardar" >
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

