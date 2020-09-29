<?php
require_once '../../class/Perfil.php';

require_once '../../menu.php';

$listadoPerfiles=Perfil::obtenerTodos();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Modulos</title>
</head>
<body>
	<section id="main-content">
      <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Perfiles</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                <tr>
                	<th><i class="fa fa-bullhorn"></i>ID Perfil</th>
					<th><i class="fa fa-bullhorn"></i>Descripcion</th>
					<th><i class="fa fa-bullhorn"></i>Accion</th>
				</tr>
				</thead>
                <tbody>
                <?php foreach($listadoPerfiles as $perfil): ?>
                	<td> <?php echo $perfil->getIdPerfil(); ?> </td>
					<td> <?php echo $perfil->getDescripcion(); ?> </td>
					<td>
						<a href="detalle.php?id=<?php echo $perfil->getIdPerfil(); ?>" title="ver detalle">
                      	<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    	</a>
						<a href="modificar.php?id=<?php echo $perfil->getIdperfil(); ?>" title= "actualizar">
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
		<a href="alta.php"><h4><i class="fa fa-angle-right"></i>Nuevo perfil</h4></a>
		
	</div>
</section>

</section>



</body>
</html>