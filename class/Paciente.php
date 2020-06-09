<?php

require_once "Persona.php";
require_once 'MySQL.php';
//require_once 'ObraSocial.php'

class Paciente extends Persona { 

	private $_idPaciente;
	private $_descripcion;
   // private $_arrObraSocial = array();


    /**
     * @return mixed
     */
    public function getIdPaciente()
    {
        return $this->_idPaciente;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->_descripcion;
    }

    /**
     * @param mixed $_descripcion
     *
     * @return self
     */
    public function setDescripcion($_descripcion)
    {
        $this->_descripcion = $_descripcion;
    }


   public function guardar() 
   {
        parent::guardar();

        $sql = "INSERT INTO Paciente (id_paciente, id_persona, descripcion) "
             . "VALUES (NULL, $this->_idPersona, $this->_descripcion)";

        echo $sql;

        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idPaciente = $idInsertado;
    }




    public function actualizar() {
        parent::actualizar();

        $sql = "UPDATE Paciente SET descripcion = '$this->_descripcion' WHERE id_paciente = $this->_idPaciente";
        $mysql = new MySQL();
        $mysql->actualizar($sql);

    }

    public function eliminar(){
        $sql= "DELETE FROM paciente WHERE id_paciente = $this->_idPaciente";

        echo $sql;

        $mysql= new MySQL;
        $mysqñ->eliminar($sql);

    }




    public static function obtenerTodos() {
        $sql = "SELECT persona.id_persona, persona.nombre, persona.apellido, paciente.id_paciente, paciente.descripcion "
             . "FROM persona "
             . "INNER JOIN paciente ON paciente.id_persona = persona.id_persona";

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();

        $listado = self::_generarListadoPaciente($datos);

        return $listado;
    }


    private function _generarListadoPaciente($datos) {
        $listado = array();
        while ($registro = $datos->fetch_assoc()) {
            $paciente = new Paciente($registro['nombre'], $registro['apellido']);
            $paciente->_idPaciente = $registro['id_cliente'];
            $paciente->_idPersona = $registro['id_persona'];
            $paciente->_descripcion = $registro['descripcion'];
            $listado[] = $paciente;
        }
        return $listado;
    }




   public static function obtenerPorId($id) {
        $sql = "SELECT persona.id_persona, persona.nombre, persona.apellido, "
             . "persona.id_tipo_documento, persona.numero_documento, "
             . "persona.fecha_nacimiento, persona.id_estado, paciente.id_paciente, "
             . "paciente.descripcion FROM paciente "
             . "INNER JOIN persona on persona.id_persona = paciente.id_persona "
             . "WHERE paciente.id_paciente = " . $id;

        $mysql = new MySQL();
        $result = $mysql->consultar($sql);
        $mysql->desconectar();

        $data = $result->fetch_assoc();
        $paciente = self::_generarPaciente($data);
        return $paciente;
    }


    private function _generarPaciente($data) {
        $paciente= new Paciente($data['nombre'], $data['apellido']);
        $paciente->_idPaciente= $data['id_paciente'];
        $paciente->_descripcion = $data['descripcion'];
        $pacientel->_idPersona = $data['id_persona'];
        $paciente->_fechaNacimiento = $data['fecha_nacimiento'];
        $paciente->_tipoDocumento = $data['id_tipo_documento'];
        $paciente->_numeroDocumento = $data['numero_documento'];
        $paciente->_estado = $data['id_estado'];
        return $paciente;
    }

}












?>