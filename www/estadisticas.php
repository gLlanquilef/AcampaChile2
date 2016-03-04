<!DOCTYPE HTML>
<html>
	<head>
		<title>Estadisticas</title>
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
	body{
		transparent:none !important;
			 background-image: url("imagenes/Background/background.jpg");
			 height: 100%;
			 width: 100%;
			 background-attachment: fixed;
			 background-repeat: no-repeat;
			 background-clip: border-box;
	}	
	.totalWidth{
		width:100%;
	}
	label{
		font-size: 23px;
		font-weight:bold !important;
		color: white;
		text-shadow: black 0.1em 0.1em 0.2em;
	}
	space{
		padding-top: 40px !important;
		padding-button: 40px !important;
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
								<a href="registra_usuario.php">registrar cliente</a> 
								<a href="sitios.php">sitios </a>
								<a href="finanzas.php">finanzas</a>
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
	   <div id="main">			
			<div class="container">
				<section>
                    <form class="form-horizontal" action="script_accesso_cliente.php"   method="post" >
                    </form>
					<table class="table table-condenced">
						<tbody>
						<form class="form-horizontal" id="form1" name="form1" method="post" action="">
							<tr>	
								<td  colspan="2">
                                <label>Obtener Balances Financieros</label>
                                </td>
							</tr>
							<tr>
								<td>
									<label for="fecha_inicio">Fecha Inicio</label>
									<input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio"  required />
								</td>
								<td>
	                                <label>Fecha Termino:</label>	
									<input class="form-control" type="date" name="fecha_inicio2" id="fecha_inicio2"  required/>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input class="form-control" type="submit" name="btn_balance" id="btn_balance" value="Obtener Balance" />
								</td>
							</tr>
						</form>
						<tr>
							<td>
                            	<label>Obtener Clientes Frecuentes</label>
							</td>
							<td>
                            	<form class="form-horizontal" id="form2" name="form1" method="post" action="script_estadisticas.php" target="framebalances">
								    <input class="form-control" type="submit" name="btn_balance2" id="btn_balance2" value="Clientes Frecuentes" />
								</form>
                            </td>
						</tr>
						<tr>
							<td>
                            	<label>Obtener Ciudades Con Mas Visitas al Camping</label>
                            </td>
							<td>
								<form class="form-horizontal" id="form3" name="form1" method="post" action="script_estadisticas.php" target="framebalances">
									<input class="form-control" type="submit" name="btn_balance3" id="btn_balance3" value="Ciudades Frecuentes" />
								</form>
							</td>
						</tr>
						<tr>
							<td>
                            	<label>Obtener Regiones Con Mas Visitas al Camping</label>
                            </td>
							<td>
								<form class="form-horizontal" id="form4" name="form1" method="post" action="">
									<input class="form-control" type="submit" name="btn_balance4" id="btn_balance4" value="Regiones Frecuentes" />
								</form>
							</td>
						</tr>
						<form class="form-horizontal" id="form5" name="form1" method="post" action="">
							<tr>
								<td>
	                                <label>Buscar Cliente</label>
                                </td>
								<td>
                                	<label>RUT:</label>
                                    <input class="form-control" type="text" name="fecha_inicio3" id="fecha_inicio3" maxlength="10" required/>
								</td>		
							</tr>	
							<tr>			
								<td colspan="2">
									<input class="form-control" type="submit" name="btn_balance5" id="btn_balance5" value="Buscar Cliente" />	
								</td>
							</tr>
						</form>
					</tbody>
				</table>
		</section>
	</div>
</div>
</body>
</html>