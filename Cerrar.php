<?php 

	session_start();//SE INICIA SESSION 

	unset($_SESSION['user']);//SE VACIA LA SESSION 

	header("location:../Requerimientos/Index.html");// SE REDIRIGE A LA PAGINA QUE NOSOTROS QUERAMOS

 ?>