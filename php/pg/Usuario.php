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
<link href="../css/usuario/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/usuario/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/usuario/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/usuario/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/usuario/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/usuario/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validarusuario.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageUsuario">
<div id="usuariotitulo">
<h2>P and I - Usuario</h2>
<br>
<h3>Detalles de usuario</h3>
</div>
<?php
	include_once("../phps/includes/Usuarios.php");
?>
<div id="fotodeUsuario" class="fotodeUsuario">
	<p>
		<label form="fusr">Foto: </label><br>
		<img class="imagen" src="../imagenes/usr.jpg" id="fusr" alt="Foto de usuario"/>
	</p>
</div>
<div class="datos">
		<div id="usrNombre"><label form="usrNombre">Nombre: </label><?php echo((isset($Nombre)?$Nombre:"")); ?></div><!--<input type="text" name="usrNombre" disabled />-->
		<div id="usrEmail"><label form="usrEmail">Email: </label><?php echo((isset($Email)?$_Email:"")); ?><label></label></div><!--<input type="text" name="usrEmail" disabled />-->
		<div id="usrGenero"><label form="usrGenero">Sexo: </label><?php echo((isset($sexo)?$sexo:"")); ?><label></label></div><!--<input type="text" name="usrGenero" disabled />-->
		<div id="usrfecha" class="fecha"><label form="usrDia">Fecha nacimiento: </label></div>
		<?php echo((isset($Fecha1)?$Fecha1:"")); ?>
		<div class="dtsDia" id="usrDia"><label></label></div><!--<input type="text" size="2" name="usrDia" disabled />--><label form="rtMes"> / </label><div class="dtsMes" id="usrMes"><label></label></div><!--<input type="text" size="2" name="usrMes" disabled />--><label form="usrAnio"> / </label><div class="dtsAnio" id="usrAnio"><label></label></div><!--<input type="text" size="4" name="usrAnio" disabled />-->
		<div id="usrPoblacion"><label form="usrPoblacion">Poblacion: </label><?php echo((isset($Pop)?$Pop:"")); ?><label></label></div><!--<input type="text" name="usrPoblacion" disabled />-->
		<div id="usrPais"><label form="usrPais">Pais: </label><label><?php echo((isset($Pais)?$Pais:"")); ?></label></div><!--<input type="text" name="usrPais" disabled />-->
		<div id="usrfecha1" class="fecha"><label form="usrDia1">Fecha de alta: </label></div>
		<?php echo((isset($Fecha2)?$Fecha2:"")); ?>
		<div class="dtsDia" id="usrDia1"><label></label></div><!--<input type="text" size="2" name="usrDia1" disabled />--><label form="usrMes1"> / </label><div class="dtsMes" id="usrMes1"><label></label></div><!--<input type="text" size="2" name="usrMes1" disabled />--><label form="usrAnio1"> / </label><div class="dtsAnio" id="usrAnio1"><label></label></div><!--<input type="text" size="4" name="usrAnio1" disabled />-->
		<br>
		<div id="lnkbaja" class="lnkbaja">
			<a href="DarseBaja.html">Darse de baja  </a>
		</div>
		<div id="lnkcontacto" class="lnkcontacto">
			<a href="Contacto.html">Contactar </a>
		</div>
	
	<div id="campalbunes" class="campalbunes">
		<a href="MisAlbum.html?i=<?php echo((isset($IdUsr)?$IdUsr:"")); ?>">Albunes</a>
	</div>
</div>
	<br>
</div>

<?php
	include_once("../phps/includes/web/pie2.inc.php");
?>
</body>
</html>