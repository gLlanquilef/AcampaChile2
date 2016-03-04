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
							<li class="active">
								<a href="cliente_su_pagina.php">Mi cuenta</a>
								<a href="sitios.php">Sitios </a>
                                <a href="finanzas.php">Finanzas</a>
								<a href="estadisticas.php">Estadisticas</a> 
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
		<!--/Container-->
		<div class="container" style="padding-top: 40px;">
			<div class="col-md-12 text-center">
				<label>Registro de usuarios.</label>
			</div>
			<div class="row" style="padding-top: 40px;">
				<div class="col-md-7 col-md-offset-2">
					<form class="form-horizontal" id="registro" name="registro" method="post" action="script_guardar_turista.php">
						<!--Primer elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Numero Sitio:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<select class="form-control" input type="text" name='sitio' requerid > 
									<?php
										$idUserSession = $_SESSION['id_Usuario'];
										include("conexion.php") ;
									
										$con=conectar();
										$query= "SELECT * from acampach_contabilidad.Sitios si
											inner join acampach_contabilidad.camping cam on
											cam.idcamping = si.Id_camping 
											inner join acampach_contabilidad.Cuentas_Usuarios cu on
											cu.Rut = cam.Cuentas_Usuarios_Rut 
											INNER JOIN acampach_contabilidad.Usuario user on 
											user.Cuentas_Usuarios_Rut = cu.Rut 
											WHERE
											user.Rut = '16946263-1' and
											si.ESTADO = 'DISPONIBLE' ";
									
										$rec=mysql_query($query);
									
										while($row=mysql_fetch_array($rec)){
											echo"<option value='".$row['ID_SITIOS']."'>".$row['NUMERO_SITIO']."</option>";
										} 
										if ( $row['ID_SITIOS'] != NULL ){
											header("location:sitios.php");
										}
									?>
								</select>
							</div>
						</div>
						<!--Segundo elemento-->
						 
						<!--Tercer elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Rut:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="rut" id="rut" required placeholder="11111111-1" onblur="onRutBlur(this);" maxlength="10" />
							</div>
						</div>
						<!--Cuarto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Nombre:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Nombre Completo" onkeypress="return soloLetras(event)" title="Solo se permiten letras" maxlength="25" />
							</div>
						</div>
						<!--Quinto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Telefono:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="telefono" id="telefono"  onKeyPress="return soloNumeros(event)" required title='Solo se permiten números'  maxlength="9" />
							</div>
						</div>
						<!--Sexto elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Direccion:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="direccion" id="direccion" required placeholder="Calle #Numero"  onKeyPress="return validaDireccion(event)"  maxlength="25" />
							</div>
						</div>
						<!--Septimo elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Ciudad:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="ciudad" id="ciudad" required onkeypress="return soloLetras(event)" title="Solo se permiten letras"  maxlength="15" />
							</div>
						</div>
						<!--Octavo elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Acompañantes:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="acompa" id="acompa"  onKeyPress="return soloNumeros(event)" required title='Solo se permiten números' maxlength="3" />
							</div>
						</div>
						<!--Noveno elemento-->
					 
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Fecha salida:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7" >
                            <input type="date" name="fechasalida" id="fechasalida" min='+fechaMin+' required />	
							</div>
						</div>
						<!--Undecimo elemento-->
						<div class="form-group">
							<label for="nombre" class="col-sm-4 control-label">Valor:</label>
							<label class="col-sm-1"></label>	
							<div class="col-sm-7">
								<input class="form-control" type="text" name="valor" id="valor"  onKeyPress="return validaValor(event)" required title='Solo se permiten números'  maxlength="8"  />
							</div>
						</div>
						<!--Duodecimo elemento Boton enviar-->
						<div class="form-group">
							<div class="col-sm-7 col-md-offset-5">
								<input class="btn btn-default totalWidth" name="btn_enviar" type="submit" id="btn_enviar" value="Registrar Arriendo" />
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
				
			}else{
				alert("Rut incorrecto");
				document.registro.rut.value = "";
			}
		}
	</script>
	
</html>