<?php

require_once '../../menu.php';
require_once '../../class/Paciente.php';

$listadoPaciente = Paciente::obtenerTodos();

require_once ('../../class/turno.php');
?>

<br><br>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src='../../static/fullCalendar/js/main.js'></script>
    <script src='../../static/fullCalendar/js/es.js'></script>

<link href='../../static/fullCalendar/main.css' rel='stylesheet' />
</head>
<body>
<br><br>
<section id="main-content">
  <section class="wrapper">

    
         <script>
  var id_profesional = <?php echo $_GET['idProfesional']; ?>;
  //alert(id_profesional);
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      eventClick: function(info,date) {
        var eventObj = info.event;

        //alert(eventObj.start);

        $('#id_turno').val(eventObj.title);

    
        $('#modalCalendar').modal('show');
        //alert('Click evento ' );
      },

      locale:'es',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '2020-10-13',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      // your event source
      eventSources: 
      [
        {
          url: '/programacion3/Gestion/modulos/turno/procesar/turnos_calendario.php',
          method: 'GET',
          extraParams: {
            idProfesional: id_profesional
          },
          failure: function() {
            alert('there was an error while fetching events!');
          },
           
          color: 'black',   // a non-ajax option
           // a non-ajax option
          

        }


    ]
    

    

    });

    calendar.render();
    
    
  });
</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
</head>

  <div id='calendar'></div>

    
</section>
</section>


<!-- Modal Turnos -->
<div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" >Asignar Turno</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Turno N°: <input type="text" id="id_turno" >
        <br><br>
        Paciente:
        <select    id="id_paciente" >
        <option value="0">Ver Pacientes</option>
    ...
  <?php foreach ($listadoPaciente as $paciente): ?>

          <option   value="<?php echo $paciente->getIdPaciente(); ?>">
              <?php echo $paciente; ?>
          </option>

        <?php endforeach ?>
      </select>

        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" onclick="asignarPaciente()">Guardar paciente</button>
      </div>
    </div>
  </div>
</div>
<script>

  function asignarPaciente(){
     //var idTurno = $('#id_turno').val();
     //alert(idTurno);
       $.ajax({
        type: 'GET',
        url : "/programacion3/Gestion/modulos/turno/procesar/guardar_paciente.php",
        data: { 

           'turno': $('#id_turno').val(),
           'paciente': $('#id_paciente').val()
        },
        success: function(data){
          
          calendar.refetchEvents();
        }


      
      })
      
      $('#modalCalendar').modal('toggle');
    
  }
  
</script>
</body>
</html>
