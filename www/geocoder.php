<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geocodificacion</title>
<?php

function generateJSArray($list)
		{
			$JSArray = 'new Array(';
			$total = count($list);
			
			if ($total == 0)
			{
				return 'new Array()';
			}
			else
			{
				for ($i=0; $i<$total; $i++)
				{
					$JSArray .= $list[$i].',';
				}
				return substr($JSArray, 0, strlen($JSArray)-1).')';
			}
		}
require("config.php");

$output='';
//guardamos para mostrar por pantalla
$marketListLat = array();
$marketListLng = array();

$conexion = mysql_connect('localhost', BD_USER, BD_PASS);
if (!$conexion) {die("Error en la conexion a la BD:" .mysql_error());}


?>
</head>

<body>
</body>
</html>