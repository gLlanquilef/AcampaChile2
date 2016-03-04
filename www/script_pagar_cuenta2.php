<?php
	include("conexion.php") ;
	$con=conectar();
	//traigo los datos
	$cuenta = $_GET['cuenta'];
	$estado1 =$_POST['estado_pagado'];
	$estado2 =$_POST['estado_no_pagado'];
	$date = date('d-m-y');
	
	echo $_GET['cuenta'];
	
	$sql_validar= sprintf("SELECT * FROM acampach_proyecto.Cuentas_Egresos WHERE Idcuentas_Egresos='".$cuenta."'	AND NOMBRE_CAMPING='Los Maitenes'"
	);
	echo $sql_validar;
	
	$result=mysql_query($sql_validar);
	while($row=mysql_fetch_array($result)){
		if($row['ESTADO'] == 'PAGADO'){
			$sql_actualiza=	sprintf("UPDATE acampach_proyecto.Cuentas_Egresos SET ESTADO='%s',FECHA_VENCIMIENTO='%s'
			WHERE Idcuentas_Egresos='%s' AND NOMBRE_CAMPING='Los Maitenes'",
			mysql_real_escape_string($estado1),
			mysql_real_escape_string($date),
			mysql_real_escape_string($cuenta)
			);	
		}else{
			$sql_actualiza=	sprintf("UPDATE acampach_proyecto.Cuentas_Egresos SET ESTADO='%s', FECHA_VENCIMIENTO='%s' WHERE Idcuentas_Egresos='%s' AND NOMBRE_CAMPING='Los Maitenes'",
			mysql_real_escape_string($estado2),
			mysql_real_escape_string($date),
			mysql_real_escape_string($cuenta)
			);
			}
	}
	mysql_query($sql_actualiza,$con) or die (mysql_error());
	header("location:finanzas.php");
?>



