<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Ingresar</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="Bootstrap/js/bootstrap.js"></script>
		<script src="Bootstrap/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/validaciones.js"></script>
		<script type="text/javascript">
			function onRutBlur(obj) {
				if (VerificaRut(obj.value))
				{
				}
				else
				{
					alert("Rut incorrecto");
					document.formulario.rut.value = "";
				}
			} 
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="Bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">		
		<style>
			.subTitle{
				font-size: 30px !important;
			}
			.spaceIntoElements{
				height:30px;
			}f
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
				float: left;
				color: white;
			}
		</style>
	</head>

	<body>
		<!-- Header -->
		<div id="header">
			<div id="nav-wrapper" class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<!--/Header -->
		<div class="container">
			<div class="row " style="margin-top:50px; font-size:30px">
				<div class="col-md-offset-3 col-md-1 text-center"><a href="#"><img src="imagenes/login.png" style="width:80px; height:auto;"></a></div>
				<div class="col-md-7" style="margin-top:30px; padding-left:25px;">
					<label>Bienvenido a AcampaChile:</label>
				</div>
			</div>
			<div class="row" style="padding:10px;">
				<div class="col-md-7 col-md-offset-2">
					<form name="formulario" action="controlador_login.php" class="form-horizontal"  method="post" >
						<div class="form-group">
							<label for="rut" class="col-sm-2">Rut: </label>
							<label class="col-sm-1"></label>
							<div class="col-sm-9">
							<input type="text" name="rut" id="rut" class="form-control" required placeholder="12345678-9" onblur="onRutBlur(this);"/>
							</div> 
						</div>
						<div class="form-group">
							<label for="pass" class="col-sm-2">Contraseña: </label>
							<label class="col-sm-1"></label>
							<div class="col-sm-9">
							<input type="password" name="pass" class="form-control" id="pass" required placeholder="********"/>
							</div>
						</div>					  
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
							<input type="submit" name="button" id="button" value="Ingresar" class="btn btn-default totalWidth"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>