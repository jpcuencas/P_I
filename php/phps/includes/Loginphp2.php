<?php
$produccion=false;
$Usuario = (isset($_POST['pUsu'])?$_POST['pUsu']:"");
$Clave = (isset($_POST['pPWD'])?$_POST['pPWD']:"");
$Recordar = (isset($_POST['recuerdame'])?$_POST['recuerdame']:"");
include_once("phpoo/BDclassconsulta.php");
$conexion= new bdconsulta;
$s="localhost";
$u="Registrado1";//$_COOKIE['pUsu']
$p="Feo123";//$_COOKIE['pPWD']
$e="pibd";
$res="";
$conexion->conectarBD($s,$u,$p,$e);
if($conexion->getError())
{
	if(isset($_SESSION))
	{
		$_SESSION["ERRORBD"]=$conexion->getMsgError();
	}
	header("Location: Aviso.php?e=22");
}
else
{
		$campos="IdUsuario,NomUsuario,Clave";
		$tabla="USUARIOS";
		$donde="NomUsuario='" . $Usuario . "' AND Clave='" . $Clave . "'";
		$agrupado="";
		$ordenado="";
		$asc="";
		$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
		//$res=$conexion->getResultado();
		$consulta=mysql_fetch_array($res);
		if(!$conexion->getError())
		{
		$ui=(isset($consulta["IdUsuario"])?$consulta["IdUsuario"]:"");
		$Usu=(isset($consulta["NomUsuario"])?$consulta["NomUsuario"]:"");
		$PWD=(isset($consulta["Clave"])?$consulta["Clave"]:"");
		echo("ID" . $ui);
		echo("Pwd" . $Usu);
		echo("PWD" . $PWD);
			if(($Usu!="")&&($PWD!="")&&($ui!=""))
			{
				//session_start();
				$_SESSION["LOGIN"]="OK";
				//buscamos usuario en la BD
				$_SESSION["ui"]=$ui;
				$_SESSION["NOMUsu"]=$Usu;
				$_SESSION["PWD"]=$PWD;
				/*
				if($Recordar!="")
				{
					setcookie("pUsu", $Usuario, time() + 3600, "/", "localhost");
					setcookie("pPWD", $Clave, time() + 3600, "/", "localhost");
				}
				setcookie('visita', time(), time() + 365 * 24 * 60 * 60);
				//setcookie("visita",time(),time() + 365*24*60*60);
				*/
				header("Location: ../menuregistrado.php");
			}
			else
			{
				$Usuario="";
				$Clave="";
				header("Location: Aviso.php?e=20");
			}
				$conexion->desconectarBD();
		}
		else
		{
			$Usuario="";
			$Clave="";
			header("Location: Aviso.php?e=20");
		}
}
?>