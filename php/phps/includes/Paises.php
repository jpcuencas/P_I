<?phpinclude_once("phpoo/BDclassconsulta.php");$conexion= new bdconsulta;$s="localhost";$u="Publico";//$_COOKIE['pUsu']$p="";//$_COOKIE['pPWD']$e="pibd";$res="";$conexion->conectarBD($s,$u,$p,$e);if($conexion->getError()){	if(isset($_SESSION))	{		$_SESSION["ERRORBD"]=$conexion->getMsgError();	}}else{		$campos="IdPais,NomPais";		$tabla="PAISES";		$donde="1=1";		$agrupado="";		$ordenado="NomPais";		$asc="ASC";		$res=$conexion->consultardatos($campos,$tabla,$donde,$agrupado,$ordenado,$asc);		//$res=$conexion->getResultado();				if(!$conexion->getError())		{			//echo("<select id=\"bPais\" name=\"bPais\" class=\"bPais\">");			//echo("<option value=\"0\" selected>(Seleccione pais)</option>"); 			$i=1;		while($consulta = mysql_fetch_array($res))		{			if($consulta["IdPais"]==64)			{				echo("<option value=\"" . $i . "\" selected>" . $consulta["NomPais"] . "</option>");			}			else			{				echo("<option value=\"" . $i . "\">" . $consulta["NomPais"] . "</option>");			}			$i++;		}		//echo("</select>");				$conexion->desconectarBD();		}		else		{			$Usuario="";			$Clave="";			//header("Location: pg/Aviso.php?e=20");		}}?>