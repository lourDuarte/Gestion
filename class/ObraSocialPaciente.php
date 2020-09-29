<?php

require_once 'MySQL.php';

class ObraSocialPaciente{
	private $_idObraSocialPaciente;
	private $_idObraSocial;
	private $_idPaciente;

    /**
     * @return mixed
     */
    public function getIdObraSocialPaciente()
    {
        return $this->_idObraSocialPaciente;
    }

    /**
     * @param mixed $_idObraSocialPaciente
     *
     * @return self
     */
    public function setIdObraSocialPaciente($_idObraSocialPaciente)
    {
        $this->_idObraSocialPaciente = $_idObraSocialPaciente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdObraSocial()
    {
        return $this->_idObraSocial;
    }

    /**
     * @param mixed $_idObraSocial
     *
     * @return self
     */
    public function setIdObraSocial($_idObraSocial)
    {
        $this->_idObraSocial = $_idObraSocial;

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

    public function guardar(){
    	$sql= " INSERT INTO paciente_OS (id_obra_social_paciente, id_obra_social, id_paciente) "
    		. " VALUES (NULL, $this->_idObraSocial, $this->_idPaciente) ";

    	$mysql= new MySQL();

    	$idInsertado = $mysql->insertar($sql);

    	$this->_idObraSocialPaciente = $idInsertado;
    }
}


?>