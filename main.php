<?php
require_once 'class/Paciente.php';
require_once 'class/ObraSocial.php';
require_once 'class/Especialidad.php';
require_once 'class/Profesional.php';

$obraSocial= new ObraSocial;
$obraSocial->setNombre('Osde');
$obraSocial->setCoSeguro(400);

$obraSocial->guardar();

highlight_string(var_export($obraSocial,true));

echo "<br><br>";

$especialidad= new Especialidad;
$especialidad->setTipo('psicoanalisis');

$especialidad->guardar();

echo "<br><br>";

highlight_string(var_export($especialidad,true));

$listaEspecialidades= Especialidad::ObtenerTodos();

highlight_string(var_export($listaEspecialidades,true));

echo "<br><br>";

$especialidadId= Especialidad::ObtenerPorId(1);
highlight_string(var_export($especialidadId,true));

echo "<br><br>";

$profesional= new Profesional('Rocio', 'Caceres');
$profesional->setMatricula(220);

//$profesional->guardar();
highlight_string(var_export($profesional,true));

echo "<br><br>";

$idProfesional= Profesional::ObtenerPorId(1);

highlight_string(var_export($idProfesional,true));

echo "<br><br>";

$paciente= new Paciente('Julio', 'Cesar');
$paciente->setDescripcion('ninguna');

//$paciente->guardar();
highlight_string(var_export($paciente,true));

echo "<br><br>";

//$idPaciente= Paciente::ObtenerPorId(1);

//highlight_string(var_export($idPaciente,true));






?>