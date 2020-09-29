<?php

require_once '../../class/Modulo.php';
require_once '../../menu.php';

$listadoModulos= Modulo::obtenerTodos();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Modulos</title>
</head>
<body>
	<section id="main-content">
      <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Modulos</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                <tr>
					<th><i class="fa fa-bullhorn"></i>ID Modulo</th>
					<th><i class="fa fa-bullhorn"></i>Nombre</th>
					<th><i class="fa fa-bullhorn"></i>Directorio</th>
					<th><i class="fa fa-bullhorn"></i>Acciones</th>
				</tr>
				</thead>
                <tbody>
                <?php foreach($listadoModulos as $modulo): ?>
                	<td> <?php echo $modulo->getIdModulo(); ?> </td>
					<td> <?php echo $modulo->getDescripcion(); ?> </td>
					<td> <?php echo $modulo->getDirectorio();?></td>
					<td>
						<a href="modificar.php?id=<?php echo $modulo->getIdModulo(); ?>" title= "actualizar">
							<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
						</a>
						
					</td>
				</tr>

		<?php endforeach ?>
	</tbody>
</table>
</div>
</div>
</div>
<br>
	<div align="left">
		<a href="alta.php"><h4><i class="fa fa-angle-right"></i>Nuevo modulo</h4></a>
		
	</div>
</section>

</section>



</body>
</html>