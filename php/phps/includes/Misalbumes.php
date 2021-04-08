<?php
	if(isset($_SESSION))
	if((isset($_SESSION["LOGIN"]))&&$_SESSION["LOGIN"]=="OK")
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
$u=$pUsu;
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
	$campos="NomUsuario,Album";
	$tabla="USUARIOS";
	$donde="NomUsuario=" . $pUsu;
	$agrupado="";
	$ordenado="FRegistro";
	$asc="ASC";
	$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);
	//$res=$conexion->getResultado();
	if(!$conexion->getError())
	{
		$i=1;
		while($consulta1=mysql_fetch_array($res))
		{
			$IDAlbum=$consulta1["Album"];
			
			$campos2="IdAlbum,Titulo,Descripcion,Fecha,Pais";
			$tabla2="ALBUMES";
			$donde2="IdAlbum=" . $IDAlbum;
			$agrupado2="IdAlbum";
			$ordenado2="Titulo";
			$asc2="ASC";
			$res2=$conexion->consultardatos($campos2,$tabla2,$donde2,$agrupado2,$ordenado2,$asc2);
			//$res2=$conexion->getResultado();
			if(!$conexion->getError())
			{
				$consulta=mysql_fetch_array($res2);
				$Titulo=$consulta["Titulo"];
				$albumID=$consulta["IdAlbum"];
				$Descripcion=$consulta["Descripcion"];
				$Fecha=$consulta["Fecha"];
				$PaisId=$consulta["Pais"];
				
				$campos3="IdPais,NomPais";
				$tabla3="PAISES";
				$donde3="IdAlbum=" . $PaisId;
				$agrupado3="";
				$ordenado3="";
				$asc3="ASC";
				$res3=$conexion->consultardatos($campos3,$tabla3,$donde3,$agrupado3,$ordenado3,$asc3);
				//$res2=$conexion->getResultado();
				if(!$conexion->getError())
				{
					$consulta2=mysql_fetch_array($res3);
					$Pais=$consulta2["NomPais"];
					
					$campos4="IdFoto,Fichero";
					$tabla4="FOTOS";
					$donde4="Album=" . $albumID;
					$agrupado4="";
					$ordenado4="";
					$asc4="ASC";
					$res4=$conexion->consultardatos($campos4,$tabla4,$donde4,$agrupado4,$ordenado4,$asc4);
					//$res2=$conexion->getResultado();
					if(!$conexion->getError())
					{
						$consulta2=mysql_fetch_array($res3);
						$Fichero=$consulta["Fichero"];
						echo("<li><p><label>Titulo: " . $Titulo . "</label><br/><label>Fecha del Album: " . $Fecha . "</label><br/><label>Pais: " . $Pais . "</label><a href=\"Album.php?i=\"" . $albumID . "\"><img src=\"" . $Fichero . "\" id=\"img" . $i . "\" alt=\"Album " . $i . "\"></a></p></li>");
					}
				}
			}
			$i++;
		}
	}
}
?>

