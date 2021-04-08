<?php
	include_once("phps/includes/web/session.inc.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<?php
	include_once("phps/includes/web/cabeceracss.inc.php");
?>
<link href="css/resultados/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/resultados/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/resultados/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>


<link href="css/resultados/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/resultados/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/resultados/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
?>
<script type="text/javascript" src="js/validarresultados.js" charset="utf-8"></script>
<script>
var fotos = {<?php
include_once("phpoo/BDclassconsulta.php");
$conexion= new bdconsulta;
$s="localhost";
$u="Publico";//$_COOKIE['pUsu']
$p="";//$_COOKIE['pPWD']
$e="pibd";
$res="";
$conexion->conectarBD($s,$u,$p,$e);
if($conexion->getError())
{
	$_SESSION["ERRORBD"]=$conexion->getMsgError();
	header("Location: pg/Aviso.php?e=22");
}
else
{
		$res=$conexion->getResultado();
		$consulta=mysql_fetch_array($res);
		if($conexion->getError())
		{
			//$_POST["ERRORBD"]=$conexion->getMsgError();
			header("Location: pg/Aviso.php?e=23");
			
		}
		echo("0:[" . $res['Titulo'] . "," . $res['Fichero'] . "," . $res['Fecha'] . "," . $res['Pais'] . "],");
		$i=1;
		while(mysql_fetch_array($res))
		{
			echo(i . ":[" . $res['Titulo'] . "," . $res['Fichero'] . "," . $res['Fecha'] . "," . $res['Pais'] . "],");
			$i++;
		}
}			
		?>};
		
<?php
/*
	echo("var fotos1  = new Array();");

	for($j=0;j<=$i;j++)
	{
	$Dato=$Dato . "\"var foto" . $i . "= new Array(" . $res['Titulo'] . "," . $res['Fichero'] . "," . $res['Fecha'] . "," . $res['Pais'] . ");\""
	}
	$i=0;		
	$arrayfotos = array($Dato);
	for($j=0;$j<=$i;$j++)
	{
		echo(arrayfotos[$i]);
	}
	for($j=0;$j<=$i;$j++)
	{
		echo("fotos1[" . $i . "]=foto" . $i . ";");
	}
*/
?>
<?php
$conexion->desconectarBD();
?>


</script>
</head>
<body onload="javascript:onloadbody();reordena(<?php (isset($_POST['ordenarpor1'])?$_POST['ordenarpor1']:"") ?>); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pageResultados" id="pageResultados">
<div id="tituloresultados">
<h2>P and I - Resultados</h2>
	<br>
<h3>Resultados de busqueda</h3>

<div id="btlimbiarb" class="boton">
		<hr />
		<a href="Busqueda.html">Volver a buscar</a>
		<input type="submit" value="Buscar" id="buscar" onclick="javascript:onloadbodyresultados();return false;"/>
		<select class="orden" name="bordenar" id="bordenar" onchange="javascript:reordena(document.getElementById('bordenar').value);return false;">
			<option value="ASC" selected>Ascendente</option>
			<option value="DES">Descendente</option>
		</select>
	</div>
			<div id="bordenarr" class="bordenarr">
			<p><label form="crAcesso">Ordenar por: </label>
			<input type="radio" name="ordenarpor" id="ordenarpor" onclick="javascript:ordenatit();return false;" value="tit" checked />Titulo
			<input type="radio" name="ordenarpor" id="ordenarpor" onclick="javascript:ordenafch();return false;" value="fch" />Fecha
			<input type="radio" name="ordenarpor" id="ordenarpor" onclick="javascript:ordenapas();return false;" value="pas" />Pais
		</p>


</div>
	<hr />
	
	<div id="bResultadosRes" class="bResultadosRes">
	
	<div class="rtfoto">
		<a href="pg/Foto.html"><img class="imagen" src="imagenes/img/406334_456865954347134_1748547640_n.jpg" alt="imagen en detalle"/></a>
	</div>
	<br>
	
	
	<div class="rtdatos1">
		<div id="rtTitulo"><label form="rtTitulo">Titulo: </label><label></label></div><!--<input size="20" type="text" name="rtTitulo" disabled />-->
		<div id="rtfecha" class="fecha"><label form="rtDia">Fecha: </label></div>
		<div class="dtsDia" id="rtDia"><label></label></div><!--<input type="text" size="2" name="rtDia" disabled />--><label form="rtMes"> / </label><div class="dtsMes" id="rtMes"><label></label></div><!--<input type="text" size="2" name="rtMes" disabled />--><label form="rtAnio"> / </label><div class="dtsAnio" id="rtAnio"><label></label></div><!--<input type="text" size="4" name="rtAnio" disabled />-->
		<div class="lnkoutA">
			<p><a href="pg/Album.html">Album</a></p>
		</div>
	</div>
	<div class="rtdatos2">
		<div id="rtAutor"><label form="rtAutor">Autor: </label><label></label></div><!--<input type="text" name="rtAutor" disabled />-->
		<div id="rtPais"><label form="rtPais">Pais: </label><label></label></div><!--<input type="text" name="rtPais" disabled />-->
		<div id="lnkoutD" class="lnkoutD">
			<p><a href="Detalle.html">Detalles</a></p>
		</div>
	</div>

</div>
</div>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>