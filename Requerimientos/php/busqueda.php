<?php
require'../conexion.php';
$conexion = conexion();

$consulta="SELECT id_usuario FROM validaradmin  ";
		$resultado=$conexion->query($consulta);
		$temp = array();
		 while ($mostrar=$resultado->fetch_array()){
		  array_push($temp,$mostrar['id_usuario']);

		 }
$sql="SELECT *FROM requerimiento_usuarios";
$tmp= "";


if($_POST["texto"] !=""){
	$sql="SELECT *
FROM requerimiento_usuarios
WHERE id and usuario LIKE  '%".$_POST["texto"]."%'";
}

$tmp="<table class='table   table-hover'>
<tr>
<thead>
                    <th>#</th>
					<th>Usuario</th>
				<th>procesos</th>
				<th>fecha</th>
				<th>software</th>
				<th>direccion</th>
				<th>requerimiento</th>
				<th>prioridad</th>
				<th>Alcance</th>
				<th>Objetivo</th>
				<th>impacto</th>
				<th>otros procesos</th>
				<th>Operaciones</th>
				<thead>
</tr>";
$resultado=$conexion->query($sql);

while ($row=$resultado->fetch_array()){

	
		
	  $id=$row['id'];
	  if(in_array($id,$temp)){ $bgcolor="#C7FFDB";}else  $bgcolor="#F78181";
		if ($row['id'] == $mostrar['id_usuario'])
		    {echo $mostrar['id_usuario'];

		}else{

		}
		
		

		
			
		 $viabilidad='<span class="btn btn-default"><a href="formatoAdmin.php?id='.$id .';">Viabilidad</a></span>';
	
	

$tmp.='<tr style="background-color:' . $bgcolor .'";>
		<td>'.$row['id'] .'</td>
    <td>' .$row['usuario'] .'</td>
    <td>'.$row['procesos'] .'</td>
    <td>'.$row['datefecha'] .'</td>
    <td>'. $row['software'] .'</td>
    <td>'. $row['direccion'] .'</td>
    <td>'. $row['requerimiento'] .'</td>
    <td>' .$row['prioridad'] .'</td>
     <td>'.$row['alcancerequerimiento'] .'</td>
    <td>' . $row['objetivorequerimiento'].'</td>
   <td>' .$row['impactorequerimiento'] .'</td>
    <td>'.$row['otrosprocesos'] .'</td>
<td>'. $viabilidad.'</td>

		 
	</tr>';
	
}
$tmp.="</table>";



 
echo $tmp;

?>

