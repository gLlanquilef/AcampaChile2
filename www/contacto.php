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
		float: left;
		color: white;
		text-shadow: black 0.1em 0.1em 0.2em;
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
                            <li><a href="login.php">Login</a></li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<!-- Header -->
		<div class="container">
			<div class="row " style="margin-top:50px; font-size:30px">
				<div class="col-md-offset-2 col-md-1 text-center"><a href="#"><img src="imagenes/Contacts.png" style="width:80px; height:auto;"></a></div>
				<div class="col-md-7" style="margin-top:30px; padding-left:40px;">
					<label>Contacto AcampaChile, envianos tus dudas y consultas.</label>
				</div>
			</div>

			<div class="row">
				 <div class="col-md-6 col-md-offset-3">
                    <form  class="form-horizontal" method="post" name="contacto" action="script_envia_contacto.php">
					  <div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
						<label class="col-sm-1"></label>
						<div class="col-sm-9">
						  <input type="text" name="nombre" id="nombre" class="form-control"required  placeholder="Nombre" />
						</div>
					  </div>
					  <div class="form-group">
						<label for="correo" class="col-sm-2 control-label">Email:</label>
						<label class="col-sm-1"></label>
						<div class="col-sm-9">
						  <input type="text" name="correo" class="form-control" id="correo" required placeholder="example@example.com"/>
						</div>
					  </div>
					  <div class="form-group">
						<label for="correo" class="col-sm-2 control-label">Teléfono:</label>
						<label class="col-sm-1"></label>
						<div class="col-sm-9">
						  <input type="text" name="telefono" class="form-control" id="telefono" required placeholder="Teléfono"/>
						</div>
					  </div>
						<label class="col-sm-3"></label>
						<div class="col-sm-9 col-md-offset-3 form-group" style="padding-left: 23px;">
							<textarea name="mensaje" id="mensaje" cols="18" rows="5" required placeholder="Ingrese aqui su mensaje" class="totalWidth" style="width:420px; height: 140;"></textarea>
						</div>
					  <div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
						 <input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-default totalWidth" onSubmit="confirma()" />
						</div>
					  </div>
					</form>
				 </div>
			</div>
		</div>
	</body>
<script>
	function confirma(){
		alert('Su mensaje ha sido enviado');
		javascript:location.reload();
	}
</script>
	</html>
	