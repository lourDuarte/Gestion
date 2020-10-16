<?php
require_once '../../class/Paciente.php';


require_once '../../class/ObraSocial.php';

require_once '../../class/TipoDocumento.php';


$id = $_GET['id'];

$paciente= Paciente::obtenerPorId($id);

$listaObraSocial=ObraSocial::obtenerOsPorIdPaciente($id);

 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Paciente</title>

</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Detalle Paciente</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
			
					<th>ID Paciente</th>
					<th>ID Persona</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Tipo</th>
					<th>Documento</th>
					<th>Descripcion</th>
					<th>Fecha Nacimiento</th>
					<th>Estado</th>
					<th>Domicilio</th>
					<th>Contacto</th>
				</tr>
			</thead>
			<tbody>
                  <tr>

		
					<td> <?php echo $paciente->getIdPaciente(); ?> </td>
					<td> <?php echo $paciente->getIdPersona(); ?> </td>
					<td> <?php echo $paciente->getNombre(); ?></td>
					<td> <?php echo $paciente->getApellido(); ?></td>
					<td> <?php echo $paciente->getIdTipoDocumento()?></td>
					<td> <?php echo $paciente->getNumeroDocumento(); ?></td>
					<td> <?php echo $paciente->getDescripcion(); ?></td>
					<td> <?php echo $paciente->getFechaNacimiento(); ?></td>
					<td> ACTIVO </td>
		<?php if (is_null($paciente->domicilio)){?>
				
			<td>	
			<a href="/programacion3/Gestion/modulos/domicilio/alta.php?idPersona=<?php echo $paciente->getIdPersona();?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&modulo=pacientes">Agregar domicilio</a>
				
			</td>	
		<?php }else{ ?>
			<td>

			<a  href="/programacion3/Gestion/modulos/domicilio/modificar.php?idPersona=<?php echo $paciente->getIdPersona(); ?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&idDomicilio=<?php echo $paciente->domicilio->getIdDomicilio();?>&modulo=pacientes" title="modificar"><?php echo $paciente->domicilio;?></a>	

			</td>
		<?php } ?>
			<td>

		<?php foreach ($paciente->arrContactos as $contacto) : ?>
				<a href="/programacion3/Gestion/modulos/contacto/procesar/eliminar.php?idPersonaContacto=<?php echo $contacto->getIdPersonaContacto(); ?>" title="eliminar"><?php echo $contacto; ?></a>
	
    		</td>	
    	<?php endforeach ?>

    	
		</tr>
                

          </tbody>
              </table>
              <br>
          <h4><i class="fa fa-angle-right"></i> Obra Social:</h4>
              
              <table class = "table">
              	
              <tr>
              
				<th> 
				<?php foreach ($listaObraSocial as $obraSocial): ?>

					<?php

					$idObraSocial= $obraSocial->getIdObraSocial();

					?>

						<?php if($paciente->tieneObraSocial($idObraSocial)): ?>

							<?php echo  "$obraSocial -";?>
						
						<?php endif ?>
					
				<?php endforeach ?>


				 </th>
				</tr>
			</table>


            </div>
          </div>
        </div>
        <br>
        <div align="left">
	<a href="/programacion3/Gestion/modulos/contacto/alta.php?idPersona=<?php echo $paciente->getIdPersona(); ?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&modulo=pacientes"><h4><i class="fa fa-angle-right"></i>Agregar Contacto</h4></a>

</div>

      </section>




</section>

		

</body>
</html>