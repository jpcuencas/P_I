<?php

	$bFdia=(isset($_POST['bFdia']) ? $_POST['bFdia']:"");
	$bFmes=(isset($_POST['bFmes']) ? $_POST['bFmes']:"");
	$bFanio=(isset($_POST['bFanio']) ? $_POST['bFanio']:"");
	$bFdia2=(isset($_POST['bFdia2']) ? $_POST['bFdia2']:"");
	$bFmes2=(isset($_POST['bFmes2']) ? $_POST['bFmes2']:"");
	$bFanio2=(isset($_POST['bFanio2']) ? $_POST['bFanio2']:"");
	$bPais=(isset($_POST['bPais']) ? $_POST['bPais']:"");
	$bTitulo=(isset($_POST['bTitulo']) ? $_POST['bTitulo']:"");

include_once("phpoo/BDclassconsulta.php");
$conexion= new bdconsulta;
$s="localhost";
$u="Publico";//$_COOKIE['pUsu']
$p="";//$_COOKIE['pPWD']
$e="pibd";
$res="";
$conexion->conectarBD($s,$u,$p,$e);
if($conexion->getError())
	if(isset($_SESSION))
	{
		$_SESSION["ERRORBD"]=$conexion->getMsgError();
	}
	header("Location: pg/Aviso.php?e=22");
}
else
{
	$donde="";
	$hayy=0;
	if(($bFdia!="" && $bFmes!="" && $bFanio!="")&&($bFdia2!="" && $bFmes2!="" && $bFanio2!=""))
	{
		if($hayy==1)
		{
			$donde="AND DATE_FORMAT(Fecha, '%d/%m/%y') BETWEEN " . $bFdia . "/" . $bFmes. "/" . $bFanio . " AND " . $bFdia2 . "/" . $bFmes2. "/" . $bFanio2;
		}
		else
		{
			$donde="DATE_FORMAT(Fecha, '%d/%m/%y') BETWEEN " . $bFdia . "/" . $bFmes. "/" . $bFanio . " AND " . $bFdia2 . "/" . $bFmes2. "/" . $bFanio2;
		}
		$hayy=1;
	}
	else
	{
		if($bFdia!="" && $bFmes!="" && $bFanio!="")
		{
			if($hayy==1)
			{
				$donde="AND DATE_FORMAT(Fecha, '%d/%m/%y') = " . $bFdia . "/" . $bFmes. "/" . $bFanio;
			}
			else
			{
				$donde="DATE_FORMAT(Fecha, '%d/%m/%y') = " . $bFdia . "/" . $bFmes. "/" . $bFanio;
			}
			$hayy=1;
		}
			if($bFdia2!="" && $bFmes2!="" && $bFanio2!="")
		{
			if($hayy==1)
			{
				$donde="AND DATE_FORMAT(Fecha, '%d/%m/%y') = " . $bFdia2 . "/" . $bFmes2. "/" . $bFanio2;
			}
			else
			{
				$donde="DATE_FORMAT(Fecha, '%d/%m/%y') = " . $bFdia2 . "/" . $bFmes2. "/" . $bFanio2;
			}
			$hayy=1;
		}
	}
	if($bPais!="")
	{
		if($hayy==1)
		{
			$donde=$donde . "AND LIKE '%" . $bPais . "%'";
		}
		else
		{
			$donde=$donde . "LIKE '%" . $bPais . "%'";
		}
		$hayy=1;
	}
	if($bTitulo!="")
	{
		if($hayy==1)
		{
			$donde=$donde . "AND LIKE '%" . $bTitulo . "%'";
		}
		else
		{
			$donde=$donde . "LIKE '%" . $bTitulo . "%'";
		}
		$hayy=1;
	}
	$campos="IdFoto,Titulo,DATE_FORMAT(Fecha, '%d/%m/%y'),Pais,Album,Fichero";
	$tabla="FOTOS";
	
	$agrupado="";
	$ordenador="";

	$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
	$res=$conexion->getResultado();
	
		//$conexion->desconectarBD();
	
}

?>