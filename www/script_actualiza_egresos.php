<?php
include("conexion.php") ;
$con=conectar();
//FORMULARIO 1
$cuenta = $_POST["cuenta"];
$vencimiento = $_POST["fecha_vencimiento"];
$monto =$_POST["monto"];
$descripcion = $_POST["descripcion"];
//FORMULARIO 2
$numero = $_REQUEST["cantidad"];
$camping = $_REQUEST["camping"];
$date = date('d-m-Y');
$fecha_salida=$_REQUEST["fecha_salida"];












echo $camping."<br>";
for ($i = 1; $i <= $numero; $i++)
{
	echo "sitio ".$i." ";
	$sitio_num[$i] = $_REQUEST["sitio".$i.""];
	$estado[$i] = $_REQUEST["ESTADO".$i.""];
	if (isset($estado[$i]))
		{
			echo "Pasa a :".$estado[$i]."<br>";
			$sql_actualizar="UPDATE acampach_proyecto.Sitios SET ESTADO = '$estado[$i]', FECHA_ENTRADA='$date', FECHA_SALIDA='$fecha_salida' WHERE NOMBRE_CAMPING = '$camping' AND NUMERO_SITIO = '$sitio_num[$i]';";
			mysql_query($sql_actualizar,$con) or die (mysql_error());
		}
}

header("location:sitios.php");
$con ->close();			
?>
			


