function validarregistro(registro)
{
	if(registro.rut.value.length==0) 
		{
			registro.rut.focus();
			alert('No has Ingresado el Rut del Cliente');
			return false;	
		}	
		
	if(registro.nombre.value.length==0) 
		{
			registro.nombre.focus();
			alert('No has Ingresado el Nombre del Cliente');
			return false;	
		}		
		
	if(registro.telegono.value.length==0) 
		{
			registro.telefono.focus();
			alert('No has Ingresado el Telefono del Cliente');
			return false;	
		}		
		
	if(registro.direccion.value.length==0) 
		{
			registro.direccion.focus();
			alert('No has Ingresado la Direccion del Cliente');
			return false;	
		}		
		
	if(registro.pass.value.length==0) 
		{
			registro.pass.focus();
			alert('No has Ingresado la Contraseña del Cliente');
			return false;	
		}		
		
		
		
		return true // todo ok
}