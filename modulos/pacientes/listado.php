
<?php
require_once '../../class/Paciente.php';

const SIN_ACCION = 0;
const PACIENTE_GUARDADO = 1;
const PACIENTE_MODIFICADO = 2;
const PACIENTE_ELIMINADO = 3;

if (isset($_GET['mensaje'])) {
	$mensaje = $_GET['mensaje'];
} else {
	$mensaje = SIN_ACCION;
}


$listaPacientes = Paciente::obtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Pacientes</title>
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<section id="main-content">
      <section class="wrapper">

		<?php if ($mensaje == PACIENTE_GUARDADO){ ?>
				<h3 >Paciente Guardado con exito</h3>
				<br>
		<?php }elseif ($mensaje == PACIENTE_MODIFICADO){ ?>
				<h3 >Paciente Actualizado con exito</h3>
				<br>
		<?php }elseif ($mensaje == PACIENTE_ELIMINADO){ ?>
				<h3>Paciente Actualizado con exito</h3> 
		<?php } ?>
        <h3><i class="fa fa-angle-right"></i> Listado Pacientes</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                <tr>
					<th><i class="fa fa-bullhorn"></i>Nombre</th>
					<th><i class="fa fa-bullhorn"></i>Apellido</th>
					<th><i class="fa fa-bullhorn"></i>Acciones</th>
				</tr>
				</thead>
                <tbody>

		<?php foreach ($listaPacientes as $paciente): ?>
				<tr>
					<td> <?php echo $paciente->getNombre(); ?> </td>
					<td> <?php echo $paciente->getApellido(); ?> </td>
					<td>
						<a href="detalle.php?id=<?php echo $paciente->getIdPaciente();?>" title="ver detalle">
							<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
						</a>
						<a href="modificar.php?id=<?php echo $paciente->getIdPaciente(); ?>" title= "actualizar">
							<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
						</a>
						<a href="procesar/eliminar.php?id=<?php echo $paciente->getIdPaciente(); ?>" title="eliminar">
							<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
						</a>
					</td>
				</tr>

		<?php endforeach ?>
		</table>
	</tbody>
</table>
</div>
</div>
</div>
	<div align="left">
		<br>
		<a href="alta.php"><h4><i class="fa fa-angle-right"></i>
		Agregar Nuevo Paciente</h4></a>

	</div>

</section>
</section>



</body>
</html>










