function formularioAlbumft()
{
	if(fEsVacio(document.getElementById('fotoalbum').value))
	{
			//funcion msgError(control,texto) para la seleccion la foto en foto
			/*alert("Debe selecionar una foto");*/
			msgError('fotoalbum',"Debe selecionar una foto");
			document.getElementById('fotoalbum').focus();
	}
	else
	{
		document.forms[1].submit();
	}
}