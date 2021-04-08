function formularioContacto()
{
	document.getElementById('name').value=sustituirAcento(document.getElementById('name').value);
	document.getElementById('cEmail').value=sustituirAcento(document.getElementById('cEmail').value);

	document.getElementById('comment').value=validartexto(document.getElementById('comment').value);
	if(validarEmail(document.getElementById('cEmail').value))
	{
		document.getElementById('cEmail').focus();
		//funcion msgError(control,texto) para el email en registro
		msgError('cEmail',"No es un Email valido");
	}
				

}