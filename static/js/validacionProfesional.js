function validarProfesional() {
    var divMensajeError = document.getElementById("mensajeError");
    var nombre = document.getElementById("txtNombre").value;
    var apellido =document.getElementById("txtApellido").value;
    var matricula = document.getElementById("txtMatricula").value;
    var obraSocial = document.getElementById("cboObraSocial").value;

    if (nombre.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El nombre no debe estar vacio</font><br><br>";
        return;
    }
    if (apellido.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El apellido no debe estar vacio</font><br><br>";
        return;
    }

    if (nombre.length < 3) {
        divMensajeError.innerHTML = "<font color='red'>El nombre debe contener al menos 3 caracteres</font><br><br>";
        return;
    }

    if(matricula.trim()== ""){
        divMensajeError.innerHTML = "<font color='red'>Debe ingresar su matricula</font><br><br>";
        return;
    }
    if (matricula.length < 3) {
        divMensajeError.innerHTML = "<font color='red'> La matricula debe tener al menos 3 caracteres</font><br><br>";
        return;
    }

    
    var form = document.getElementById("frmDatos");
    form.submit();
}

