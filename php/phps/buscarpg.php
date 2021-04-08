<?php
$produccion=false;
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
//include_once("buscar.php");
//imagenes de busqueda
$bFdia=(isset($_POST['bFdia']) ? $_POST['bFdia']:"");
	$bFmes=(isset($_POST['bFmes']) ? $_POST['bFmes']:"");
	$bFanio=(isset($_POST['bFanio']) ? $_POST['bFanio']:"");
	$bFdia2=(isset($_POST['bFdia2']) ? $_POST['bFdia2']:"");
	$bFmes2=(isset($_POST['bFmes2']) ? $_POST['bFmes2']:"");
	$bFanio2=(isset($_POST['bFanio2']) ? $_POST['bFanio2']:"");
	$bPais=(isset($_POST['bPais']) ? $_POST['bPais']:"");
	$bTitulo=(isset($_POST['bTitulo']) ? $_POST['bTitulo']:"");

	$dia1=sustituirAcento($bFdia);
	$mes1=sustituirAcento($bFmes);
	$anio1=sustituirAcento($bFanio);
	
	$dia2=sustituirAcento($bFdia2);
	$mes2=sustituirAcento($bFmes2);
	$anio2=sustituirAcento($bFanio2);
	
	$bPais=sustituirAcento($bPais);
	$bTitulo=sustituirAcento($bTitulo);
	//if(document.getElementById('bTitulo').value!="")
	//{
		if(validarFecha($dia1,$mes1,$anio1))
		{
			//if(validarDate(dia2,mes2,anio2))
			if(validarFecha($dia2,$mes2,$anio2))
			{
				header("Location: Aviso.php");			
				//TODO CORRECTO REALIZAR BUSQUEDA
				include_once("phps/includes/Busquedaphp.php");
			}
			else
			{
				//msgError('bFdia2',"La segunda fecha es incorrecta");
				//document.getElementById('bFdia2').focus();
			}
		}
		else
		{
			//msgError('bFdia',"La primera fecha es incorrecta");
			//document.getElementById('bFdia').focus();
		}
	//}
	//else
	/*{
			msgError('bTitulo',"El titulo debe tener valor");
			document.getElementById('bTitulo').focus();
	}*/	


?>