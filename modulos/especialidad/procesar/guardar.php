<?php

require_once "../../../class/Especialidad.php";


$tipo = $_POST['txtTipo'];

$especialidad= new Especialidad;
$especialidad->setTipo($tipo);

$especialidad->guardar();

header('location: ../listado.php?mensaje=1');

?>