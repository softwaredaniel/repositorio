	
function busqueda(){
	var texto= document.getElementById("txtnom").value;
	var parametros ={
		"texto":texto
	};
	
	$.ajax({
		data: parametros,
		url:"busqueda.php",
		type:"POST",
			success: function(response){
				$("#datos").html(response);
			}
		});
	} 
