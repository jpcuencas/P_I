/*funcion para validar el formulario de CrearAlbum*/
function formulacioCrearAlbum()
{
	if(!fEsVacio(document.getElementById('crtitulo').value))
	{
		document.getElementById('crtitulo').value=sustituirAcento(document.getElementById('crtitulo').value);
		if(document.getElementById('crAcesso').value!="")
		{
			//SI TODO ES CORRECTO PARA CREAR EL ALBUM
		}
		else
		{
			//funcion msgError(control,texto) por si fallara el modo de acesso en crear album
			/*alert("Debe seleccionar un modo de acceso");*/
			msgError('crtitulo',"El album debe tener un titulo");
			document.getElementById('crtitulo').focus();
			
		}
	}
	else
	{
		//funcion msgError(control,texto) para el titulo en crear album
		/*alert("El titulo no puede estar vacio");*/
		msgError('crAcesso',"Seleccione un modo de acceso");
		document.getElementById('crAcesso').focus();
	
	}
	document.getElementById('crpais').value=sustituirAcento(document.getElementById('crpais').value);
	document.getElementById('crdescripcion').value=validartexto(document.getElementById('crdescripcion').value);
}