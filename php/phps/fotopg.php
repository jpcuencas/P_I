<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
$produccion=false;
$ffoto=(isset($_POST['ffoto']) ? $_POST['ffoto']="");
	$Ccomentario=(isset($_POST['Ccomentario']) ? $_POST['Ccomentario']="");
	$ftitulo=(isset($_POST['ftitulo']) ? $_POST['ftitulo']="");
	$cpais=(isset($_POST['cpais']) ? $_POST['cpais']="");
$falbum=(isset($_POST['falbum']) ? $_POST['falbum']="");
	$Ccomentario=validartexto($Ccomentario);
	$ftitulo=sustituirAcento($ftitulo);
	$cpais=sustituirAcento($cpais);
	
	$ffoto=(isset($_POST['ffoto']) ? $_POST['ffoto']="");
	
if(!fEsVacio($ffoto))
{
	if(!fEsVacio($ftitulo))
	{
		$ftitulo=sustituirAcento($ftitulo);
		if($falbum!=0)
		{
		
			if(fEsVacio($ffoto))
			{
					//funcion msgError(control,texto) para la seleccion la foto en foto
					/*alert("Debe selecionar una foto");*/
					msgError('ffoto',"Debe selecionar una foto");

			}
			else
			{
				print_r($ffoto,$produccion);
							//SI TODO ES CORRECTO PARA SUBIR LA FOTO
				//alert("todo correcto para subir foto esta")
				print_r($ffoto,$produccion);
				print_r($ftitulo,$produccion);
				print_r($falbum,$produccion);
				print_r($cpais,$produccion);
				header("Location: ../phps/includes/Fotophp.php");
			}

		}
		else
		{
			//funcion msgError(control,texto) para la seleccion del album en foto
			/*alert("Debe selaccionar un album valido");*/
			header("Location: Aviso.php?e=17");
		}
		
	}
	else
	{
		//funcion msgError(control,texto) para el titulo en foto
		/*alert("El titulo no puede estar vacio");*/
		header("Location: Aviso.php?e=17");
	
	}
		//formulariofotoft();
}
else
{
			//funcion msgError(control,texto) para la seleccion la foto en foto
			/*alert("Debe selecionar una foto");*/
			header("Location: Aviso.php?e=17");

	
}
?>