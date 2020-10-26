//la parte asincrona de la pagina qaaaa
function mostrarTabla(){
	$.ajax({
		type:"POST",
		url:"tablaDatos.php",
		success: function(res){
			$("#tabla").html(res);
		}
	});
}



function nuevoRegistro(){
	$.ajax({
		type:"POST",
		url:"nuevoDato.php",
		data:$("#frmNuevo").serialize(),
		success: function(res){			
			if (res==1) {
				$("#frmNuevo")[0].reset();
				mostrarTabla();
				swal("!Exito al agregar registro","","success");
			}else{
				swal("No se puede agregar registro","","error");
			}
			
		}
	});
	return false;
}

function actualizarDato(){
	$.ajax({
		type:"POST",
		url:"actualizarDato.php",
		data:$("#frmActualizar").serialize(),
		success: function(res){				
			if (res==1) {				
				mostrarTabla();
				swal("!Exito al actualizar registro","","success");
			}else{
				swal("No se puede actualizar registro","","error");
			}
			
		}
	});
	return false;
}



function actualizarDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"actualizarDatos.php",		
		success: function(res){						
			res=jQuery.parseJSON(res);
			$("#ida").val(res['codigo']);
			$("#txtNombrea").val(res['nombre']);
			$("#txtFechaa").val(res['fecha']);
		}
	});
	
}




function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"id=" + id,
				url:"eliminarDatos.php",				
				success: function(res){			
					if (res==1) {	
						console.log(res);
						mostrarTabla();
						swal("!Exito al eliminar el registro","","success");
					}else{
						swal("No se puede eliminar el registro registro","","error");
					}
					
				}
			});
			
			
		} 
	});
}

