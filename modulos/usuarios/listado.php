<?php

require_once '../../class/Usuario.php';


$listaUsuarios= Usuario::ObtenerTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Usuarios</title>

</head>
<body>
	<?php
		require_once "../../menu.php";
	?>
	<br><br>


	<section id="main-content">
		<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Listado Usuarios</h3>
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
                	<?php foreach ($listaUsuarios as $usuario): ?>
                <tr>

                    <td><?php echo $usuario->getNombre(); ?> </td>
                    <td> <?php echo $usuario->getApellido(); ?></td>
                    <td>
                    <a href="detalle.php?id=<?php echo $usuario->getIdUsuario(); ?>" title="ver detalle">
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    </a>
                    <a href="modificar.php?id=<?php echo $usuario->getIdUsuario(); ?>" title= "actualizar">
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <a href="procesar/eliminar.php?id=<?php echo $usuario->getIdUsuario(); ?>" title= "eliminar">
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
              <div align="left" >
                  <a href="alta.php"><h4><i class="fa fa-angle-right"></i>Nuevo Usuario</h4></a>

              </div>        	

      </section>
      

    </section>

</body>
</html>


   