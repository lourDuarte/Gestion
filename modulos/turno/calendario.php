   <?php 

   //require_once '../../class/MySQL.php';
   require_once '../../menu.php';
  

   ?>


  
 
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />


<link href='../../static/fullCalendar/main.css' rel='stylesheet' />

<section id="main-content">
<section class="wrapper">
<script src='../../static/fullCalendar/main.js'></script>
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
</section>
</section>
</body>

</html>
