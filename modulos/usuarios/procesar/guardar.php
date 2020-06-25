<?php

require_once "../../../class/Usuario.php";

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$username = $_POST ['txtUsername'];
$password = $_POST ['txtPassword'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];



if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	exit;
}


$usuario = new Usuario($nombre, $apellido);
$usuario->setUsername($username);
$usuario->setPassword($password);
$usuario->setFechaNacimiento($fechaNacimiento);
$usuario->setIdTipoDocumento($tipoDocumento);
$usuario->setNumeroDocumento($numeroDocumento);


$usuario->guardar();

//highlight_string(var_export($paciente,true));

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="#ddd">

	<?php

	require_once "../../../menu.php";

	?>

	<div align="center">

		<?php echo "usuario guardado"; ?>

	</div>

</body>
</html>













?>