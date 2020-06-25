<?php
require_once 'class/Paciente.php';
require_once 'class/Profesional.php';
//require_once 'class/Especialidad.php';
require_once 'class/Usuario.php';







$idProfesional= Profesional::ObtenerPorId(1);

highlight_string(var_export($idProfesional,true));

echo "<br><br>";

$usuario= Usuario::ObtenerPorId(1);

highlight_string(var_export($usuario,true));

echo "<br><br>";

//$idPaciente= Paciente::ObtenerPorId(1);

//highlight_string(var_export($idPaciente,true));

echo "<br><br>";


//highlight_string(var_export($paciente,true));


echo "<br><br>";

echo "<br><br>";


$todosPacientes= Paciente::ObtenerTodos();
highlight_string(var_export($todosPacientes,true));

//$todosProfesionales= Profesional::ObtenerTodos();
//highlight_string(var_export($todosProfesionales,true));








?>