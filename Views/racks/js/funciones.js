
function agregardatos(nombre,apellido,email,telefono){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#Fecha').val(d[2]);
	$('#Lugar').val(d[3]);
	$('#Direccion').val(d[4]);
	$('#Hora').val(d[5]);
	$('#Descripcion').val(d[6]);
	$('#Evidencia').val(d[7]);
	
}

function agregaformd(datos){

	d=datos.split('||');

	$('#idpersonau').val(d[0]);
	$('#Fechau').val(d[2]);
	$('#Lugaru').val(d[3]);
	$('#Direccionu').val(d[4]);
	$('#Horau').val(d[5]);
	$('#Descripcionu').val(d[6]);
	$('#Evidenciau').val(d[7]);
}

function actualizaDatos(){


	id=$('#idpersona').val();
	Fecha1=$('#Fecha').val();
	Lugar1=$('#Lugar').val();
	Direccion1=$('#Direccion').val();
	Hora1=$('#Hora').val();
	Descripcion1=$('#Descripcion').val();
	Evidencia1=$('#Evidencia').val();

	cadena= "id=" + id +
			"&Fecha=" + Fecha1 + 
			"&Lugar=" + Lugar1 +
			"&Direccion="+ Direccion1+
			"&Hora=" + Hora1 +
			"&Descripcion=" + Descripcion1 +
			"&Evidencia=" + Evidencia1;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}


function eliminaDatos(){
	id2=$('#idpersonau').val();
	Fecha2=$('#Fechau').val();
	Lugar2=$('#Lugaru').val();
	Hora2=$('#Horau').val();
	Descripcion2=$('#Descripcionu').val();
	Evidencia2=$('#Evidenciau').val();

	cadena= "id2=" + id2  ;

	$.ajax({
		type:"POST",
		url:"php/eliminaDatos.php",
		data:cadena,
		success:function(r){
		
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Eliminado");
		}
	});
}