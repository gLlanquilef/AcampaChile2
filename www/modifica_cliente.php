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
                            <li><a href="registra_cliente.php">Registra cliente</a></li>
						</ul>
					</nav>
			</div>
			<div class="container">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div>
			</div>
		</div>
		<!-- Header -->
		<!--/Container-->
		<div class="container" style="padding-top: 40px;">
			<div class="col-md-12 text-center">
				<label>Modificacion de usuarios de AcampaChile.</label>
			</div>
			<div class="row" style="padding-top: 40px;">
				<div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" id="registro" name="registro" method="post" action="script_guardar_registro.php">
						<!--Primer elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Rut:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="text" name="rut" id="rut" class="form-control" required placeholder="12345678-9" onblur="onRutBlur(this);"/>
							</div>
						</div>
						<!--Segundo elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Nombre Completo"/>
							</div>
						</div>
						<!--Tercer elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Telefono:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="text" name="telefono" id="telefono" class="form-control" required/>
							</div>
						</div>
						<!--Cuarto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Dirección:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="text" name="direccion" id="direccion" class="form-control" required placeholder="Calle #Numero" />
							</div>
						</div>
						<!--Quinto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Ciudad:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="text" name="ciudad" id="ciudad" class="form-control" required />
							</div>
						</div>
						<!--Sexto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Contraseña:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<input type="password" name="pass" id="pass" class="form-control" required  placeholder="******"/>
							</div>
						</div>
						<!--Septimo elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Cargo:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<select input type="text" name='cargo' class="form-control" style="height: 40px; padding-top:10px;">
									<?php
										include("conexion.php") ;
										$con=conectar();
										$query= "SELECT * FROM acampach_proyecto.Tipo_Cargo";
										$rec=mysql_query($query);
										while($row=mysql_fetch_array($rec)){
											echo"<option value='".$row['id_cargo']."'>
												".$row['Nombre']."
												</option>";
										}
									?>
								</select>
							</div>
						</div>
						<!--Octavo elemento Boton enviar-->
						<div class="form-group">
							<label for="nombre" class="col-sm-2 control-label">Habilitado:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-9">
								<select input type="text" name='habilitado' class="form-control" style="height: 40px; padding-top:10px;"></select>
							</div>
						</div>
						<!--Noveno elemento Boton enviar-->
						<div class="form-group">
							<div class="col-sm-9 col-md-offset-3">
								<input class="btn btn-default totalWidth" name="btn_enviar" type="submit"  id="btn_enviar" value="Enviar" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--/Container-->
	</body>
    <script type="text/javascript" > 
		function onRutBlur(obj) {
			if (VerificaRut(obj.value)){
				//Se estan cargando datos
				//falta query
			}else{
				alert("Rut incorrecto");
				document.registro.rut.value = "";
			}
		}
	</script>
</html>