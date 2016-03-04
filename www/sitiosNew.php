<!DOCTYPE html PUBLIC "-//W3C//Dth XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dth/xhtml1-transitional.dth">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sitios</title>
</head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
                     
        <script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />

		</noscript>
    
	
<body class="homepage">

	<!-- Header -->
<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="index.php">Administracion de sitios &quot;Los maitenes&quot;</a></h1>
					</div>
			</div>
			<div id="nav-wrapper" class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Inicio</a></li>

						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner.jpg"></a></div>
			</div>
	</div>

<p>&nbsp;</p>
<p>
  <!-- Header -->
  
  
  <!-- Main -->
 


<form action="update.php" method="post">
<table width="100%">

    <tr>
      <th width="10%" align="center">Numero Sitio</th>
      <th width="15%" align="center">Camping</th>
      <th width="15%" align="center">Estado</th>
      <th width="10%" align="center">Disponible</th>
      <th width="10%" align="center">Ocupado
      <input type="hidden" name="cantidad" id="hiddenField" value="6" /></th>
      <th width="20%" align="center">Fecha Entrada</th>
      <th type="datetime" name="fecha_salida"width="20%" align="center">Fecha de Salida</th> 
  </tr>

</table>
  <?php
	  $NUM = 1;
	  include("conexion.php") ;
	   $con=conectar();
	  	$query= "SELECT * FROM acampach_proyecto.Sitios WHERE NOMBRE_CAMPING = 'Los Maitenes'";
		$rec=mysql_query($query);
		while($row=mysql_fetch_array($rec))
			{
			
		echo "<table  width='100%'> ";
		echo "<tr>";
       			//NUMERO SITIO
				echo "<th  width='10%' align='center'>";
				echo $row['NUMERO_SITIO'];
				echo "<input type='hidden' name='sitio".$NUM."' value='".$row['NUMERO_SITIO']."' />";
				echo "</th>";
				//CAMPING
				echo "<th  width='15%' align='center'>";
				echo $row['NOMBRE_CAMPING'];
				echo "<input type='hidden' name='camping' value='".$row['NOMBRE_CAMPING']."' />";
				echo "</th>";
				//ESTADO
				if ($row['ESTADO'] <> 'DISPONIBLE')
				{
				echo "<th  width='15%' align='center' class='ocupado'>";
				echo $row['ESTADO'];
				echo "</th>";
				}
				else
				{
				echo "<th  width='15%' align='center' class='disponible'>";
				echo $row['ESTADO'];
				echo "</th>";
				}
				//DISPONIBLE
				echo "<th width='10%' align='center'>";
				if ($row['ESTADO'] <> 'DISPONIBLE')
				{
				echo "<input type='radio' name='ESTADO".$NUM."' value='DISPONIBLE'>";
				}
				echo "</th>";	
				//OCUPADO
				echo "<th width='10%' align='center'>";
				if ($row['ESTADO'] <> 'OCUPADO')
				{
            	echo "<input type='radio' name='ESTADO".$NUM."' value='OCUPADO'>";
				}
				echo "</th>";	
				//FECHA ENTRADA
				echo "<th  width='20%' align='center'>";
				echo $row['FECHA_ENTRADA'];
				echo "<input type='hidden' name='camping' value='".$row['NOMBRE_CAMPING']."' />";
				echo "</th>";
				//FECHA SALIDA
				echo "<th  width='20%' align='center'>";
				//echo $row['FECHA_SALIDA'];
				echo "<input type='text' name='fecha_salida' id='fecha'/>";
				echo "</th>";
				
		echo "</tr>";
  		echo "</table>";
		
		
$NUM = $NUM + 1;
			}
			echo "";
			?>   
            <input type="submit" value="Actualizar"/>     
  </form>
</p>

	</body>
    <footer>
		<div align='center'>
		  <p title='Created By Fernando Vidal'>AcampaChile Copyright (C) 2015.</p>
		</div>
	</footer>
</body>
</html>