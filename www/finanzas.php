<?php include("conexion.php") ;
 $con=conectar();
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
								<a href="contacto.php">contacto </a><a href="sitios.php">finanzas</a>
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
		<!--First table-->
		<div class="container" style="padding-top:30px;">
	<div class="row">
	  <div class="col-md-12">
					<form class="form-horizontal" action="script_inserta_cuentas.php" method="post" name="INSERTA">
						<div class="col-md-12">
							<div class="col-md-3">
								<div class="col-md-3" style="width:100%;">
									<label class="control-label">Cuenta</label>
								</div>
								<div class="col-md-3" style="width:100%;">
									<select name='cuenta_id' >
									<?php
										$cuenta= "SELECT * FROM acampach_proyecto.Cuentas_Egresos WHERE NOMBRE_CAMPING='Los Maitenes'";
										$result=mysql_query($cuenta);
										while($row=mysql_fetch_array($result)){
											echo"<option value='".$row['Idcuentas_Egresos']."'>".$row['NOMBRE_CUENTA']."</option>";
										}
									?>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="col-md-3" style="width:100%;">
									<label class="control-label">Fecha Vencimiento</label>
								</div>
								<div class="col-md-3" style="width:100%;">
									<input class="form-control" type="date" name="vencimiento" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="col-md-3" style="width:100%;">
									<label class="control-label">Monto</label>
								</div>
								<div class="col-md-3" style="width:100%;">
									<input class="form-control" type="text" name="monto"   />
								</div>
							</div>
							<div class="col-md-3">
								<div class="col-md-3" style="width:100%; padding-top:36px;"></div>
								<div class="col-md-3" style="width:100%;">
									<input class="btn btn-default totalWidth" name="btn_ingresa" type="submit" id="btn_ingresa" value="Registrar Cuenta"/>
								</div>
							</div>
					
				</div>	
                	</form>
	  </div>
		</div>
		<!--First table-->
		<!--Table rows-->
		<div class="container" style="padding-top:30px;">
			<table class="table table-condensed">
				<tr>
					<th width="16%" align="center">Cuenta</th>
					<th width="16%" align="center">Estado</th>
					<th width="16%" align="center">Fecha Vencimiento</th>
					<th width="16%" align="center">Monto </th>
					<th width="20%" align="center">Fecha que se Pagó</th>
                  <th width="10%" align="center">Pagar</th>
				</tr>
			</table>
		</div>
		<!--/Table rows-->
		<!--Table Content-->
		<div class="container" style="padding-top:30px;">
			<form   name="ESTADO" action="script_pagar_cuenta.php" method="post">
            
				<?php
					$NUM=1;
					$query2= "SELECT * FROM acampach_proyecto.Cuentas_Egresos where NOMBRE_CAMPING= 'Los Maitenes'";
					$rec=mysql_query($query2);
					while($row=mysql_fetch_array($rec)){
						echo "<table class='table table-condensed'> ";
							echo "<tr>";
								//CUENTA
								echo "<th  width='16%' align='center'>";
									echo $row['NOMBRE_CUENTA'];
									echo "<input type='hidden' name='cuenta".$NUM."' value='".$row['Idcuentas_Egresos']."' />";
								echo "</th>";
								
								//ESTADO
								if ($row['ESTADO'] <> 'PAGADO'){
								echo "<th  width='16%' align='center' class='ocupado'>";
									echo $row['ESTADO'];
								echo "</th>";
								}else{
									echo "<th  width='16%' align='center' class='disponible'>";
										echo $row['ESTADO'];
									echo "</th>";
								}
								
								//FECHA VENCIMIENTO
								echo "<th  width='16%' align='center'>";
									$date = $row['FECHA_VENCIMIENTO'];
									$fecha = date_create($date);
									echo date_format($fecha, 'd-m-Y');
								echo "</th>";
								
								//MONTO
								echo "<th  width='16%' align='center'>";
									echo $row['MONTO'];
								echo "</th>";
		
								//FECHA PAGADO
		
								echo "<th  width='20%' align='center'>";
									$date2 = $row['FECHA_PAGO'];
									$fecha2 = date_create($date2);
									echo date_format($fecha2,'d-m-Y');
								echo "</th>";
								
								//PAGADO
								echo "<th width='10%' align='center'>";
									if ($row['ESTADO'] <> 'PAGADO')
									{
									echo "<input type='radio' name='ESTADO".$NUM."' value='PAGADO' style='width:20px; height:20px'>";
									}
								echo "</th>";	
							echo "</tr>";
						echo "</table>";
						$NUM = $NUM + 1;
						$cantidad = $cantidad +1;
					}
					echo "<input type='hidden' name='cantidad' value='$cantidad'>";
				?>
				<span class="row-md-4 col-md-offset-5" style="padding-button:100px;">
				<input class="btn btn-default" type="submit" value="Registrar Pago" />
				</span>
   			  <div class="row-md-4 col-md-offset-5" style="padding-button:100px;"></div>
			</form>
		</div>
        <div class="row-md-12" style="padding-button:100px;"> 
        </div>
	</body>
</html>