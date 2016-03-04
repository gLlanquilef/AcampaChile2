<?php
if(isset($_POST["nombre"])&&($_POST["correo"]!='')&&($_POST["telefono"]!='')&&($_POST["mensaje"]!='')){
	$nombre = $_POST["nombre"];
	$email	= $_POST["correo"];
	$telefono=$_POST["telefono"];
	$mensaje=$_POST["mensaje"];
	//Contenido del Mensaje
	$titulo = "Su mensaje ha sido recibido por el equipo de AcampaChile";
	$contenido= "Sr. (a)" .$nombre." el mensaje enviado a través del formulario de contacto ha sido recibido, contenido: ".$mensaje.". Nos podremos en contacto con usted a la brevedad. Atte. Equipo AcampaChile.";
		
	$envio = mail($email,$titulo,$contenido);
		if($envio == true){	
			header('location: contacto.php');
		}else{
			echo "Error al enviar el mensaje";
		}			
}else{
	echo "Completa todos los Campos del Formulario porfavor";
}
?>