<?php
include_once("phpoo/BDclass.php");
$conexion= new bdacesso;
$s="localhost";
$u="admin";
$p="1234";
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
	$id=(isset($_POST['IdUs'])?$_POST['IdUs']:"");
	$tabla="'pibd'.'Usuarios'";
	$donde="IdUsuario='" . $id . "';";
	$conexion->borrardatos($tabla,$donde);
	$res=$conexion->getResultado();

	if($res)
	{
		$_POST['BorrarOK']=true;
	}
	else
	{
		header("Location: Aviso.php?e=22");
	}
		$conexion->desconectarBD();
}
?>