<!DOCTYPE HTML>
<html>
	<head>
		<title>Acampachile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="Bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<script src="Bootstrap/js/bootstrap.js"></script>
		<script src="Bootstrap/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <script src="js/validaciones.js"  type="text/javascript"></script>
		<script src="js/valida_registro.js"  type="text/javascript"></script>
	</head>
	
	<style>
	.subTitle{
		font-size: 30px !important;
	}
	.spaceIntoElements{
		height:30px;
	}
	.spaceLine{
		border-top: solid 1px #ddd;
	}
	.marginLeft5{
	    margin-left: 5px;
	}
	.marginLeft25porCiento{
		margin-left: 25%;
	}
	.container{
		width: 100% !important;
	}
	.imgLinks{
		width:75px;
		height:75px;
	}
	body{
		transparent:none !important;
			 background-image: url("imagenes/Background/background.jpg");
			 height: 100%;
			 width: 100%;
			 background-attachment: fixed;
			 background-repeat: no-repeat;
			 background-clip: border-box;
	}
	.textBottonLogo{
		font-size: 20px;
		font-weight: bold;
	}	
	.totalWidth{
		width:100%;
	}
	label, table{
		font-size: 23px;
		font-weight:bold !important;
		color: white;
		text-shadow: black 0.1em 0.1em 0.2em;
	}
	table{
		font-size: 20px !important;
	}
	</style>
	
	<body>
		<!-- Header -->
		<div id="header">
			<div id="nav-wrapper" class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active">
								<a href="cliente_su_pagina.php">Mi cuenta</a>
								<a href="registra_usuario.php">registrar usuario</a><a href="sitios.php">finanzas</a>
								<a href="sitios.php">estadisticas</a> 
								<a href="logout.php" style="margin-left: 100px;">Cerrar Sesión</a>
							</li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<!-- Header -->
        <!-- Main -->
		<div class="container">
			<form action="update.php" method="post">
				<div class="container">
					<table class="table table-condensed">
						<tr>
							<td width="10%">Numero Sitio</td>
							<td width="40%">Camping</td>
							<td width="25%">Estado</td>
							<td type="datetime" name="fecha_salida" width="25%">Fecha de Salida</td> 
						</tr>
					</table>
				</div>
				<div class="container">
					<?php
						$idUserSession = $_SESSION['id_Usuario'];
						$NUM = 1;
						include("conexion.php") ;
						$con=conectar();
						$query= "SELECT si.fecha_salida as FECHA_SALIDA,  si.ID_SITIOS as ID_SITIOS ,si.NUMERO_SITIO as 		                     NUMERO_SITIO , cam.nombre as NOMBRE_CAMPING, si.ESTADO as ESTADO from        		   
							acampach_contabilidad.Sitios si
							INNER JOIN acampach_contabilidad.camping cam on
							cam.idcamping = si.Id_camping 
							INNER JOIN acampach_contabilidad.Cuentas_Usuarios cu ON
							cu.Rut = cam.Cuentas_Usuarios_Rut 
							INNER JOIN acampach_contabilidad.Usuario user ON
							user.Cuentas_Usuarios_Rut = cu.Rut 
							WHERE
							user.Rut = '".$idUserSession."' "  ;
						$rec=mysql_query($query);
						while($row=mysql_fetch_array($rec)){
							echo "<table  class='table table-condensed'";
								echo "<tr>";
									//NUMERO SITIO
									echo "<th  width='10%' align='center'>";
										echo $row['NUMERO_SITIO'];
										echo "<input type='hidden'  name='sitio".$NUM."' value='".$row['ID_SITIOS']."' />";
									echo "</th>";
									
									//CAMPING
									echo "<th  width='40%' align='center'>";
										echo $row['NOMBRE_CAMPING'];
										echo "<input type='hidden' name='camping' value='".$row['NOMBRE_CAMPING']."' />";
									echo "</th>";
									
									//ESTADO
									if ($row['ESTADO'] <> 'DISPONIBLE'){
										echo "<th  width='25%' align='center' class='ocupado'>";
											echo $row['ESTADO'];
										echo "</th>";
									}else{
										echo "<th  width='25%' align='center' class='disponible'>";
											echo $row['ESTADO'];
										echo "</th>";
									}
									//FECHA SALIDA
										echo "<th  width='25%' align='center'>";
											echo $row['FECHA_SALIDA'];
										echo "</th>";
								echo "</tr>";
							echo "</table>";
							$NUM = $NUM + 1;
						}
						echo "";
					?>
					<input class="btn btn-default totalWidth" type="submit" value="Actualizar"/>
				</div>
			</form>
		</div>
		<!--Main-->
</body>
</html>