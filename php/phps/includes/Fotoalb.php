<?php
	if($_SESSION["LOGIN"]=="OK")
	{
		$Usu = (isset($_SESSION['pUsu'])?$_SESSION['pUsu']:"");
		$Pwd = (isset($_SESSION['pPWD'])?$_SESSION['pPWD']:"");
	}
	else
	{
		$Usu = "";
		$Pwd = "";
		header("Location: ../Home.php");
		exit();
	}

include_once("phpoo/BDclassconsulta.php");
$conexion= new bdconsulta;
$s="localhost";
$u=$Usu;
$p="";
$e="pibd";
$res="";
$conexion->conectarBD($s,$u,$p,$e);
if($conexion->getError())
{
	if(isset($_SESSION))
	{
		$_SESSION["ERRORBD"]=$conexion->getMsgError();
	}
	header("Location: pg/Aviso.php?e=22");
}
else
{
	$campos="IdUsuario,NomUsuario";
	$tabla="USUARIOS";
	$donde="NomUsuario=" . $Usu;
	$agrupado="";
	$ordenado="";
	$asc="";
	$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
	//$res=$conexion->getResultado();
	if(!$conexion->getError())
	{
		$consulta1=mysql_fetch_array($res);
		$UsuarioID=$consulta1["IdUsuario"];
	}


	$campos2="IdAlbum,Titulo,Usuario";
	$tabla2="ALBUMES";
	$donde2="Usuario=" . $UsuarioID;
	$agrupado2="";
	$ordenado2="";
	$asc2="";
	$res2=$conexion->consultardatos($campos2,$tabla2,$donde2,$agrupado2,$ordenado2,$asc2);
	//$res2=$conexion->getResultado();
	if(!$conexion->getError())
	{
		while($consulta=mysql_fetch_array($res2))
		{
			$Albumm=$consulta["Titulo"];
			$albumID=$consulta["IdAlbum"];
			echo("<option value=\"" . $albumID . "\">" . $Albumm . "</option>");
		}
	}
}
?>