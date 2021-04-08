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
	$campos="IdUsuario,NomUsuario,Email,Sexo,FNacimiento,Ciudad,Pais,Foto,FRegistro";
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
		$IdUsr=$consulta1["IdUsuario"];
		$Nombre=$consulta1["NomUsuario"];
		$Email=$consulta1["Email"];
		$Sexo=$consulta1["Sexo"];
		$Fecha1=$consulta1["FNacimiento"];
		$Pop=$consulta1["Ciudad"];
		$Pais=$consulta1["Pais"];
		$Foto=$consulta1["Foto"];
		$Fecha2=$consulta1["FRegistro"];
		
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