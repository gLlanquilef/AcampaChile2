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
		font-weight: bold;
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
	</style>
	
	<body>
		<div id="header">
			<div id="nav-wrapper" class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Inicio</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<div class="spaceIntoElements"></div>
		<!-- subTitle -->
		<div class="container">
			<div class="row subTitle text-center">
					Campings asociados
			</div>
		</div>
		<!-- end subTitle -->
		<hr>
		<!-- container maps -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<a href="#" class="image full"><img src="imagenes/Campings/Mehuin/mehuin.jpg"" alt="" width="301" height="201"></a>
					<p><strong>Camping Mehuin</strong></p>
					<a href="mehuin.php" class="button">Ver Mapa</a>				
				</div>
				<div class="col-xs-6 col-md-4">
					<a href="#" class="image full"><img src="imagenes/Campings/Aldachildo/aldachildo.jpg"" alt="" width="300" height="201"></a>
					<p><strong>Camping Aldachildo</strong></p>
					<a href="aldachildo.php" class="button">Ver Mapa</a>
				</div>
				<div class="col-xs-6 col-md-4">
					<a href="#" class="image full"><img src="imagenes/Campings/pto varas/PuertoVaras04.jpg" width="300" height="200"></a>
					<p><strong>Camping Playa Hermosa</strong></p>
					<a href="playaHermosa.php" class="button">Ver Mapa</a>
				</div>		
			</div>
		</div>
		<!-- end container maps -->
		<hr>		
		<!-- container links and information -->
		<div class="container">
			<div class="row">
			<!-- Publicidad -->
				<div class="col-xs-6 col-md-3">
					<div class="row">
						<h2 class="subTitle">Publicidad</h2>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<img src="images/chilebuses.jpg" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-6 col-md-7">
							<div>
								Buses Chiloé
							</div>
							<div>
								<a href="https://www.facebook.com/">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<img src="images/restaurant.png" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-6 col-md-7">
							<div>
								Restaurant "Tito"
							</div>
							<div>
								<a href="https://www.facebook.com/">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-md-3">
							<img src="images/quincho.jpg" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-9 col-md-9">
							<div>
								Quincho "Onde Migue"
							</div>
							<div>
								<a href="https://www.facebook.com/">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end Publicidad -->
				<!-- Páginas Amigas -->
				<div class="col-xs-6 col-md-3">
					<div class="row">
						<h2 class="subTitle">Páginas Amigas</h2>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<img src="images/chiloe.jpg" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-6 col-md-7 marginLeft5">
							<div>
								Conoce: Chiloé
							</div>
							<div>
								<a href="https://www.facebook.com/Chiloé-32554538363/">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<img src="images/Mehuin.jpg" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-6 col-md-7 marginLeft5">
							<div>
								Conoce: Mehuín
							</div>
							<div>
								<a href="https://www.facebook.com/mehuin.chile">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-md-3">
							<img src="images/PuertoVaras_Kirche_Osorno_650.jpg" class="imgLinks" alt=""/>
						</div>
						<div class="col-xs-6 col-md-7 marginLeft5">
							<div>
								Conoce: Pto.Varas
							</div>
							<div>
								<a href="https://www.facebook.com/places/Cosas-para-hacer-en-Puerto-Varas/115801715096985/">
									<img src="imagenes/icon/facebook_2015_logo.png" class="iconFacebook" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end Páginas Amigas -->
				<!-- Logotipo -->
				<div class="col-xs-6 col-md-6">
					<div class="row">
						<div class="col-xs-6 col-md-12">
							<a href="#" class="image logoIndex marginLeft25porCiento"><img id="logoIndex" src="imagenes/Campings/logo.png" style="width: 250px;"></a>
						</div>
					</div>
					<div class="row textBottonLogo">
						<div>
							AcampaChile es un sitio web de publicidad y gestion de campings.
							<br>Puedes contar con nuestro servicio contactandote con nosotros, mediante el formulario de 
							<a href="contacto.php">contacto</a>
						</div>
					</div>
				</div>
				<!-- end Logotipo -->				
			</div>
		</div>
		<!-- end container links and information -->
		
	</body>
	</html>