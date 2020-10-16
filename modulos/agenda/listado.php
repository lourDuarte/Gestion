<?php

require_once '../../class/Agenda.php';
require_once '../../class/Profesional.php';
require_once '../../class/AgendaDia.php';
require_once '../../menu.php';


$listadoAgenda = Agenda::obtenerTodos();

$listaProfesionales=Profesional::obtenerTodos();

$listaDias= AgendaDia::obtenerTodos()




?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado Agendas</title>





</head>
<body>
	<section id="main-content">
		<section class="wrapper">
 <h3><i class="fa fa-address-book-o"></i> Agendas</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">

              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                  	
                    <th>Profesional</th>
                    <th>Fechas Disponibles</th>
                    <th>Horario de Atencion</th>
                    <th>Duracion por turno</th>
                   <th>Generador</th>
                    

                    <th><i class=" fa fa-edit"></i> Acciones</th>


                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listadoAgenda as $agenda): ?>


                  <tr>

                    
    
                      <?php 
                      foreach ($listaProfesionales as $profesionales):
                        $profesionaId = ' ';
                       
                        if ($agenda->getIdProfesional() == $profesionales->getIdProfesional()): 
                           $profesionaId = $profesionales->getIdProfesional();
                           $agendaId = $agenda->getIdAgenda();
                            $profesional = Profesional::obtenerPorId($profesionaId)
                            
                    
                      ?>

                    <td> <?php echo $profesional?></td>
                    <td> <?php
                     echo "Desde: "." ". $agenda->getFechaDesde(). "<br>". "Hasta:". " ".  $agenda->getFechaHasta() ?>
                    </td>
                    <td> <?php
                     echo "Desde: "." ". $agenda->getHoraDesde(). "<br>". "Hasta:". " ".  $agenda->getHoraHasta() ?>

                    </td>
                    
                    <td><?php echo $agenda->getDuracion(). " ". "minutos"?></td>

                   
                      
                  
                 
                    <td><?php echo $agenda->getGenerado(); ?></td>

                  
                    <td>
                    <?if ($agenda->getGenerado() != 1):?>
                        <a href="procesar/generarTurno.php?idAgenda=<?php echo $agenda->getIdAgenda(); ?>"><button class="btn btn-warning btn-xs"><i class="fa fa-calendar-plus-o"></i></button><em><?php echo " ". "Generar turno"?></em>
                        </a>
                      <?endif?>
                    <?php endif?>
                <?php endforeach?>
                    <br><br>
                    <a href="detalle.php?idAgenda=<?php echo $agenda->getIdAgenda(); ?>&idProfesional=<?php echo $agenda->getIdProfesional();?>" title="ver dias de atencion">
                      <button  class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
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
      <a href="alta.php"><h4><i class="fa fa-plus"></i>
    Nueva Agenda</h4></a>
  </div>





        
      </div>
    </div>
  </div>
</div>





      </section>

      </section>



</body>
</html>


