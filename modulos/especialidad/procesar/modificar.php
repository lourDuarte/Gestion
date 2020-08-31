<?php 

require_once '../../../class/Especialidad.php';

$id= $_POST['txtId'];
$tipo= $_POST['txtTipo'];

$especialidad=Especialidad::ObtenerPorId($id);
$especialidad->setTipo($tipo);

$especialidad->actualizar();

header('location: ../listado.php?mensaje=2');


?>