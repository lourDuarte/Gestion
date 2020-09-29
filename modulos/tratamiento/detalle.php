<?php

require_once '../../class/Tratamiento.php';

$id=$_GET['id'];

$tratamiento= Tratamiento::obtenerPorId($id)

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle Tratamiento</title>

</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> <?php echo $tratamiento?></h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
					<th>ID Tratamiento</th>
					<th>ID Tipo</th>
					<th>Observacion</th>
				   </tr>
				</thead>
				<tbody>
                  <tr>
			<td> <?php echo $tratamiento->getIdTratamiento(); ?> </td>
			<td> <?php echo $tratamiento->getTipo(); ?> </td>
			<td> <?php echo $tratamiento->getObservacion(); ?></td>
			</tbody>
              </table>

            </div>
          </div>
        </div>
      </section>
	</section> 

</body>
</html>
