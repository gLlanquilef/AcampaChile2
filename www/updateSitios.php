<?php
include("conexion.php") ;
$con=conectar();
//session_start();
//$id = $_REQUEST["CERRAR"];
$numero = $_REQUEST["cantidad"];
$camping = $_REQUEST["camping"];
$date = date('d-m-Y');
$fecha_salida=$_REQUEST["fecha_salida"];
$sitio = $_REQUEST["sitio"];
echo $camping."<br>";
for ($i = 1; $i <= $numero; $i++)
{
	
	$sitio_num[$i] = $_REQUEST["sitio".$i.""];
	$estado[$i] = $_REQUEST["ESTADO".$i.""];
	echo "sitio ".$sitio_num[$i]." ";
	if (isset($estado[$i]))
		{
			echo "Pasa a :".$estado[$i]."<br>";
			$sql_actualizar="UPDATE acampach_contabilidad.Sitios si
				inner join acampach_contabilidad.camping cam on
				cam.idcamping = si.Id_camping 
				inner join acampach_contabilidad.Cuentas_Usuarios cu on
				cu.Rut = cam.Cuentas_Usuarios_Rut 
				INNER JOIN acampach_contabilidad.Usuario user on 
				user.Cuentas_Usuarios_Rut = cu.Rut				
				set si.fecha_salida = NULL,
				si.ESTADO = 'DISPONIBLE'
				WHERE user.Rut = '169462631' AND
				si.ID_SITIOS = '$sitio_num[$i]' ;";
				 
			mysql_query($sql_actualizar,$con) or die (mysql_error());
		}
}

header("location:sitiosNew.php");
$con ->close();			
?>