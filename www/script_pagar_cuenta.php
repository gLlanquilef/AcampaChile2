<?php
include("conexion.php") ;
$con=conectar();
//traigo los datos
$date = date('Y-m-d');
$numero = $_POST["cantidad"];
for ($i = 1; $i <= $numero; $i++)
{
	$sitio_num[$i] = $_REQUEST["cuenta".$i.""];	
	$estado[$i] = $_REQUEST["ESTADO".$i.""];
	if (isset($estado[$i]))
	{	
	$sql_actualizar="UPDATE acampach_proyecto.Cuentas_Egresos SET ESTADO='$estado[$i]',FECHA_PAGO='$date'
	WHERE Idcuentas_Egresos='$sitio_num[$i] ' AND NOMBRE_CAMPING='Los Maitenes';";
	mysql_query($sql_actualizar,$con) or die (mysql_error());
	header("location:finanzas.php");
	}
}
		
		
?>



