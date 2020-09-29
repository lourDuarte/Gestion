<?

require_once '../../../class/Contacto.php';

$idPersona = $_POST['txtIdPersona'];
$idLlamada = $_POST['txtIdLlamada'];
$modulo = $_POST['txtModulo'];
$valor = $_POST['txtValor'];
$idTipoContacto = $_POST['cboTipoContacto'];

$contacto= New Contacto;
$contacto->setValor($valor);
$contacto->setIdPersona($idPersona);
$contacto->setIdTipoContacto($idTipoContacto);

$contacto->guardar();

header("location:/programacion3/Gestion/modulos/$modulo/detalle.php?id=$idLlamada");

?>