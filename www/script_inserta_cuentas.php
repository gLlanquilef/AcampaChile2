<?php
include("conexion.php") ;
$con=conectar();
//traigo los datos
$cuenta = $_POST['cuenta_id'];
$vencimiento = $_POST['vencimiento'];
$monto =$_POST['monto'];

$sql_validar="SELECT * FROM acampach_proyecto.Cuentas_Egresos WHERE Idcuentas_Egresos='$cuenta' AND NOMBRE_CAMPING='Los Maitenes'";
$result=mysql_query($sql_validar);
while($row=mysql_fetch_array($result))
{
if($row['ESTADO'] == 'PAGADO')
	{
		$sql_actualiza="UPDATE acampach_proyecto.Cuentas_Egresos SET MONTO='$monto',FECHA_VENCIMIENTO='$vencimiento', ESTADO='NO_PAGADO' WHERE Idcuentas_Egresos='$cuenta' AND NOMBRE_CAMPING='Los Maitenes'";	
	}
else
	{
		$VALOR = $row['MONTO'] + $monto;
		$sql_actualiza="UPDATE acampach_proyecto.Cuentas_Egresos SET MONTO='$VALOR',FECHA_VENCIMIENTO='$vencimiento' WHERE Idcuentas_Egresos='$cuenta' AND NOMBRE_CAMPING='Los Maitenes'";		
	}
}
//QYUERY




mysql_query($sql_actualiza,$con) or die (mysql_error());
header("location:finanzas.php");
$con ->close();			

?>