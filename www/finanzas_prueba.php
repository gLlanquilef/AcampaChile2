<?php include("conexion.php") ;
	$con=conectar();
?>
<!DOCTYPE html PUBLIC "-//W3C//Dth XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dth/xhtml1-transitional.dth">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Finanzas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	    <style>
		#background {
			background-image: url("imagenes/Background/background.jpg") !important;
			height: 100% !important;
			width: 100% !important;
			background-attachment: fixed !important;
			background-repeat: no-repeat !important;
			}
		</style>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
    </head>
<body class="homepage">
	<!-- Header -->
	<div id="header">
		<div class="container">
			<!-- Logo -->
			<div id="logo">
				<div id="banner"><a href="#" class="image featured"><img src="imagenes/Campings/banner.png"></a></div>
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
   	<!--/Header-->	
	<!--Tabla ingreso-->	
	<div align="center">
		<form action="script_inserta_cuentas.php" method="post" name="INSERTA">
			<table width="100%">
				<tr>
					<th width="25%" align="center" valign="top">Cuenta</th>
					<th width="25%" align="center" valign="top">Fecha Vencimiento</th>
					<th width="25%" align="center" valign="top">Monto</th>
					<th width="25%" rowspan="2" align="center" valign="middle"><input name="btn_ingresa" type="submit" id="btn_ingresa" value="Registrar"/></th>
				</tr>
				<tr>
					<th width="25%" align="center">
						<select name='cuenta_id' >
							<?php
							$cuenta= "SELECT * FROM acampach_proyecto.Cuentas_Egresos WHERE NOMBRE_CAMPING='Los Maitenes'";
							$result=mysql_query($cuenta);
							while($row=mysql_fetch_array($result))
								{
								echo"<option value='".$row['Idcuentas_Egresos']."'>".$row['NOMBRE_CUENTA']."</option>";
								}
							?>
						</select>
					</th>
					<th width="25%" align="center">
						<input type="date" name="vencimiento" />
					</th>
					<th width="25%" align="center">
						<input type="text" name="monto"   />
					</th>
				</tr>
			</table>
		</form>
	</div>
	<!--/Tabla ingreso cuentas-->
	
	<!--Tabla cuentas registradas-->
	<div align="center">
		<form   name="ESTADO" action="script_pagar_cuenta2.php" method="post">
			<table width="100%" style="background-color:#B7B7B7"  border="0">
				<tr>
					<th width="10%" align="center">Cuenta</th>
					<th width="10%" align="center">Estado</th>
					<th width="10%" align="center">Pagada</th>
					<th width="10%" align="center">No Pagada</th>
					<th width="10%" align="center">Fecha de Vencimiento</th>
					<th width="10%" align="center">Monto </th>
					<th width="10%" align="center">Fecha que se Pagó
					<input type="hidden" name="cantidad" id="hiddenField" value="6" /></th>
				</tr>
			</table>
			<?php
				$query2= "SELECT * FROM acampach_proyecto.Cuentas_Egresos where NOMBRE_CAMPING= 'Los Maitenes'";
				$rec=mysql_query($query2);
				while($row=mysql_fetch_array($rec)){
						echo "<table  width='100%'> ";
						echo "<tr>";
							//CUENTA
							echo "<th  width='10%' align='center'>";
							echo $row['NOMBRE_CUENTA'];
							echo "<input type='hidden' name='cuenta' value='".$row['Idcuentas_Egresos']."' />";
							echo "</th>";
							//ESTADO
							if ($row['ESTADO'] <> 'PAGADO')
							{
							echo "<th  width='10%' align='center' class='ocupado'>";
							echo $row['ESTADO'];
							echo "</th>";
							}
							else
							{
							echo "<th  width='10%' align='center' class='disponible'>";
							echo $row['ESTADO'];
							echo "</th>";
							}
							//PAGADO
							echo "<th width='10%' align='center'>";
							if ($row['ESTADO'] <> 'PAGADO'){
								echo "<input type='radio' name='ESTADO' value='PAGADO'>";
							}
							echo "</th>";	
							//NO_PAGADO
							echo "<th width='10%' align='center'>";
							if ($row['ESTADO'] <> 'NO_PAGADO'){
								echo "<input type='radio' name='ESTADO' value='NO_PAGADO'>";
							}
							echo "</th>";	
							//FECHA VENCIMIENTO
							echo "<th  width='10%' align='center'>";
									$date = $row['FECHA_VENCIMIENTO'];
									$fecha = date_create($date);
									echo date_format($fecha, 'd-m-Y');
									echo "</th>";
									//MONTO
									echo "<th  width='10%' align='center'>";
									echo $row['MONTO'];
									echo "</th>";
									//FECHA PAGADO
									echo "<th  width='10%' align='center'>";
									$date2 = $row['FECHA_PAGO'];
									$fecha2 = date_create($date2);
									echo date_format($fecha2,'d-m-Y');
							echo "</th>";
						echo "</tr>";
					echo "</table>";
				}
			?>   
			<input name="btn_actualiza" type="submit" id="btn_actualiza" value="actualiza"/>
		</form>
	</div>
</body>
</html>