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
//$agenda->setGenerado(" ");


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
//$agenda->aplicarAgenda($agenda->getIdAgenda());
//highlight_string(var_export($agendaDia,true));
highlight_string(var_export($agenda,true));

header('location:../listado.php')



		


?>

 public function generar($idAgenda)
    {
    	$agenda = Agenda::obtenerAgendaPorId($idAgenda);
        
    	$agendaDia = AgendaDia::obtenerDiasPorIdAgenda($idAgenda);
        

        //echo $agenda->getIdProfesional();


    	date_default_timezone_set('America/Argentina/Buenos_Aires');
    	$fecha1 = new DateTime($agenda->getFechaHasta());
		$fecha2 = new DateTime($agenda->getFechaDesde());
        $fecha2->modify("- 1 day");
        //$fecha1->modify("-1 day");
		$diferencia = $fecha1->diff($fecha2);
		//echo $diferencia->days;

    	
    	
       


        $horaInicio = new DateTime($agenda->getHoraDesde());
        $horaFin    = new DateTime($agenda->getHoraHasta());
        $intervalo = $agenda->getDuracion();
        $horaFin->modify('-1 second'); 


        // Intervalos en minutos       
         $intervalo = new DateInterval('PT'.$intervalo.'M');

         // periodo entre las horas segun los intervalos
        $periodo   = new DatePeriod($horaInicio, $intervalo, $horaFin);        

        $turnos = 0;
        
        $dias = 0;
        $fechaActual = Date($agenda->getFechaDesde());
    	while ($dias < $diferencia->days) 
    	{

       
    		
            $fecha = date("Y-m-d",strtotime($fechaActual."+ $dias days")); 
            echo "<br>".$fecha;

            //echo "<br>". $fecha d-m-Y;
            $day_number =  date('N', strtotime($fecha));
    		
            //echo "<br>".$day_number;


    		//echo "<br>";
    		foreach ($agendaDia as $dia) 
            {
                
                
    		   switch ($day_number) 
    			{


    				case '1':
                        
    					if ($dia->getLunes() == 1)
                        {
                          //echo $fecha;
                            if ($fecha >= date("Y-m-d")){
                            foreach( $periodo as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                

                                    $horas+=1;
                                }
                            }
                            $totalTurnos=$turnos;
                        }
                        }
    				break;
    			
    				case '2':
    					if($dia->getMartes() == 1){
                           // echo $fecha;
    					foreach( $periodo as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                

                                    $horas+=1;
                                }
                            }
                            $totalTurnos=$turnos;
    					}
    				break;
    				case '3':
                        if($dia->getMiercoles() == 1){
    					foreach( $periodo as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                

                                    $horas+=1;
                                }
                            }
                            $totalTurnos=$turnos;
                        
    					}
    				break;
    				case '4':
    					if($dia->getJueves() == 1){
    					foreach( $periodo as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                

                                    $horas+=1;
                                }
                            }
                            $totalTurnos=$turnos;
    					}
    				break;
    				case '5':
    					if($dia->getViernes() == 1){
    					foreach( $periodo as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                

                                    $horas+=1;
                                }
                            }
                            $totalTurnos=$turnos;
    					}
    				break;
    			}        
            }
    		
    		
    		echo $dias+= 1;	
    	}
    }		