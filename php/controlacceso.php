<?php
include_once("phps/includes/web/session.inc.php");
if(isset($_COOKIE['contador']))
{
	// Caduca en un año
	setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
	$_SESSION["Msg1"] = "Número de visitas: " . $_COOKIE['contador'];
}
else
{
	// Caduca en un año
	setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
	$_SESSION["Msg1"] = "Bienvenido a nuestra página web";
}
if(isset($_COOKIE['visita']))
{
	// Caduca en un año
	setcookie('visita', time(), time() + 365 * 24 * 60 * 60);
	$_SESSION["Msg"] = "Su ultima visita fue :"+$_COOKIE['visita'];
}
else
{
	// Caduca en un año
	setcookie('visita', time(), time() + 365 * 24 * 60 * 60);
	$_SESSION["Msg"] = "Bienvenido a nuestra página web";
}
$Usu = (isset($_COOKIE['pUsu'])?$_COOKIE['pUsu']:"");
$Pwd = (isset($_COOKIE['pPWD'])?$_COOKIE['pPWD']:"");

// Comprobamos el usuario contra la BD
include_once("phps/includes/Control.php");
if($Idusu!="" and $nomb!="" and $pwdd!="")
{
	session_start();
	$_SESSION["LOGIN"]="OK";
	//buscamos usuario en la BD
	$_SESSION["NOMUsu"]=$nomb;
	$_SESSION["uius"]=$Idusu;
	header("Location: menuregistrado.php");
}
else
{
	header("Location: Home.php");
}
?>
