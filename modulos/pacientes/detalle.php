<?php
require_once '../../class/Paciente.php';



$id = $_GET['id'];

$paciente= Paciente::obtenerPorId($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Paciente</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/table.css">
	<link rel="stylesheet" type="text/css" href="../../static/css/menu.css">
</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>

	<table align="center">
		<caption> Paciente </caption>
		<tr>
			<thead>
				<th>ID Paciente</th>
				<th>ID Persona</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Documento</th>
				<th>Descripcion</th>
				<th>Fecha Nacimiento</th>
				<th>Estado</th>
				<th>Domicilio</th>
				<th>Contacto</th>


			</thead>

		<tr>
			<td> <?php echo $paciente->getIdPaciente(); ?> </td>
			<td> <?php echo $paciente->getIdPersona(); ?> </td>
			<td> <?php echo $paciente->getNombre(); ?></td>
			<td> <?php echo $paciente->getApellido(); ?></td>
			<td> <?php echo $paciente->getNumeroDocumento(); ?></td>
			<td> <?php echo $paciente->getDescripcion(); ?></td>
			<td> <?php echo $paciente->getFechaNacimiento(); ?></td>
			<td> ACTIVO </td>
		<?php if (is_null($paciente->domicilio)){?>
				
			<td>	
			<a href="/programacion3/Gestion/modulos/domicilio/alta.php?idPersona=<?php echo $paciente->getIdPersona();?>;?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&modulo=pacientes">Agregar domicilio</a>
				
			</td>	
		<?php }else{ ?>
			<td>

			<a  href="/programacion3/Gestion/modulos/domicilio/modificar.php?idPersona=<?php echo $paciente->getIdPersona(); ?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&idDomicilio=<?php echo $paciente->domicilio->getIdDomicilio();?>&modulo=pacientes" title="modificar"><?php echo $paciente->domicilio; ?> </a>	

			</td>
		<?php } ?>
			<td>
				<?php foreach ($paciente->arrContactos as $contacto) : ?>				
					
					<?php echo $contacto; ?></a>

				<?php endforeach ?>
			</td>
				

		</tr>
	</table>
	<br><br>
<div align="left">
	
    <a href="/programacion3/Gestion/modulos/contacto/alta.php?idPersona=<?php echo $paciente->getIdPersona(); ?>&idLlamada=<?php echo $paciente->getIdPaciente(); ?>&modulo=pacientes">
        Agregar Contacto
    </a>




</div>

		

</body>
</html>