<?php

require_once '../../../class/Agenda.php';
require_once '../../../class/AgendaDia.php';


$profesional= $_POST['cboProfesional'];
$horaDesde = $_POST['txtHoraInicio'];
$horaHasta = $_POST['txtHoraFinal'];
$fechaInicio = $_POST['txtFechaInicio'];
$fechaFinal = $_POST ['txtFechaFinal'];
$duracion = $_POST['txtDuracion'];


$agenda = new Agenda();
$agenda->setIdProfesional($profesional);
$agenda->setHoraDesde($horaDesde);
$agenda->setHoraHasta($horaHasta);
$agenda->setFechaDesde($fechaInicio);
$agenda->setFechaHasta($fechaFinal);
$agenda->setDuracion($duracion);


$agenda->guardar();


//highlight_string(var_export($agenda,true));


$lunes= $_POST['txtLunes'];
$martes=$_POST['txtMartes'];
$miercoles =  $_POST['txtMiercoles'];
$jueves = $_POST['txtJueves'];
$viernes = $_POST['txtViernes'];

if (isset($lunes)){
	$lunes = 1;
}else{
	$lunes = 0;
}

if (isset($martes)){
	$martes = 1;
}else{
	$martes = 0;
}

if (isset($miercoles)){
	$miercoles = 1;
}else{
	$miercoles = 0;
}

if (isset($jueves)){
	$jueves = 1;
}else{
	$jueves = 0;
}

if (isset($viernes)){
	$viernes = 1;
}else{
	$viernes = 0;
}


	$agendaDia= new AgendaDia();
	$agendaDia->setIdAgenda($agenda->getIdAgenda());
	$agendaDia->setLunes($lunes);
	$agendaDia->setMartes($martes);
	$agendaDia->setMiercoles($miercoles);
	$agendaDia->setJueves($jueves);
	$agendaDia->setViernes($viernes);



$agendaDia->guardar();
//highlight_string(var_export($agendaDia,true));


header('location:../listado.php')





?>