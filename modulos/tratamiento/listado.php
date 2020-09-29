<?php 

require_once '../../class/Tratamiento.php';
require_once '../../menu.php';
 
 $listadoTratamiento= Tratamiento::obtenerTodos();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Tratamiento</title>
</head>
<body>
	<section id="main-content">
		<section class="wrapper">
 <h3><i class="fa fa-angle-right"></i> Listado Tratamiento</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                  	
                    <th><i class="fa fa-bullhorn"></i> Tipo </th>
                    <th><i class=" fa fa-edit"></i> Acciones</th>

                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listadoTratamiento as $tratamiento): ?>
                  <tr>

                    <td><?php echo $tratamiento->getTipo(); ?> </td>
                    <td>
                    <a href="detalle.php?id=<?php echo $tratamiento->getIdTratamiento(); ?>" title="ver detalle">
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    </a>
                    <a href="modificar.php?id=<?php echo $tratamiento->getIdTratamiento(); ?>" title= "actualizar">
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <a href="procesar/eliminar.php?id=<?php echo $tratamiento->getIdTratamiento(); ?>" title= "eliminar">
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </a>
                    </td>

                  </tr>
                 <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <br>
          <div>
      <a href="alta.php"><h4><i class="fa fa-angle-right"></i>
    Nuevo tratamiento</h4></a>
  </div>
    </section>

      </section>

      </section>

   

</body>
</html>