<?php

require_once '../../../class/Agenda.php';

$id=$_GET['idAgenda'];

$generar = Agenda::aplicar($id);

//highlight_string(var_export($generar,true));
header('location:../listado.php');

?>