<?php
//require_once 'class/Paciente.php';
//require_once 'class/Profesional.php';
//require_once 'class/TipoEspecialidad.php';


//require_once 'class/Modulo.php';

//require_once 'class/Especialidad.php';

//$modulo = Modulo::obtenerModulosPorIdPerfil(2);

//highlight_string(var_export($modulo,true));




;
//$paciente= Paciente::obtenerPorId(2);
//obtenerPorIdProfesional(1);
//highlight_string(var_export($paciente,true));

//$Profesional=Profesional::obtenerProfesionalesPorEspecialidad(1);









require_once 'class/Turno.php';

$turno = Turno::obtenerPorIdProfesional(1);

highlight_string(var_export($turno,true));


?>


    
 