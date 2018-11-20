<?php
session_start();
date_default_timezone_set('America/Bogota');
	if(isset($_SESSION['user'])){
	
?>
<html lang="es-ES">
<head>
	<title>Requerimientos de Software</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css"   href="css/FORMATO.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
	<link rel="icon" type="image/png" href="imagenes/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,100" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
	
	<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/alertifyjs/alertify.js"></script>
</head>

<body>


	<header>
		<input type="checkbox" id="btn-menu">
		<nav class="menu">
			
			<a href="Index.html">
				<img class="logo" src="imagenes/logoalianza.jpg" height="48px" width="174px" style="float:left;">
			</a>

			<a href="Index.html">
				<p class="titulo" style="color: white;  float: left;">REQUERIMIENTOS DE SOFTWARE<br>Alianza Diagnóstica S.A</p>
			</a>

			<ul>
				<li><a href="loginUsu.html" style="float: right;">Generar</a></li>
			<li><a href="../Requerimientos/php/Listarcasos.php" style="float: right;">Ver mis casos</a></li>
				<li><a href="Cerrar.php" style="float: right;">Cerrar sesion</a></li>
			</ul>
		</nav>

	</header>
	<style type="text/css">
		.caso {
border-color: #92a8d1;
width  : 1050px;
height : 1300px;
margin : 0 auto;
margin-top: 35px;
background: #D0D0D0;
padding: 0px 100px;
box-sizing: border-box;
font-family: 'Ubuntu', sans-serif;
font-size: 13px;
border: 2px solid #2c3e50;
border-radius: 7px;
}
	</style>
	

<div class="caso">	
	

	<h3 class="version">Código: F-TI-02<br>Versión: 26/10/2018 </h3><br><br>

	
<h3 style="text-align: center;">Formulario de requerimiento</h3><br>
<form id="frmRegistro">
	<font class="solu">PROCESO QUE SOLICITA :</font>
	<select class="form-control" id="procesos" >
			<option id="Seleccione">Seleccione..</option>
						<option value="Sistemas">Sistemas</option>
						<option value="Contabilidad">Contabilidad</option>
						<option value="Laboratorio">Laboratorio</option>
						<option value="Servicio al cliente">Servicio al cliente</option>
						<option value="Gestion Humana">Gestion Humana</option>
						<option value="Transcripcion">Transcripcion</option>
						<option value="Facturacion">Facturacion</option>
						<option value="Contabilidad">Contabilidad</option>
						<option value="Call center">Call center</option>
						<option value="Gerencia">Gerencia</option>
						<option value="Calidad">Calidad</option>
						<option value="Comercial">Comercial</option>
						<option value="Odontologia">Odontologia</option>
					</select>
				

	&emsp; &emsp; &emsp; &emsp;&emsp;  	


	<span class="solu">FECHA DE SOLICITUD : </span>
		<input class="tipFecha" type="date"  id="datefecha" >
		<br><br><br>
<span class="solu">SOFTWARE :</span>
<input class="SOFTWARE" type="text"  id="SOFTWARE">
<br><br><br>
<span class="solu">DIRECCIÓN QUIEN SOLICITA :</span> 
<input class="DIRECCION" type="text"  id="direccion">
<br><br><br> 
<div class="general">
		<span class="solu">TIPO DE REQUERIMIENTO :</span>
		<div class="wrapTipo" ><BR>
		 	 <input type="radio"  id="REQUERIMIENTO" value="Falla"> Falla&emsp;&emsp;
		 	 <input type="radio"  id="REQUERIMIENTO" value="Mejora"> Mejora&emsp;&emsp;
		 	 <input type="radio"  id="REQUERIMIENTO"value="Reporte"> Reporte&emsp;&emsp;
		 	 <input type="radio" id="REQUERIMIENTO" value="Nuevo"> Nuevo&emsp;&emsp;
		<br><br><br><br>
	</BR></div>

		<span class="solu">PRIORIDAD :</span>
		<BR>
		<input type="radio"  id="prioridad"value="Alto"> Alto&emsp;&emsp;
		<input type="radio" id="prioridad"value="Medio"> Medio&emsp;&emsp;
		<input type="radio"  id="prioridad" value="Bajo"> Bajo&emsp;&emsp;
</div>

	<br><br><br>
		<span class="objReq">OBJETIVO DEL REQUERIMIENTO :</span>
		<br><br>
		<textarea class="objeReque"  id="objetivorequerimiento"></textarea>
		<br><br><br>

		<P class="alcancereq">ALCANCE DEL REQUERIMIENTO :</P>
		<textarea class="alcanceReque"  id="alcancerequerimiento"></textarea>
		<br><br><br>

		<p class="impacto">IMPACTO DEL REQUERIMIENTO :</p>
		<textarea class="impacRequer"  id="impactorequerimiento"></textarea>
		<br><br><br>

		<p class="otrosproc">OTROS PROCESOS QUE PUEDE AFECTAR EL CAMBIO SOLICITADO (Entradas o Salidas) Y CÓMO LOS PUEDE AFECTAR :</p>
		<textarea class="otrosProcesos"  id="otrosprocesos"></textarea>
		<br><br><br>

		<p class="solu">REVISADO POR LA DIRECCION</p>
		<div style="text-align: center;">
		<button type="button"class="enviar" id="enviar">Enviar formulario</button></div>
	</form>

	

	
</body>
<footer>
	<div class="tecn">
		®jose daniel solano manosalva 2018
	</div>
</footer>
</html>


<?php
} else {
	header("location:loginUsu.html");
	}
 ?>
 <script type="text/javascript">
		$(document).ready(function(){
		$('#enviar').click(function(){
			if($('#procesos').val()==""){
			alertify.alert("Debes llenar el proceso");
			return false;
		}else if($('#datefecha').val()==""){
			alertify.alert("Debes ingresar la fecha");
	
			return false;
		} else if($('#SOFTWARE').val()==""){
			alertify.alert("Debes llenar el campo Software");
	
			return false;
		} else if($('#direccion').val()==""){
			alertify.alert("Debes llenar la direccion");
	
			return false;
		} else if($('#objetivorequerimiento').val()==""){
			alertify.alert("Debes llenar el campo objetivos");
			return false;
		}else if($('#alcancerequerimiento').val()==""){
			alertify.alert("Debes llenar el campo alcance");
			return false;
		}else if($('#otrosprocesos').val()==""){
			alertify.alert("Debes llenar el campo otros procesos");
			return false;
		}
	cadena="procesos=" + $('#procesos').val()+
	"&datefecha="+ $('#datefecha').val()+
	"&SOFTWARE=" + $('#SOFTWARE').val()+
	"&direccion=" + $('#direccion').val()+
	"&REQUERIMIENTO=" + $('#REQUERIMIENTO').val()+
	"&prioridad=" + $('#prioridad').val()+
	"&objetivorequerimiento=" + $('#objetivorequerimiento').val()+
	"&alcancerequerimiento=" + $('#alcancerequerimiento').val()+
	"&impactorequerimiento=" + $('#impactorequerimiento').val()+
	"&otrosprocesos=" + $('#otrosprocesos').val();
				

					$.ajax({
						type:"post",
						url:"php/insertardatos.php",
						data:cadena,
						success:function(r){
							if(r==1){
			
							$('#frmRegistro')[0].reset();
								alertify.success("Registro de Requerimientos exitoso");

							}else{
								alertify.error("fallo en requerimientos");
							}
						}
					});
				});
		});
</script>