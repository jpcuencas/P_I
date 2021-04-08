<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
$produccion=false;
$crtitulo=(isset($_POST['crtitulo']) ? $_POST['crtitulo']="");
$crAcesso=(isset($_POST['crAcesso']) ? $_POST['crAcesso']="");
$crpais=(isset($_POST['crpais']) ? $_POST['crpais']="");
$crdescripcion=(isset($_POST['crdescripcion']) ? $_POST['crdescripcion']="");
die();
	if(!fEsVacio($crtitulo))
	{
		$crtitulo=sustituirAcento($crtitulo);
		if($crAcesso!="")
		{
			//SI TODO ES CORRECTO PARA CREAR EL ALBUM
			print_r($crtitulo,$produccion);
			print_r($crAcesso,$produccion);
			print_r($crpais,$produccion);
			print_r($crdescripcion,$produccion);
			header("Location: includes/Cralbumphp.php");
		}
		else
		{
			//funcion msgError(control,texto) por si fallara el modo de acesso en crear album
			/*alert("Debe seleccionar un modo de acceso");*/
			header("Location: pg/Aviso.php?e=25");
			
		}
	}
	else
	{
		//funcion msgError(control,texto) para el titulo en crear album
		/*alert("El titulo no puede estar vacio");*/
		header("Location: Aviso.php?e=25");	
	}
	$crpais=sustituirAcento($crpais);
	$crdescripcion=validartexto($crdescripcion);

?>