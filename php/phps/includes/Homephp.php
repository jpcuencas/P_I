<?phpinclude_once("phpoo/BDclassconsulta.php");$conexion= new bdconsulta;$s="localhost";$u="Publico";$p="";$e="pibd";$res="";$conexion->conectarBD($s,$u,$p,$e);if($conexion->getError()){	if(isset($_SESSION))	{		$_SESSION["ERRORBD"]=$conexion->getMsgError();	}	header("Location: pg/Aviso.php?e=22");}else{		$IDfoto1="";		$Titulo1="";		$Album1="";		$Ruta1="";		$Nomusu1="";		$idUsr1="";				$IDfoto2="";		$Titulo2="";		$Album2="";		$Ruta2="";		$Nomusu2="";		$idUsr2="";				$IDfoto3="";		$Titulo3="";		$Album3="";		$Ruta3="";		$Nomusu3="";		$idUsr3="";				$IDfoto4="";		$Titulo4="";		$Album4="";		$Ruta4="";		$Nomusu4="";		$idUsr4="";				$IDfoto5="";		$Titulo5="";		$Album5="";		$Ruta5="";		$Nomusu5="";		$idUsr5="";	$campos="IdFoto,Titulo,Album,Fichero";	$tabla="FOTOS";	$donde="";	$agrupado="";	$ordenado="FRegistro";	$asc="ASC";	$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);	//$res=$conexion->getResultado();	if(!$conexion->getError())	{		$consulta1=mysql_fetch_array($res);		$IDfoto1=$consulta1["IdFoto"];		$Titulo1=$consulta1["Titulo"];		$Album1=$consulta1["Album"];		$Ruta1=$consulta1["Fichero"];		$consulta2=mysql_fetch_array($res);		$IDfoto2=$consulta2["IdFoto"];		$Titulo2=$consulta2["Titulo"];		$Album2=$consulta2["Album"];		$Ruta2=$consulta2["Fichero"];				$consulta3=mysql_fetch_array($res);		$IDfoto3=$consulta3["IdFoto"];		$Titulo3=$consulta3["Titulo"];		$Album3=$consulta3["Album"];		$Ruta3=$consulta3["Fichero"];				$consulta4=mysql_fetch_array($res);		$IDfoto4=$consulta4["IdFoto"];		$Titulo4=$consulta4["Titulo"];		$Album4=$consulta4["Album"];		$Ruta4=$consulta4["Fichero"];				$consulta5=mysql_fetch_array($res);		$IDfoto5=$consulta5["IdFoto"];		$Titulo5=$consulta5["Titulo"];		$Album5=$consulta5["Album"];		$Ruta5=$consulta5["Fichero"];				$campos="IdAlbum,Titulo,Usuario";		$tabla="ALBUMES";		$donde="IdAlbum=" . $Album1;		$agrupado="";		$ordenado="";		$asc="";		$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{		$consulta6=mysql_fetch_array($res);		$Album1ok=$consulta6["Titulo"];		$albumID1=$consulta6["IdAlbum"];		$Usuario1=$consulta6["Usuario"];		}		else		{			$Album1ok="";			$albumID1="";			$Usuario1="";			echo("todo esta :" . $conexion->getMsgError());		}					$donde="IdAlbum=" . $Album2;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{			$consulta7=mysql_fetch_array($res);			$Album2ok=$consulta7["Titulo"];			$albumID2=$consulta7["IdAlbum"];			$Usuario2=$consulta7["Usuario"];		}		else		{			$Album2ok="";			$albumID2="";			$Usuario2="";			echo("todo esta :" . $conexion->getMsgError());		}					$donde="IdAlbum=" . $Album3;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{			$consulta8=mysql_fetch_array($res);			$Album3ok=$consulta8["Titulo"];			$albumID3=$consulta8["IdAlbum"];			$Usuario3=$consulta8["Usuario"];		}		else		{			$Album3ok="";			$albumID3="";			$Usuario3="";			echo("todo esta :" . $conexion->getMsgError());		}					$donde="IdAlbum=" . $Album4;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{					$consulta9=mysql_fetch_array($res);		$Album4ok=$consulta9["Titulo"];			$albumID4=$consulta9["IdAlbum"];			$Usuario4=$consulta9["Usuario"];		}		else		{			$Album4ok="";			$albumID4="";			$Usuario4="";			echo("todo esta :" . $conexion->getMsgError());		}			$donde="IdAlbum=" . $Album5;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{					$consulta10=mysql_fetch_array($res);				$Album5ok=$consulta10["Titulo"];				$albumID5=$consulta10["IdAlbum"];				$Usuario5=$consulta10["Usuario"];		}		else		{			$Album5ok="";			$albumID5="";			$Usuario5="";			echo("todo esta :" . $conexion->getMsgError());		}							if($Usuario1!="")	{					$campos="IdUsuario,NomUsuario";			$tabla="USUARIOS";			$donde="IdUsuario=" . $Usuario1;			$agrupado="";			$ordenado="";			$asc="";			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{			$consulta11=mysql_fetch_array($res);			$Nomusu1=$consulta11["NomUsuario"];			$idUsr1=$consulta11["IdUsuario"];		}		else		{			$idUsr1="";			$Nomusu1="";			echo("todo esta :" . $conexion->getMsgError());		}	}	if($Usuario2!="")	{			$donde="IdUsuario=" . $Usuario2;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{				$consulta12=mysql_fetch_array($res);			$Nomusu2=$consulta12["NomUsuario"];			$idUsr2=$consulta12["IdUsuario"];		}		else		{			$idUsr2="";			$Nomusu2="";			echo("todo esta :" . $conexion->getMsgError());		}	}	if($Usuario3!="")	{			$donde="IdUsuario=" . $Usuario3;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{				$consulta13=mysql_fetch_array($res);			$Nomusu3=$consulta13["NomUsuario"];			$idUsr3=$consulta13["IdUsuario"];		}		else		{			$idUsr3="";			$Nomusu3="";			echo("todo esta :" . $conexion->getMsgError());		}	}	if($Usuario4!="")	{				$donde="IdUsuario=" . $Usuario4;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{			$consulta14=mysql_fetch_array($res);			$Nomusu4=$consulta14["NomUsuario"];			$idUsr4=$consulta14["IdUsuario"];		}		else		{			$idUsr4="";			$Nomusu4="";			echo("todo esta :" . $conexion->getMsgError());		}	}	if($Usuario5!="")	{				$donde="IdUsuario=" . $Usuario5;			$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();		if(!$conexion->getError())		{				$consulta15=mysql_fetch_array($res);			$Nomusu5=$consulta15["NomUsuario"];			$idUsr5=$consulta15["IdUsuario"];		}		else		{			$idUsr5="";			$Nomusu5="";			echo("todo esta :" . $conexion->getMsgError());		}	}		$conexion->desconectarBD();		$_POST["IdFoto1"]=$IDfoto1;		$_POST["IdTitulo1"]=$Titulo1;		$_POST["Ruta1"]=$Ruta1;		$_POST["Album1"]=$Album1ok;		$_POST["NomUsuario1"]=$Nomusu1;				$_POST["IdFoto2"]=$IDfoto2;		$_POST["IdTitulo2"]=$Titulo2;		$_POST["Ruta2"]=$Ruta2;		$_POST["Album2"]=$Album2ok;		$_POST["NomUsuario2"]=$Nomusu2;				$_POST["IdFoto3"]=$IDfoto3;		$_POST["IdTitulo3"]=$Titulo3;		$_POST["Ruta3"]=$Ruta3;		$_POST["Album3"]=$Album3ok;		$_POST["NomUsuario3"]=$Nomusu3;				$_POST["IdFoto4"]=$IDfoto4;		$_POST["IdTitulo4"]=$Titulo4;		$_POST["Ruta4"]=$Ruta4;		$_POST["Album4"]=$Album4ok;		$_POST["NomUsuario4"]=$Nomusu4;				$_POST["IdFoto5"]=$IDfoto5;		$_POST["IdTitulo5"]=$Titulo5;		$_POST["Ruta5"]=$Ruta5;		$_POST["Album5"]=$Album5ok;		$_POST["NomUsuario5"]=$Nomusu5;		/*if($conexion->getError())		{			echo("todo esta :" . $conexion->getMsgError());		}*/					}	else	{		$IDfoto1="";		$IDfoto2="";		$IDfoto3="";		$IDfoto4="";		$IDfoto5="";	}}?>