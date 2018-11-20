<?php
		session_start();
		date_default_timezone_set('America/Bogota');
			if(isset($_SESSION['user'])){
			
		?>
		<html>
		<head>
			<title>Requerimientos de Software</title>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
				<link rel="stylesheet" type="text/css"   href="../css/FORMATO.css">
               <link rel="icon" type="image/png" href="../imagenes/favicon.png" />
            <link  type="text/css" href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
           <link type="text/css" href="../css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
           <link type="text/css" href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

           <script src="../js/jquery-3.2.1.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




		

		</head>



			<header>
				<input type="checkbox" id="btn-menu">
				<nav class="menu">
					
					<a href="../Index.html">
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
			<body>
	

<div class="container-fluid" >
				
		
				
		<div style="text-align: center;">
			<h2 >TABLA DE SOLICITUD REQUERIMIENTOS </h2></div>
			
			<br>	
		
		<script type="text/javascript" src="funciones.js"></script>
		
		
<?php

				require_once"../conexion.php";
				$conexiones=conexion();
				$conexion = new PDO('mysql:host=localhost;dbname=requerimiento', 'root', '');



		$consulta="SELECT id_usuario FROM validaradmin  ";
		$resultado=$conexiones->query($consulta);
		$temp = array();
		 while ($mostrar=$resultado->fetch_array()){
		  array_push($temp,$mostrar['id_usuario']);
		 }

				?>
				


					<table id="tabla" class="table  table-hover  " width="100%" >
						<tr>
							<thead style="
							background-color: #FAFAFA; 
					">
							<th># casos</th>
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
						<th >Otros procesos</th>
						
						</thead>
					</tr>
					<tbody>
						<?php foreach

						 ($conexion->query('SELECT * FROM requerimiento_usuarios ORDER BY `requerimiento_usuarios`.`id` DESC ') as $row){
						$id=$row['id'];	
						if($row['usuario']==$_SESSION['user']){

						?>
				
						 <tr <?php if(in_array($id, $temp)){ echo "bgcolor='#C7FFDB'";}else echo "bgcolor='#F78181'"; ?> >
			 
			<td ><?php echo $row['id'] ?></td>
		    <td  ><?php echo $row['usuario'] ?></td>
		    <td ><?php echo  $row['procesos'] ?></td>
		    <td ><?php echo $row['datefecha'] ?></td>
		    <td ><?php echo $row['software'] ?></td>
		    <td ><?php echo $row['direccion'] ?></td>
		    <td  ><?php echo $row['requerimiento'] ?></td>
		    <td ><?php  echo $row['prioridad'] ?></td>
		     <td ><?php  echo $row['alcancerequerimiento'] ?></td>
		    <td ><?php  echo $row['objetivorequerimiento'] ?></td>
		   <td ><?php echo $row['impactorequerimiento'] ?></td>
		    <td ><?php  echo $row['otrosprocesos'] ?></td>
		     <td><?php  if ($row['id'] == $mostrar['id_usuario'])
		    {echo $mostrar['id_usuario'];

		}else{

		}?></td>
		  

		   
		    

				</tr>		
		<?php
}else{
	echo "Su lista de requerimientos es:";
}
		}
		?>
			</tbody>			
					</table>
				</div></div>
					<ul class="pagination pagination-lg pager" id="myPager"></ul>
				</div></div></div>
	
					</body>

						<style type="text/css">
				div.centerTable{
		        text-align: center;
		}

		 

		div.centerTable table {
		       margin: 0 auto;
		       text-align: left;

		}

			.casotabla {


		border-color: #92a8d1;
		width  : 1300px;
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
			</html>
	<script type="text/javascript">
		
		$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this.find('tbody');
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};


	</script><script type="text/javascript">
		$(document).ready(function(){
    
  $('#tabla').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:5});
    
});
	</script>
	

			<?php
		}else{
			header("location:../loginAdmin.html");
		}