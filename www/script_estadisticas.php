<?php
include("conexion.php") ;
$con=conectar();
echo "<style type='text/css' scoped>
table.GeneratedTable {
width:80%;
background-color:#FFFFFF;
border-collapse:collapse;border-width:1px;
border-color:#336600;
border-style:dashed;
color:#009900;
}

table.GeneratedTable td, table.GeneratedTable th {
border-width:1px;
border-color:#336600;
border-style:dashed;
padding:3px;
}

table.GeneratedTable thead {
background-color:#CCFF99;
}
</style>";





if (isset($_REQUEST['btn_balance2'])) 
{ 
$querycliFrec = mysql_query("select Rut_Cliente, Nombre_Cliente, Telefono_Cliente, Ciudad_Cliente from acampach_contabilidad.Arriendo_sitios LIMIT 5",$con); 
echo "<table class='GeneratedTable'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
echo "<thead>";
echo "<tr>";//<tr> CREA UNA NUEVA FILA
echo "<th>Rut</th>";//<td> CREA NUEVA COLUMNA
echo "<th>Nombre</th>";
echo "<th>Telefono</th>";
echo "<th>Ciudad</th>";
echo "</tr>";
echo "</thead>";

$reg = mysql_fetch_array($querycliFrec, MYSQL_BOTH);//LA VARIABLE $REG GUARDA LOS REGISTROS DE LA CONSULTA REALIZADA
while($reg)
{
echo "<tr>";
echo "<td>".$reg[0]."</td>";//EN CADA CELDA SE COLOCA EL CONTENIDO DE REG
echo "<td>".$reg[1]."</td>";
echo "<td>".$reg[2]."</td>";
echo "<td>".$reg[3]."</td>";
echo "</tr>";
}

echo "</table>";//FINALIZA LA TABLA
}

if (isset($_REQUEST['btn_balance3'])) {
	  echo "<table class='GeneratedTable'>"; //EMPIEZA A CREAR LA TABLA CON LOS ENCABEZADOS DE TABLA
echo "<thead>";
echo "<tr>";//<tr> CREA UNA NUEVA FILA
echo "<th>Rut</th>";//<td> CREA NUEVA COLUMNA
echo "<th>Nombre</th>";
echo "<th>Telefono</th>";
echo "<th>Ciudad</th>";
echo "</tr>";
echo "</thead>";
echo "</table>";//FINALIZA LA TABLA  
	
}
mysql_close($con);

?>