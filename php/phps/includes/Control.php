<?php
include_once("phpoo/BDclassconsulta.php");
$conexion= new bdconsulta;
$s="localhost";
$u="Publico";
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
$campos="IdUsuario,NomUsuario,Clave";
	$tabla="USUARIOS";
	$donde="NomUsuario=" . $Usu . "Clave=" . $Pwd;
	$agrupado="";
	$ordenado="";
	$asc="";
	$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
	//$res=$conexion->getResultado();
	if(!$conexion->getError())
	{
		$consulta1=mysql_fetch_array($res);
		$Idusu=$consulta1["IdUsuario"];
		$nomb=$consulta1["NomUsuario"];
		$pwdd=$consulta1["Clave"];
	}
	else
	{
		header("Location: pg/Aviso.php?e=22");
	}


}
?>