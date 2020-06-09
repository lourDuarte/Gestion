<?php
require_once "MySQL.php";

class ObraSocial{
	private $_idObraSocial;
	private $_nombre;
	private $_coSeguro;


    /**
     * @return mixed
     */
    public function getIdObraSocial()
    {
        return $this->_idObraSocial;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->_nombre;
    }


    /**
     * @param mixed $_nombre
     *
     * @return self
     */
    public function setNombre($_nombre)
    {
        $this->_nombre = $_nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoSeguro()
    {
        return $this->_coSeguro;
    }

    /**
     * @param mixed $_coSeguro
     *
     * @return self
     */
    public function setCoSeguro($_coSeguro)
    {
        $this->_coSeguro = $_coSeguro;

        return $this;
    }



    public function guardar() {

        $sql = " INSERT INTO obraSocial (id_obra_social, nombre, co_seguro) "
             . " VALUES (NULL, $this->_nombre, $this->_coSeguro)";

        echo $sql;
 
        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idObraSocial = $idInsertado;
    }

    public function actualizar() {

        $sql = "UPDATE obraSocial SET nombre = '$this->_nombre' WHERE id_obra_social = $this->_idObraSocial";
        $mysql = new MySQL();
        $mysql->actualizar($sql);

    }

    public function eliminar(){
        $sql= "DELETE FROM obraSocial WHERE id_obra_social = $this->_idObraSocial";

        echo $sql;

        $mysql= new MySQL;
        $mysqñ->eliminar($sql);

    }

    public function __toString() {
        return $this->_nombre;
    }









}


?>