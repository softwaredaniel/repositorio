	<?php
	 require_once "../conexion.php";
 //declaramos la variable conexion
$conexion=conexion();
	//recibimos las variables del formulario del administrador antes de insertar
$id=$_POST['id'];
 	$VIABILIDAD=$_POST['VIABILIDAD'];
$tiempo=$_POST['tiempo'];
$SOLUCIONREQUERIMIENTO=$_POST['SOLUCIONREQUERIMIENTO'];
$COMENTARIOS=$_POST['COMENTARIOS'];
$REVIS1=$_POST['REVIS1'];
$REVIS2=$_POST['REVIS2'];
$REVIS3=$_POST['REVIS3'];
$REVIS4=$_POST['REVIS4'];
$revisado=$_POST['revisado'];
$revisado2=$_POST['revisado2'];
$revisado3=$_POST['revisado3'];
$revisado4=$_POST['revisado4'];
$PERSONAL=$_POST['PERSONAL'];
$PERSONAL2=$_POST['PERSONAL2'];
$PERSONAL3=$_POST['PERSONAL3'];
 	$fecha=$_POST['DATEFECHA'];//feccha que llega atraves del formulario
$datefecha=date("Y-m-d ", strtotime($_POST['DATEFECHA']));//damos formato ala fecha
$fecha1=$_POST['DATEFECHA1'];//feccha que llega atraves del formulario
$datefecha1=date("Y-m-d ", strtotime($_POST['DATEFECHA1']));
$fecha2=$_POST['DATEFECHA2'];//feccha que llega atraves del formulario
$datefecha2=date("Y-m-d ", strtotime($_POST['DATEFECHA2']));
$fecha3=$_POST['DATEFECHA3'];//feccha que llega atraves del formulario
$datefecha3=date("Y-m-d ", strtotime($_POST['DATEFECHA3']));

//despues si pulsa enviar hacemos el insert en su respectiva tabla
 	if(isset($_POST['enviaradmin'])){
 		$insertaradmin="INSERT into validaradmin(VIABILIDAD,tiempo,SOLUCIONREQUERIMIENTO,comentarios,REVIS1,REVIS2,REVIS3,REVIS4,revisado,revisado2,revisado3,revisado4,PERSONAL,PERSONAL2,PERSONAL3,fecha1,fecha2,fecha3,fecha4,id_usuario)values
 		('$VIABILIDAD','$tiempo','$SOLUCIONREQUERIMIENTO','$COMENTARIOS','$REVIS1','$REVIS2','$REVIS3','$REVIS4','$revisado','$revisado2','$revisado3','$revisado4','$PERSONAL','$PERSONAL2','$PERSONAL3','$datefecha','$datefecha1','$datefecha2','$datefecha3','$id')";
 		$resultadosadmin=mysqli_query($conexion,$insertaradmin);
 		if ($resultadosadmin) {
 		
 			header('location:formatoAdmin.php');
 		}else{
 		
echo "revise los datos";
 		}
 		
 	}
 	?>