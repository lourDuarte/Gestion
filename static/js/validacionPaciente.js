function validarPaciente() {
    var divMensajeError = document.getElementById("mensajeError");
    var nombre = document.getElementById("txtNombre").value;
    var apellido =document.getElementById("txtApellido").value;
    var obraSocial = document.getElementById("cboObraSocial").value;
    var numeroDocumento = document.getElementById("txtNumeroDocumento").value;
    //nombre
    if (nombre.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El nombre no debe estar vacio</font><br><br>";
        return;
    }
    if (nombre.length < 3) {
        divMensajeError.innerHTML = "<font color='red'>El nombre debe contener al menos 3 caracteres</font><br><br>";
        return;
    }
    //apellido
    if (apellido.trim() == "") {
        divMensajeError.innerHTML = "<font color='red'>El apellido no debe estar vacio</font><br><br>";
        return;
    }

    //obra social
    if(obraSocial.trim()== ""){
        divMensajeError.innerHTML = "<font color='red'>Debe indicar la obra social</font><br><br>";
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
    
    var form = document.getElementById("frmDatos");
    form.submit();
}
