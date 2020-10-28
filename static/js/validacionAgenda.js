
function validarAgenda(){

	var divMensajeError = document.getElementById("mensajeError");
    var fechaInicio = document.getElementById("txtFechaInico").value;
    var fechaFinal = document.getElementById("txtFechaFinal").value;
    var duracion = document.getElementById("txtDuracion").value;
    var horaInicio = document.getElementById("txtHoraInicio").value;
    var horaFinal = document.getElementById("txtHoraFinal").value;

	

//fecha inicio y final
if (fechaInicio.trim()== ""){
	divMensajeError.innerHTML = "<font color 'red'> Debe indicar la fecha inicio</font><br><br>";
	return;
}	

if (fechaFinal.trim()== ""){
	divMensajeError.innerHTML = "<font color 'red'> Debe indicar la fecha final</font><br><br>";
	return;
}	

//hora inico y final

if (horaInicio.trim()== ""){
	divMensajeError.innerHTML = "<font color 'red'> Debe indicar el horario</font><br><br>";
	return;
}

if (horaFinal.trim()== ""){
	divMensajeError.innerHTML = "<font color 'red'> Debe indicar el horario final </font><br><br>";
	return;
}	

//duracion

if (duracion.trim()== ""){
	divMensajeError.innerHTML = "<font color 'red'> Debe indicar la duracion por turno</font><br><br>";
	return;
}	

var form = document.getElementById("frmDatos");
    form.submit();

}
