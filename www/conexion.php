

<?php
//conexion a la bd
function conectar()
{	
$user="acampach";
$pass="Chileacampa15";
$server="localhost";
$db="acampach_proyecto";
$con=mysql_connect($server,$user,$pass) or die ("Error :(".mysql_error());
mysql_select_db($db,$con);

return $con;
	
}
?>

