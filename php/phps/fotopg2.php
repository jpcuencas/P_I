<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
$produccion=false;
$ffoto=(isset($_POST['ffoto']) ? $_POST['ffoto']="");
if(fEsVacio($ffoto))
	{
			//funcion msgError(control,texto) para la seleccion la foto en foto
			/*alert("Debe selecionar una foto");*/
			msgError('ffoto',"Debe selecionar una foto");

	}
	else
	{
		print_r($ffoto,$produccion);
	}

?>