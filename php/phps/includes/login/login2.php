<?php
$usu = (isset($_POST['pUsu'])?$_POST['pUsu']:"");
$pwd = (isset($_POST['pPWD'])?$_POST['pPWD']:"");
$produccion=false;
//die();

// Comprobamos el usuario contra la BD

if($Usu=="admin" and $Pwd=='Feo123')
{
	$_SESSION["LOGIN"]="OK";
	$_SESSION["NOMUsu"]="Andreu Buenafuente";
	
	global $fechavisita=date('l jS \of F Y h:i:s A');
	
	if($_POST['rrecuerdam']==true)
	{
		setcookie('usu',$usu,time() + 365*24*60*60);
		setcookie('contr',$pwd,time() + 365*24*60*60);
	}
	setcookie('visita',time(),time() + 365*24*60*60);
	
	print_r($usu,$produccion);
	print_r($pwd,$produccion);
	
	header("Location: menuregistrado.php");
}
else
{
	header("Location: Aviso.php?e=20");
}
?>