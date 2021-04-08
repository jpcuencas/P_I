<?php
if((isset($_SESSION["LOGIN"]))&&$_SESSION["LOGIN"]!="OK")
{
	header("Location: pg/Aviso.php?e=21");
}
else
{
	$u="Registrado1";//$_COOKIE['pUsu']
	$p="Feo123";//$_COOKIE['pPWD']
}
include_once("phpoo/BDclass.php");
$conexion= new bdconsulta;
$s="localhost";
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
	$campos="IdFoto,Titulo,Descripcion,DATE_FORMAT(Fecha, '%d/%m/%y'),Pais,Album,Fichero";
	$tabla="FOTOS";
	$donde="IdFoto=" . $_GET["f"];
	$agrupado="";
	$ordenador="FRegistro";

	$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
	//$res=$conexion->getResultado();
	$res=$consulta=mysql_fetch_array($res);
	if($conexion->getError())
	{
		$consulta=mysql_fetch_array($res);
		$Titulo=$consulta["Titulo"];
		$Fecha=$consulta["Fecha"];
		$Pais=$consulta["Pais"];
		$IdAlbum=$consulta["Album"];
		$Fichero=$consulta["Fichero"];
		$Descripcion=$consulta["Descripcion"];
		
		$campos="IdAlbum,Album,Usuario";
		$tabla="ALBUMES";
		$donde="IdAlbum=" . $IdAlbum;
		$agrupado="";
		$ordenador="";
		
		$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
		//$res=$conexion->getResultado();
		$consulta1=mysql_fetch_array($res);
		if($conexion->getError())
		{
			$Album=$consulta1["Album"];
			$IdUsuario=$consulta1["Usuario"];
			
			$campos="IdUsuario,NomUsuario";
				$tabla="USUARIOS";
				$donde="IdUsuario=" . $Usuario1;
				$agrupado="";
				$ordenador="";
			$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
			$res=$conexion->getResultado();
			$consulta2=mysql_fetch_array(($res);
			if($conexion->getError())
			{
				$IdUsuario=$consulta2["IdUsuario"];
				$Usuario=$consulta2["NomUsuario"];
			}
		}
	}
	$conexion->desconectarBD();
}
?>
		