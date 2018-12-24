<?php 


	session_start();//PARA INICIAR SESSION
	require_once "conexion.php";

	$conexion=conexion();

		$usuario=$_POST['usuario'];//VARIABLE DE USUARIO
		//$pass=sha1($_POST['password']);//ENCRYPTAR PASSWORD ESTO EVITA SQL INYECTION

		$sql= "SELECT * FROM usuario WHERE usuario='$usuario' ";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 0;
		}
 ?>
