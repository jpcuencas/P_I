<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
$produccion=false;
$name=(isset($_POST['name']) ? $_POST['name']="");
$cEmail=(isset($_POST['cEmail']) ? $_POST['cEmail']="");
$comment=(isset($_POST['comment']) ? $_POST['comment']="");
	$name=sustituirAcento($name);
	$cEmail=sustituirAcento($cEmail);

	$comment=validartexto($comment);
	if(validarEmail($cEmail))
	{
		//funcion msgError(control,texto) para el email en registro
		msgError('cEmail',"No es un Email valido");
	}
	else
	{
		print_r($name,$produccion);
		print_r($cEmail,$produccion);
		print_r($comment,$produccion);
	}

?>