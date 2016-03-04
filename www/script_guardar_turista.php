<?php
include("validaSesion.php");  
include("conexion.php") ;
$con=conectar();

//rebicir y guardamos los datos
$id_arriendo = 2;
$id = $_POST['id'];
$sitio = $_POST['sitio'];
$rut= $_SESSION['id_Usuario'];
$nombre= $_POST['nombre'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$ciudad= $_POST['ciudad'];
$acompa= $_POST['acompa'];
$valor= $_POST['valor'];
$fechaentrada= date('Y-m-d'); 
$fechasalida=$_POST['fechasalida']; 
//validamos que los campos no vengan nulos
if(isset($rut)){


$sql_insertar="INSERT acampach_contabilidad.Arriendo_sitios  SET Sitios_ID_SITIOS='$sitio', Usuario_Rut='$id', Rut_Cliente='$rut', Nombre_Cliente='$nombre', Telefono_Cliente='$telefono',Direccion_Cliente='$direccion', Ciudad_Cliente='$ciudad', Acompa='$acompa', fecha_entrada='$fechaentrada', fecha_salida='$fechasalida'";


 $sql_insertarIngreso="INSERT acampach_contabilidad.Cuentas_Ingresos SET Fecha_Ingreso='$fechaentrada', 
Monto_Pagado='$valor', id_usuario='$id'";


$sql_update="UPDATE acampach_contabilidad.Sitios si
				inner join acampach_contabilidad.camping cam on
				cam.idcamping = si.Id_camping 
				inner join acampach_contabilidad.Cuentas_Usuarios cu on
				cu.Rut = cam.Cuentas_Usuarios_Rut 
				INNER JOIN acampach_contabilidad.Usuario user on 
				user.Cuentas_Usuarios_Rut = cu.Rut
				set si.ESTADO = 'OCUPADO' ,
				  si.fecha_salida='$fechasalida' ,
				  fecha_entrada='$fechaentrada'
				WHERE
				user.Rut = '$rut'
				and
				si.ID_SITIOS = '$sitio'";

mysql_query($sql_insertarIngreso,$con) or die (mysql_error());
mysql_query($sql_update,$con) or die (mysql_error());
mysql_query($sql_insertar,$con) or die (mysql_error());
				echo "Exito al Guardar";
				header("location:registra_usuario.php");
				}
				else
				{
				header("location:error.php");
				}
				


 
 
$con ->close();
				
?>