
function validarUsuario(){
	var divMensajeError = document.getElementById("mensajeError");
    var nombre = document.getElementById("txtNombre").value;
    var apellido =document.getElementById("txtApellido").value;
    var password = document.getElementById("txtPassword").value;
    var username = document.getElementById("txtUsername").value;
    var numeroDocumento = document.getElementById("txtNumeroDocumento").value;
    var perfil = document.getElementById("cboTipoPerfil").value;

    //nombre
    if (nombre.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El nombre no debe estar vacio</font><br><br>";
        return;
    }

    //apellido
    if (apellido.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El apellido no debe estar vacio</font><br><br>";
        return;
    }

    //password

    if (password.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>Contraseña vacia</font><br><br>";
        return;
    }

    if (password.length < 6) {
    	divMensajeError.innerHTML = "<font color='red'>Contraseña insegura: ingrese al menos 6 caracteres</font><br><br>";
    	return;
    }

    //username
    if (username.trim()== ""){
    	divMensajeError.innerHTML = "<font color='red'>Ingresar nombre de usuario</font><br><br>";
    	return;
    }
    //documento
    if (numeroDocumento.trim() == "") {
        
        divMensajeError.innerHTML = "El DNI no debe estar vacio *";
        return;
    }
    if (numeroDocumento.length < 7) {
      
        divMensajeError.innerHTML = "El DNI debe contener al menos 7 carácteres *";
        return;
    }

    //perfil

    if(perfil.trim()==""){
    	divMensajeError.innerHTML = "<font color='red'>Debe definir el perfil</font><br><br>";
    	return;
    }

    var form = document.getElementById("frmDatos");
    form.submit();
}