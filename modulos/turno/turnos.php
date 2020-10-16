<?php
require_once('../../class/Turno.php');


    $id = $_GET['idProfesional'];



    $turno = new Turno();
    $result = $turno->obtenerPorIdProfesional($id);

    $listadoTurnos = []; 
        $x = 0;
        foreach($result as $item){
            $listadoTurnos[$x]['title'] = $item['id_turno'];
            $listadoTurnos[$x]['start'] = $item['fecha'].'T'.$item['hora'];
            $listadoTurnos[$x]['end'] = $item['fecha'].'T'.$item['hora'];
            $x += 1; 
        }

       echo json_encode($listadoTurnos);



?>

<br><br>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src='../../static/fullCalendar/main.js'></script>
<link href='../../static/fullCalendar/main.css' rel='stylesheet' />
</head>
<body>

    
         <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
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
      events: '/programacion3/gestion/modulos/turno/turnos.php',

      


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
    

</body>
</html>