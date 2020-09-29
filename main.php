<?php
//require_once 'class/Paciente.php';
//require_once 'class/Profesional.php';
//require_once 'class/TipoEspecialidad.php';
require_once 'class/Usuario.php';


$usuario= Usuario::obtenerTodos();

highlight_string(var_export($usuario,true));

echo "<br><br>";

//require_once 'class/Modulo.php';

//require_once 'class/Especialidad.php';

//$modulo = Modulo::obtenerModulosPorIdPerfil(2);

//highlight_string(var_export($modulo,true));




;
//$paciente= Paciente::obtenerPorId(2);

//highlight_string(var_export($paciente,true));

//$Profesional=Profesional::obtenerProfesionalesPorEspecialidad(1);



//$contacto= TipoContacto::obtenerTodos();

//highlight_string(var_export($Profesional,true));

//require_once "class/Domicilio.php";

//$domicilio=Domicilio::obtenerPorIdPersona(9);

//$domicilio->setManzana(550);
//$domicilio->actualizar();

//highlight_string(var_export($domicilio,true));


require_once 'class/Perfil.php';

$perfil = Perfil::ObtenerTodos();

highlight_string(var_export($perfil,true));


require_once 'class/ObraSocial.php';

$obraSocial=ObraSocial::obtenerOsPorIdProfesional(5);
highlight_string(var_export($obraSocial,true));

echo '<br><br><br>';

require_once 'class/AgendaDia.php';

$agenda = AgendaDia::obtenerDiasPorIdAgenda('4');


highlight_string(var_export($agenda,true));

?>



