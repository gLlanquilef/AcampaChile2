<?php


	
//conexion a bd
include("conexion.php") ;
$con=conectar();
	
		//consulto si existen en la bd
		$consulta= mysql_query("SELECT * FROM acampach_proyecto.Cliente WHERE Rut='".$rut."'AND Pass='".$pass."'");
		
		//guardar en arreglo el resultado de la consulta $consulta
		if($row = mysql_fetch_array($consulta))
		{
			header('location: registra_usuario.php');
							
			
		
		} else {
				header('location: registra_usuario.php');
			
			}
?>