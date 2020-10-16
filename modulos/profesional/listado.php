<?php


require_once '../../class/Profesional.php';
require_once '../../menu.php';
const SIN_ACCION = 0;
const PROFESIONAL_GUARDADO = 1;
const PROFESIONAL_MODIFICADO = 2;
const PROFESIONAL_ELIMINADO = 3;

if (isset($_GET['mensaje'])) {
	$mensaje = $_GET['mensaje'];
} else {
	$mensaje = SIN_ACCION;
}


$listadoProfesionales = Profesional::obtenerTodos();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section id="main-content">
		<section class="wrapper">


		<?php if ($mensaje == PROFESIONAL_GUARDADO){ ?>
				<h3>Profesional Guardado con exito</h3>
				<br>
		<?php }elseif ($mensaje == PROFESIONAL_MODIFICADO){ ?>
				<h3>Profesional Actualizado con exito</h3>
				<br>
		<?php }elseif ($mensaje == PROFESIONAL_ELIMINADO){?>
				<h3>Profesional Eliminado</h3>
		<?php } ?>

      
        <h3><i class="fa fa-angle-right"></i> Listado Profesionales</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Nombre</th>
                    <th><i class="fa fa-bookmark"></i> Apellido</th>
                    <th><i class=" fa fa-edit"></i> Acciones</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listadoProfesionales as $profesional): ?>
                  <tr>

                    <td><?php echo $profesional->getNombre(); ?> </td>
                    <td> <?php echo $profesional->getApellido(); ?></td>
                    <td>
                    <a href="detalle.php?id=<?php echo $profesional->getIdProfesional(); ?>" title="ver detalle">
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    </a>
                    <a href="modificar.php?id=<?php echo $profesional->getIdProfesional(); ?>" title= "actualizar">
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <a href="procesar/eliminar.php?id=<?php echo $profesional->getIdProfesional(); ?>" title= "eliminar">
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
                  <div >
      <a href="alta.php"><h4><i class="fa fa-angle-right"></i>
    Agregar nuevo profesional</h4></a>
    
  


      </section>

    </section>

   

</body>
</html>