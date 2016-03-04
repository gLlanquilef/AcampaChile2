<?php

include("conexion.php") ;
$con=conectar();

//rebicir y guardamos los datos
$rut= $_POST['rut'];
$nombre= $_POST['nombre'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$ciudad= $_POST['ciudad'];
$pass= $_POST['pass'];
$cargo=$_POST['cargo'];
$date = date('d-m-Y'); 
//validamos que los campos no vengan nulos
if(isset($rut)){


$sql_insertar="INSERT acampach_proyecto.Cliente  SET rut='$rut', nombre='$nombre', telefono='$telefono', direccion='$direccion', ciudad='$ciudad', pass='$pass',id_cargo='$cargo', fecha_registro='$date'";

mysql_query($sql_insertar,$con) or die (mysql_error());
				header("location:registra_cliente.php");
				}
				else
				{
				header("location:registra_cliente.php");
				}
$con ->close();
				
?>