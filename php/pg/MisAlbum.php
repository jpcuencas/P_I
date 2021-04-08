<?php
	include_once("../phps/includes/web/session.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<!--<meta name="copyright" content="PictiresImages, jupecuse, jupecuse"/>-->
<?php
	include_once("../phps/includes/web/cabecera2css.inc.php");
?>
<link href="../css/album/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/album/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/album/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/album/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/album/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/album/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validaralbum.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageAlbum">
<div id="albumtitulo">
<h2>P and I - Mis Albumes</h2>
<br>
<h3>Informacion de mis albumes</h3>
</div>
<!--
Como escribimos el album??
-->


<fieldset  id="albumes" class="albumes">
<legend>Los Albumes de <?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></legend>


	<ul>
	<?php
		include_once("../phps/includes/Misalbumes.php");
	?>
	<!--
	<li><p><a href=""><img src="" id="img1" alt="Album 1"></p></li>
	-->
	<!--
	<li><p><a href=""><img src="" id="img1" alt="Album 1"></p></li>
	-->
	<!--
	<li><p><a href=""><img src="" id="img1" alt="Album 1"></p></li>
	-->
	<!--
	<li><p><a href=""><img src="" id="img1" alt="Album 1"></p></li>
	-->
	<!--
	<li><p><label>Titulo: </label><a href="Album.php?i="><img src="" id="img1" alt="Album 1"></p></li>
	-->
	</ul>
</fieldset>

<br>
</div>

<?php
	include_once("../phps/includes/web/pie2.inc.php");
?>
</body>
</html>