<?php

require_once 'MySQL.php';
require_once 'Agenda.php';
require_once 'AgendaDia.php';

class Turno
{
	private $_idTurno;
	//private $_idPaciente;
	private $_idProfesional;
	private $_fecha;
	private $_hora;
	//private $_fechaHoraCreacion;
    //private $_generador;

    /**
     * @return mixed
     */
    public function getIdTurno()
    {
        return $this->_idTurno;
    }

    /**
     * @param mixed $_idTurno
     *
     * @return self
     */
    public function setIdTurno($_idTurno)
    {
        $this->_idTurno = $_idTurno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPaciente()
    {
        return $this->_idPaciente;
    }

    /**
     * @param mixed $_idPaciente
     *
     * @return self
     */
    public function setIdPaciente($_idPaciente)
    {
        $this->_idPaciente = $_idPaciente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdProfesional()
    {
        return $this->_idProfesional;
    }

    /**
     * @param mixed $_idProfesional
     *
     * @return self
     */
    public function setIdProfesional($_idProfesional)
    {
        $this->_idProfesional = $_idProfesional;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->_fecha;
    }

    /**
     * @param mixed $_fecha
     *
     * @return self
     */
    public function setFecha($_fecha)
    {
        $this->_fecha = $_fecha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->_hora;
    }

    /**
     * @param mixed $_hora
     *
     * @return self
     */
    public function setHora($_hora)
    {
        $this->_hora = $_hora;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaHoraCreacion()
    {
        return $this->_fechaHoraCreacion;
    }

    /**
     * @param mixed $_fechaHoraCreacion
     *
     * @return self
     */
    public function setFechaHoraCreacion($_fechaHoraCreacion)
    {
        $this->_fechaHoraCreacion = $_fechaHoraCreacion;

        return $this;
    }
    public function obtenerTodos(){
            /*
             obtiene todos los turnos
            */
            $mysql = new MySQL();
            $query = 'Select * from turno';
            $result = $mysql->consultar($query);
            $rows = array();
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            return $rows;
        }

    public function obtenerPorIdProfesional($id){
        $mysql = new MySQL();
        $sql = "SELECT * FROM turno INNER JOIN profesional "
             . " ON turno.id_profesional = profesional.id_profesional "
             . " WHERE turno.id_profesional = ". $id.";";
         $result = $mysql->consultar($sql);
         return $result;
    }
    

    public function guardar(){

        $sql = " INSERT INTO turno (id_turno, id_profesional, fecha,hora) "
             . " VALUES (NULL,  $this->_idProfesional, '$this->_fecha', '$this->_hora') ";

        //echo $sql;

        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idTurno = $idInsertado;
    }
  
    public function calcularHorario($id){
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $agenda = Agenda::obtenerAgendaPorId($id);
        $horaInicio = new DateTime($agenda->getHoraDesde());
        $horaFin    = new DateTime($agenda->getHoraHasta());
        $intervalo = $agenda->getDuracion();
        $horaFin->modify('-1 second'); 


        // Intervalos en minutos       
         $intervalo = new DateInterval('PT'.$intervalo.'M');

         // periodo entre las horas segun los intervalos
        $periodo   = new DatePeriod($horaInicio, $intervalo, $horaFin);        

        return $periodo;
    }

    public function generar($idAgenda)
    {
    	$agenda = Agenda::obtenerAgendaPorId($idAgenda);
        $agenda->setGenerado(1);
        $agenda->actualizarGenerador();
        $calculoHorario = Turno::calcularHorario($idAgenda);
    	$agendaDia = AgendaDia::obtenerDiasPorIdAgenda($idAgenda);

        

        //echo $agenda->getIdProfesional();


    	date_default_timezone_set('America/Argentina/Buenos_Aires');
    	$fecha1 = new DateTime($agenda->getFechaHasta());
		$fecha2 = new DateTime($agenda->getFechaDesde());
        $fecha2->modify("- 1 day");
        //$fecha1->modify("-1 day");
		$diferencia = $fecha1->diff($fecha2);
		//echo $diferencia->days;

        $dias = 0;
       
        $fechaActual = Date($agenda->getFechaDesde());
    	while ($dias < $diferencia->days) 
    	{
            $fecha = date("Y-m-d",strtotime($fechaActual."+ $dias days")); 
            //echo "<br>".$fecha;

            //echo "<br>". $fecha d-m-Y;
            $day_number =  date('N', strtotime($fecha));
    		
            //echo "<br>".$day_number;

    		foreach ($agendaDia as $dia) 
            {
                
                
    		   switch ($day_number) 
    			{


    				case '1':
                        
    					if ($dia->getLunes() == 1)
                        {
                          //echo $fecha;
                        
                            foreach( $calculoHorario as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    if ($fecha >= date("Y-m-d")){
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                    $horas+=1;
                                    }
                                }
                            }
                         $totalTurnos=$turnos;
                        
                        }
    				break;
    			
    				case '2':

                        if ($dia->getMartes() == 1)
                        {
                          //echo $fecha;
                        
                            foreach( $calculoHorario as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    if ($fecha >= date("Y-m-d")){
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                    $horas+=1;
                                    }
                                }
                            }
                         $totalTurnos=$turnos;
                        
                        }
    				break;
    				case '3':

                        if ($dia->getMiercoles() == 1)
                        {
                          //echo $fecha;
                        
                            foreach( $calculoHorario as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    if ($fecha >= date("Y-m-d")){
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                    $horas+=1;
                                    }
                                }
                            }
                         $totalTurnos=$turnos;
                        
                        }
    				break;
    				case '4':

                        if ($dia->getJueves() == 1)
                        {
                          //echo $fecha;
                        
                            foreach( $calculoHorario as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    if ($fecha >= date("Y-m-d")){
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                    $horas+=1;
                                    }
                                }
                            }
                         $totalTurnos=$turnos;
                        
                        }
    				break;
    				case '5':

                        if ($dia->getViernes() == 1)
                        {
                          //echo $fecha;
                        
                            foreach( $calculoHorario as $hora ) 
                            {
                                $horario = $hora->format('H:i:s');
                                //echo "<br>".$horario;
                                $turnos+=1;
                                if ($horas < $totalTurnos)
                                {
                                    if ($fecha >= date("Y-m-d")){
                                    $turno = new Turno();
                                    $turno->setIdProfesional($agenda->getIdProfesional());
                                    $turno->setHora($horario);
                                    $turno->setFecha($fecha);

                                    $turno->guardar();

                                    $horas+=1;
                                    }
                                }
                            }
                         $totalTurnos=$turnos;
                        
                        }
    				break;
    			}        
            }
    		
    		
    		 $dias+= 1;	
    	}
    }		

    		

}



?>