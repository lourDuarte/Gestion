<?php

require_once "MySQL.php";


class Domicilio{
	private $_idDomicilio;
	private $_torre;
	private $_piso;
	private $_sector;
	private $_manzana;
	private $_calle;
	private $_altura;


    /**
     * @return mixed
     */
    public function getIdDomicilio()
    {
        return $this->_idDomicilio;
    }

    /**
     * @return mixed
     */
    public function getTorre()
    {
        return $this->_torre;
    }

    /**
     * @param mixed $_torre
     *
     * @return self
     */
    public function setTorre($_torre)
    {
        $this->_torre = $_torre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPiso()
    {
        return $this->_piso;
    }

    /**
     * @param mixed $_piso
     *
     * @return self
     */
    public function setPiso($_piso)
    {
        $this->_piso = $_piso;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSector()
    {
        return $this->_sector;
    }

    /**
     * @param mixed $_sector
     *
     * @return self
     */
    public function setSector($_sector)
    {
        $this->_sector = $_sector;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManzana()
    {
        return $this->_manzana;
    }

    /**
     * @param mixed $_manzana
     *
     * @return self
     */
    public function setManzana($_manzana)
    {
        $this->_manzana = $_manzana;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalle()
    {
        return $this->_calle;
    }

    /**
     * @param mixed $_calle
     *
     * @return self
     */
    public function setCalle($_calle)
    {
        $this->_calle = $_calle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->_altura;
    }

    /**
     * @param mixed $_altura
     *
     * @return self
     */
    public function setAltura($_altura)
    {
        $this->_altura = $_altura;

        return $this;
    }

    
   public function guardar() {
        parent::guardar();

        $sql = "INSERT INTO Domicilio (id_domicilio, id_persona, torre, piso, sector, manzana, calle, altura ) "
             . "VALUES (NULL, $this->_idPersona, $this->_torre, $this->_piso, $this->_sector, )"
             .  "( $this->_manzana, $this->_calle, $this->_altura)";

        echo $sql;
        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idDomicilio = $_idDomicilio;
    }




}












?>