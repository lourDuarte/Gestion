<?php


require_once '../../../class/MySQL.php';

$mysql = new MySQL();


 if (isset($_GET['turno']))
 {
     //$result = $turno->obtenerPorIdTurno($_GET['turno']);
    $sql = " UPDATE turno set id_paciente = ".$_GET['paciente']. " WHERE id_turno = ". $_GET['turno'];

    $mysql->actualizar($sql);
 }
 



?>

