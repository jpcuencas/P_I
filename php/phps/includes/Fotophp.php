<?php
if($_SESSION["LOGIN"]!="OK")
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
$fecha=$_POST['fFdia'] . "/" . $_POST['fFmes'] . "/" . $_POST['fFanio'];

	$tabla="'pibd'.'Fotos' ('IdFoto', 'Titulo', 'Fecha', 'Pais', 'Album', 'Fichero', 'FRegistro')"
	$valores="'NULL', '" . $_POST['ftitulo'] . "', 'DATE_FORMAT(" . $fecha . ", '%d/%m/%y')', '" . $_POST['cpais'] . "', '" . $_POST['falbum'] . "', '" . $_POST['ffoto'] . "', 'NULL'";
	$conexion->insertardatos($tabla,$valores);
	$res=$conexion->getResultado();
	if($res)
	{
		$_SESSION['NOMUsu']=$_POST['rUsu'];
		$_SESSION['PWDUsu']=$_POST['rPWD'];
		header("Location: Aviso.php?e=27");	
	}
	else
	{
		header("Location: pg/Aviso.php?e=22");
	}
		$conexion->desconectarBD();
	}
?>