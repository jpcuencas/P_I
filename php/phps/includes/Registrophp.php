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
	header("Location: pg/Aviso.php?e=22");
}
else
{
	if($_POST['rGenero']=="M")
	{
		$sexo=1;
	}
	else 
	{
		$sexo=0;
	}
	$CP=$_POST['rCP'];
	$fecha=$_POST['rFdia'] . "/" . $_POST['rFmes'] . "/" . $_POST['rFanio'];

	$laQuery= "INSERT INTO 'pibd'.'Usuarios' ('IdUsuario', 'NomUsuario', 'Clave', 'Email', 'Sexo', 'FNacimiento', 'Ciudad', 'Pais', 'Foto', 'FRegistro') VALUES (NULL, '" . $_POST['rUsu'] . "', '" . $_POST['rPWD'] . "', '" . $_POST['rEmail'] . "', '" . $sexo . "', '" . $_POST['rUsu'] . "', '" . $_POST['rPop'] . "', '" . $_POST['rPais'] . "', 'NULL , 'NULL');";
	$tabla="'pibd'.'Usuarios' ('IdUsuario', 'NomUsuario', 'Clave', 'Email', 'Sexo', 'FNacimiento', 'Ciudad', 'Pais', 'Foto', 'FRegistro')"
	$valores="'NULL', '" . $_POST['rUsu'] . "', '" . $_POST['rPWD'] . "', '" . $_POST['rEmail'] . "', '" . $sexo . "', 'DATE_FORMAT(" . $fecha . ", '%d/%m/%y')', '" . $_POST['rPop'] . "', '" . $_POST['rPais'] . "', 'NULL' , 'NULL'";
	echo($valores);
	$conexion->insertardatos($tabla,$valores);
	$res=$conexion->getResultado();

	if($res)
	{
		$_SESSION['NOMUsu']=$_POST['rUsu'];
		$_SESSION['PWDUsu']=$_POST['rPWD'];
		header("Location: ../../nuevousuario.php");
	}
	else
	{
		header("Location: pg/Aviso.php?e=22");
	}
		$conexion->desconectarBD();
}
?>