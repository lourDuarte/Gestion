<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" type="text/css" href="static/css/form.css">
</head>
<body>

	<form method="POST" action="modulos/usuarios/procesar/login.php">
		<caption> INICIAR SESION</caption>

		<br><br>

        <input type="text" name="txtUsuario">
        <br><br>
        <input type="password" name="txtPassword">
        <br><br>
        <input type="submit" value="Iniciar Sesion">
    </form>

    <br><br>
    <div align="left">
		<a href="/programacion3/gestion/modulos/usuarios/alta.php">
		<img src="imagenes/iconos/add.png">Registrarse</a>
	</div>


</body>
</html>