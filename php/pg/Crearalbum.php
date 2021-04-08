<?php
	include_once("../phps/includes/web/session.inc.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<?php
	include_once("../phps/includes/web/cabecera2css.inc.php");
?>
<link href="../css/cralbum/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/cralbum/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/cralbum/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/cralbum/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/cralbum/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/cralbum/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validarcralbum.js" charset="utf-8"></script>
</head>
<body> <!--onload="javascript:onloadbody(); return false;">--> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageCrearalbum" id="pageCrearalbum">
<div id="crearalbumtitulo">
<h2>P and I - Crear Album</h2>
<br>
<h3>Crear Album</h3>
</div>
<div class="datos">
	<form method="GET" action="../phps/cralbumpg.php" class="formcrearalb">
		<div id="camptitulocra" class="camptitulo">
			<p><label form="crtitulo">Titulo: </label>
			<input type="text" size="25" maxlength="25" class="crtitulo" id="crtitulo" value="Titulo del album" onblur="javascript:onblurtexto('crtitulo','Titulo del album','Grey');javascript:quitarError('errorcrtitulo');return false;" onfocus="javascript:onfocustexto('crtitulo','Titulo del album','Black');return false;"/></p>
			<!--<input type="text" size="25" maxlength="25" id="crtitulo" autocomplete />-->
		<div class="mainCompose" id="errorcrtitulo">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El nombre de la foto no es valido</h3>
				<hr/>
					<p>El nombre debe rellenarse</p>
				<hr/>
			</div>
	</div>
		
		</div>
		<div id="campusrcra" class="campusr">
			<label form="CrAbUsr">Usuario: </label><div id="CrAbUsr"><?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></div><!--<input type="text" name="CrAbUsr" disabled />-->
		</div><br>
		<div id="crfecha1" class="fecha1"><label form="crDia1">Fecha de creaci&oacute;n del album: </label></div>
		<div class="dtsDia" id="crDia1"><label></label></div><!--<input type="text" size="2" name="crDia1" disabled />--><label form="crMes1"> / </label><div class="dtsMes" id="crMes1"><label></label></div><!--<input type="text" size="2" name="crMes1" disabled />--><label form="crAnio1"> / </label><div class="dtsAnio" id="crAnio1"><label></label></div><!--<input type="text" size="4" name="crAnio1" disabled />-->
		<br>
		<div id="crfecha2" class="fecha2"><label form="crDia2">Fecha de realizaci&oacute;n de fotos: </label></div>
		<div class="dtsDia" id="crDia2"><label></label></div><!--<input type="text" size="2" name="crDia2" disabled />--><label form="crMes2"> / </label><div class="dtsMes" id="crMes2"><label></label></div><!--<input type="text" size="2" name="crMes2" disabled />--><label form="crAnio2"> / </label><div class="dtsAnio" id="crAnio2"><label></label></div><!--<input type="text" size="4" name="crAnio2" disabled />-->
		
		<p><label for="crPais">Pais:</label>
			<input type="text" size="25" maxlength="25" class="crPais" name="crPais" id="crPais" value="Pais" onblur="javascript:onblurtexto('crPais','Pais','Grey');return false;" onfocus="javascript:onfocustexto('crPais','Pais','Black');return false;"/>
		</p>
	
		<div id="campacess" class="campacess">
			<p><label form="crAcesso">Acesso: </label>
			<input type="radio" name="pAcesso" id="puAcesso" value="pub" />Publico
			<input type="radio" name="pAcesso" id="prAcesso" value="pri" checked />Privado
		</p>
<!--		<div class="mainCompose" id="errorcrAcesso">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El modo de acesso no es valido</h3>
				<hr/>
					<p>El nombre debe comprobarse</p>
				<hr/>
			</div>
	</div>
-->
	<div id="labelcoment">
	<label>
		Descripcion del album: (min. 30, max. 3000 caracteres)					<br>
		<textarea title="Descripcion"  id="crdescripcion" name="crdescripcion" cols="30" rows="10"></textarea>
	</label>
	</div>

		</div>
		<div id="botoncrear" class="boton">
			<input type="submit" value="Crear" id="crear" onclick="javascript:formularioCrearAlbum(); return false;"/>
		</div>
	</form>

</div>

<br>
</div>
<br>

<?php
	include_once("../phps/includes/web/pie2.inc.php");
?>
</body>
</html>