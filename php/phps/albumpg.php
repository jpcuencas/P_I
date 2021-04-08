<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
$produccion=false;
		$fotoalbum=(isset($_POST['fotoalbum']) ? $_POST['fotoalbum']="");
	if(fEsVacio($fotoalbum))
	{
			//funcion msgError(control,texto) para la seleccion la foto en foto
			msgError('fotoalbum',"Debe selecionar una foto");
	}
	else
	{
		print_r($fotoalbum,$produccion);
	}
?>