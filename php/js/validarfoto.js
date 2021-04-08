function formularioFoto()
{
	document.getElementById('Ccomentario').value=validartexto(document.getElementById('Ccomentario').value);
	document.getElementById('ftitulo').value=sustituirAcento(document.getElementById('ftitulo').value);
	document.getElementById('cpais').value=sustituirAcento(document.getElementById('cpais').value);
	if(!fEsVacio(document.getElementById('ftitulo').value))
	{
		document.getElementById('ftitulo').value=sustituirAcento(document.getElementById('ftitulo').value);
		if(document.getElementById('falbum').value!=0)
		{
			//SI TODO ES CORRECTO PARA SUBIR LA FOTO
			if(fEsVacio(document.getElementById('ffoto').value))
			{
					//funcion msgError(control,texto) para la seleccion la foto en foto
					/*alert("Debe selecionar una foto");*/
					msgError('ffoto',"Debe selecionar una foto");
					document.getElementById('ffoto').focus();
			}
			else
			{
				document.forms[1].submit();
			}
		}
		else
		{
			//funcion msgError(control,texto) para la seleccion del album en foto
			/*alert("Debe selaccionar un album valido");*/
			msgError('falbum',"Seleccione un album");
			document.getElementById('falbum').focus();
		}
		
	}
	else
	{
		//funcion msgError(control,texto) para el titulo en foto
		/*alert("El titulo no puede estar vacio");*/
		msgError('ftitulo',"La foto debe tener un titulo");
		document.getElementById('ftitulo').focus();
	
	}
		//formulariofotoft();
}

function formulariofotoft()
{
	if(fEsVacio(document.getElementById('ffoto').value))
	{
			//funcion msgError(control,texto) para la seleccion la foto en foto
			/*alert("Debe selecionar una foto");*/
			msgError('ffoto',"Debe selecionar una foto");
			document.getElementById('ffoto').focus();
	}
}