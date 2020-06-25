<?php

require_once '../../../class/ObraSocial.php';

$id= $_GET['id'];

$obraSocial= ObraSocial::ObtenerPorId($id);

$obraSocial->eliminar();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	require_once "../../../menu.php";

	?>

	<div align="center">

		<?php echo "Eliminado"; ?>

	</div>

</body>
</html>