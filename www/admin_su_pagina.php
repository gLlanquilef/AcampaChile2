<?php
	session_start();
	//conexion a bd
	include("conexion.php") ;
	$con=conectar();
	//verificamos que la sesion sea la correcta
?>
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
	.iconFacebook{
		width: 106px;
		height: 37px;
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
	label{
		font-size: 23px;
		font-weight:bold !important;
		color: white;
		text-shadow: black 0.1em 0.1em 0.2em
	}
	</style>
	
	<body>
		<!-- Header -->
		<div id="header">
			<div id="nav-wrapper" class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Inicio</a></li>
							<li class="active"><a href="logout.php">Cerrar Sesión</a></li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<!--/Header -->
		<!--Wellcome message-->
		<div class="col-md-12 text-center" style="padding-top: 30px;">	
			<label>Bienvenido administrador</label>
		</div>	
		<!--/Wellcome message-->
		<!--Body-->
		<div class="container">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-6 col-md-offset-4">
					<!--Primer elemento-->
					<div class="col-md-3">
						<div class="col-md-12 text-center" style="width:100%;">
							<a href="registra_cliente.php"><img src="imagenes/icon/cliente_icon/modificar.png" style="width:90px; height: 90px; padding-top:8px;"></a>
						</div>
						<div class="col-md-12 text-center" style="width:100%;">
							<a href="registra_cliente.php"><label>Registrar Clientes</label></a>
						</div>
					</div>
					<!--Segundo elemento-->
					<div class="col-md-3">
						<div class="col-md-12 text-center" style="width:100%;">
							<a href="modifica_cliente.php"><img src="imagenes/icon/cliente_icon/modificarUsuario.png" style="width: 90px; height: 90px;"></a>
						</div>
						<div class="col-md-12 text-center" style="width:100%;">
							<a href="modifica_cliente.php"><label>Modificar Clientes</label></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Body-->
		<!-- Main -->
		<div class="container">

		</div>
		<!--/Main -->
		<!--Footer-->
		<div class="container" style="padding-top:100px;"></div>
		<!--/Footer---->
	</body>
</html>