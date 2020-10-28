<?php

require_once '../../../class/Modulo.php';

$descripcion = $_POST['txtDescripcion'];
$directorio = $_POST['txtDirectorio'];

//validaciones
if (empty(trim($descripcion))) {
    $_SESSION['mensaje_error']= "DEBE DETERMINAR LA DESCRIPCION DEL MODULO";
    header('location:../alta.php');
    
    exit;
}

if (empty(trim($directorio))) {
    $_SESSION['mensaje_error']= "DEBE DETERMINAR EL DIRECTORIO";
    header('location:../alta.php');
    
    exit;
}


$modulo = new Modulo($descripcion, $directorio);

$modulo->guardar();

header("location:../listado.php");


?>