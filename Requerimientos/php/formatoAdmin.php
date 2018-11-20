<?php
session_start();

date_default_timezone_set('America/Bogota');
	if(isset($_SESSION['user'])){
	
?>
<html>
<head>
	<title>Administrador</title>
		<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css"   href="../css/FORMATO.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
	<link rel="icon" type="image/png" href="../imagenes/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,100" rel="stylesheet">
</head>
<body>
	<header>
		<input type="checkbox" id="btn-menu">
		<nav class="menu">
			
			<a href="../index.html">
				<img class="logo" src="../imagenes/logoalianza.jpg" height="48px" width="174px" style="float:left;">
			</a>

			<a href="Index.html">
				<p class="titulo" style="color: white;  float: left;">REQUERIMIENTOS DE SOFTWARE<br>Alianza Diagnóstica S.A</p>
			</a>

			<ul>
				<li><a href="../loginUsu.html" style="float: right;">Generar</a></li>
			
				<li><a href="../Cerrar.php" style="float: right;">Cerrar sesion</a></li>
			</ul>
		</nav>

	</header>

	<style type="text/css">
		.casoadmin {
border-color: #92a8d1;
width  : 1050px;
height : 1300px;
margin : 0 auto;
margin-top: 35px;
background: #D0D0D0;
padding: 0px 100px;
box-sizing: border-box;
border-radius: 8px;
font-family: 'Ubuntu', sans-serif;
font-size: 13px;
border: 2px solid #2c3e50;
border-radius: 7px;
}
	</style>
	
	<div class="casoadmin ">	

	<h3 class="version">Código: F-TI-02<br>Versión: 14/09/2017 </h3><br><br>
	<form action="insertaradmin.php" method="POST">
		<?php $id=$_GET['id'];

	?>
<div class="tecn">	
	  <input type="hidden" name="id" value="<?php echo $id;?>">
		<br><h3 class="tecnologia">ESPACIO EXCLUSIVO PARA TECNOLOGIA</h3><br>

		<span class="objReq">VIABILIDAD DEL DESARROLLO :</span>
		<input type="text" class="viabDesar"name="VIABILIDAD" required="" ></input>
		<BR><BR>

		<span class="objReq">TIEMPO Y FECHA DE ENTREGA :</span>
		<input type="text" class="tiempEntrega"name="tiempo" placeholder="Tiempo en horas o meses y fecha aproximada" required=""></input>
		<BR><BR><BR>

		<p class="solu">SOLUCIÓN DEL REQUERIMIENTO</p	>
		<input type="text" class="SoluReque"name="SOLUCIONREQUERIMIENTO" required=""></input>
		<BR><BR><BR>
		
		<p class="solu">COMENTARIOS DE DESARROLLO</p	>
		<input type="text" class="comenDes"name="COMENTARIOS" required=""></input>
		<BR><BR><BR><BR>

		<SPAN class="REVIS">REVISADO POR (DIRECTORES, COORDINACIONES,JEFES)</SPAN>	&emsp;&emsp;&emsp;&emsp;&emsp;<span class="REVIS">APROBADO</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="REVIS">FECHA</span><BR><BR><BR>
			
			<input type="text" class="REVIS1"name="REVIS1" required=""></input>
				&emsp;&emsp;&emsp;&emsp;
				<input type="radio" name="revisado" value="si"> SÍ &emsp;&emsp;
		 		<input type="radio" name="revisado" value="no"> NO &emsp;&emsp; 
		 		<input class="tipFechaRev1" type="date" name="DATEFECHA" required=""><BR><BR>
			<input type="text" class="REVIS2"name="REVIS2" required=""></input>
				&emsp;&emsp;&emsp;&emsp;
				<input type="radio" name="revisado2" value="si"> SÍ &emsp;&emsp;
		 		<input type="radio" name="revisado2" value="no"> NO &emsp;&emsp;
		 		<input class="tipFechaRev2" type="date" name="DATEFECHA1" required=""><BR><BR>
			<input type="text" class="REVIS3"name="REVIS3" required=""></input>
				&emsp;&emsp;&emsp;&emsp;
				<input type="radio" name="revisado3" value="si"> SÍ &emsp;&emsp;
		 		<input type="radio" name="revisado3" value="no"> NO &emsp;&emsp;
		 		<input class="tipFechaRev3" type="date" name="DATEFECHA2" required=""><BR><BR>
			<input type="text" class="REVIS4"name="REVIS4" required=""></input>
				&emsp;&emsp;&emsp;&emsp;
				<input type="radio" name="revisado4" value="si"> SÍ &emsp;&emsp;
		 		<input type="radio" name="revisado4" value="no"> NO &emsp;&emsp;
		 		<input class="tipFechaRev4" type="date" name="DATEFECHA3" required=""><BR><BR><BR>

		<p class="solu">PERSONAL Y PROCESOS CAPACITADOS EN EL NUEVO REQUERIMIENTO</p>
		<input type="text" class="persYProc"name="PERSONAL" required=""></input>
		<BR><BR><BR><BR> 	

		<p class="solu">VoBo DIRECTOR DE TECNOLOGIA DE LA INFORMACIÓN Y COMUNICACIONES</p>
		<input type="text" class="VoBoDirecTec"name="PERSONAL2" required=""></input>
		<BR><BR><BR><BR> 

		<p class="solu">VoBo DIRECTOR PROCESO QUE SOLICITA</p>
		<input type="text" class="VoBoDirecProc"name="PERSONAL3" required=""></input>
		<BR><BR><BR><BR> 
		<div style="text-align: center;">
<a href="insertaradmin.php"><input class="enviar" type="submit" name="enviaradmin"></a>
</div></div>
</body>
<footer style="text-align: center;">
<div >
	<div class="tecn">
	<p>	®jose daniel solano manosalva 2018</p>
	</div>
</footer>
</html><script type="text/javascript">
	$(document).ready(function(){
	 $("#enviaradmin").click(function() {
        alertify.success("Ha ocurrido éxitosamente el proceso.");
    });
	});
</script>

<?php
} else {
	header("location:../loginUsu.html");
	}
 ?>