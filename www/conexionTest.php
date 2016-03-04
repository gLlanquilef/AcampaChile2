<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conecta</title>
</head>

<body>

<?php
//conexion a la bd
function conectar()
{	
$user="acampach";
$pass="Chileacampa15";
$server="localhost";
$db="acampach_contabilidad";
$con=mysql_connect($server,$user,$pass) or die ("Error :(".mysql_error());
mysql_select_db($db,$con);

return $con;
	
}
?>

</body>
</html>