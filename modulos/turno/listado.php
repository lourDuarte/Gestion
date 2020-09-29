<?php

require_once '../../class/Agenda.php';
//require_once '../../class/Profesional.php';
require_once '../../menu.php';


$listadoAgenda = Agenda::obtenerTodos();


//$profesional = obtenerPorId($agenda->getIdProfesional());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Agendas</title>
</head>
<body>
	<section id="main-content">
		<section class="wrapper">
 <h3><i class="fa fa-angle-right"></i> Agendas</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                  	<th><i class="fa fa-edit"></i>Agenda</th>
                    <th><i class=" fa fa-edit"></i> Acciones</th>


                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listadoAgenda as $agenda): ?>
                  <tr>

                    <td><?php echo $agenda->getIdAgenda(); ?> </td>
                    <td>
                    
                    <a href="detalle.php?idAgenda=<?php echo $agenda->getIdAgenda(); ?>&idProfesional=<?php echo $agenda->getIdProfesional();?>" title="ver detalle">
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    </a>
                    <a href="modificar.php?idAgenda=<?php echo $agenda->getIdAgenda(); ?>&idProfesional=<?php echo $agenda->getIdProfesional();?>" title= "actualizar">
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <a href="procesar/eliminar.php?id=<?php echo $agenda->getIdAgenda(); ?>" title= "eliminar">
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
          <div>
      <a href="alta.php"><h4><i class="fa fa-angle-right"></i>
    Nueva Agenda</h4></a>
  </div>

      </section>

      </section>

   

</body>
</html>