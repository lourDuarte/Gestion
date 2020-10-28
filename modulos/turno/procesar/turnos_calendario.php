<?php
require_once('../../../class/Turno.php');
require_once('../../../class/MySQL.php');

//$id = $_GET['idProfesional'];


$turno = new Turno();
$result = $turno->obtenerPorIdProfesional($_GET['idProfesional']);


$listadoTurnos = []; 
    $x = 0;
    foreach($result as $item){
        $listadoTurnos[$x]['title'] = $item['id_turno'];
        $listadoTurnos[$x]['description'] = $item['id_paciente'];
        $listadoTurnos[$x]['start'] = $item['fecha'].'T'.$item['hora'];
        $listadoTurnos[$x]['end'] = $item['fecha'].'T'.$item['hora'];
        $x += 1; 
    }

   echo json_encode($listadoTurnos);




   
   
?>


