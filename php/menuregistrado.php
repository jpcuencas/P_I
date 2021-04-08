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
<link href="css/menuregistrado/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<!---
<link href="css/menuregistrado/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/menuregistrado/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/menuregistrado/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="css/menuregistrado/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/menuregistrado/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/menuregistrado/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

--->
<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
	include_once("phps/menuregistradopg.php");
?>

<script type="text/javascript" src="js/menuregistrado.js" charset="utf-8"></script>

</head>
<body onload="javascript:onloadbody();return false;"><!---javascript:onloadbodymenuregistrado(); return false;"> --->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pageMenuregistrado" id="pageMenuregistrado">
	<div id="titulomenuregistrado">
	<h2>P and I - Menu Usuario</h2>
	<br>
	<h3>Buenos dias: </h3><div id="regisnom" class="regisnom"><?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></div>
	</div>
	<h4>Menu de Usuario:</h4>
	<h5><a href="pg/Usuario.php">Mis datos</a></h5>
	<h5><a href="pg/DarseBaja.php">Darme de baja</a></h5>
	<h5><a href="pg/MisAlbum.php">Mis albumes</a></h5>
	<h5><a href="pg/Crearalbum.php">Crear album</a></h5>
	<h5><a href="pg/Foto.php">A&ntilde;adir foto a album</a></h5>
	<br>
	<hr/>
	<a href="">Salir</a>
	
	
	
</div>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>