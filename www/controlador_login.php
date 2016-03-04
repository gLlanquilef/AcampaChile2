<?

/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */

include("conexion.php") ;

$con=conectar();





/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 

$myusuario = mysql_query("select Rut from Cliente where Rut = '".htmlentities($_POST["rut"])."'",$con); 

$nmyusuario = mysql_num_rows($myusuario); 



//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 

if($nmyusuario != 0)
{ 
  $sql = "select Rut from Cuentas_Usuarios where Rut = '".htmlentities($_POST["rut"])."' and Contraseña = '".(htmlentities($_POST["pass"]))."'"; 
  $myclave = mysql_query($sql,$con); 
  $nmyclave = mysql_num_rows($myclave); 
  $sql = "select Id_Cargo from Cuentas_Usuarios where Rut = '".htmlentities($_POST["rut"])."' and Contraseña = '".(htmlentities($_POST[		
		    "pass"	]))."'";
	$typocuenta = mysql_query($sql,$con); 
    $typocuenta = mysql_fetch_row($typocuenta); 
	
	 $sql = "select habilitado from Cuentas_Usuarios where Rut = '".htmlentities($_POST["rut"])."' and Contraseña = '".(htmlentities($_POST[		
		    "pass"	]))."'";
	$habilitado = mysql_query($sql,$con); 
    $habilitado = mysql_fetch_row($habilitado); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
	  $_SESSION["id_Usuario"]= $_POST["rut"];
	  
	  $_SESSION["tipo"]= $typocuenta;
 
	   $admin = 1; 
	   
	   $user = 2; 
	   
	   $hab = SI; 
	   
	   $rutadmin = '16946263-1';
	    
		
	if ($typocuenta[0]  ==  $admin) { 
      //Direccionamos a nuestra página principal del sistema. 
	   header ("Location: admin_su_pagina.php"); 
      
	 
	} else {
			if($typocuenta[0]  !=  $admin) { 
			header ("Location: cliente_su_pagina.php");
		}
			 
		}
   }
   else{ 
      echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"login.php\"</script>"; 
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); window.location.href=\"login.php\"</script>"; 
}

mysql_close($link); ?>