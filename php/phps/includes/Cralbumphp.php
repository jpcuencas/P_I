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
	if(isset($_SESSION))
	{
		$_SESSION["ERRORBD"]=$conexion->getMsgError();
	}
	header("Location: Aviso.php?e=22");
}
else
{
if($_POST['puAcesso']=="pri")
{
	$acceso=1;
}
else 
{
	$acceso=0;
}
$hoy=time();
$fecha=date('d/m/Y', $hoy);
list($mes, $día, $año) = split('[/.-]', $fecha);
$fecha2=$dia . "/" . $mes . "/" . $anio;

$tabla="'pibd'.'Albumes' ('IdAlbum', 'Titulo', 'Descripcion', 'Fecha', 'Pais', 'Usuario')"
$valores="'NULL', '" . $_POST['crtitulo'] . "', '" . $_POST['crdescripcion'] . "', '" . "', 'DATE_FORMAT(" . $hoy . ", '%d/%m/%y')', '" . $_POST['crPais'] . "', '" . $_POST['NOMUsu'] . "'";
$conexion->insertardatos($tabla,$valores);
$res=$conexion->getResultado();
if($res)
{
	$_POST['NOMUsu']=$_POST['rUsu'];
	$_POST['PWDUsu']=$_POST['rPWD'];
	header("Location: Aviso.php?e=26");
}
else
{
	header("Location: Aviso.php?e=24");
}
	$conexion->desconectarBD();
}
?>