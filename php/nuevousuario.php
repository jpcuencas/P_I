<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<?php
	include_once("phps/includes/web/cabeceracss.inc.php");
?>
<link href="css/nuevousuario/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/nuevousuario/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/nuevousuario/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="css/nuevousuario/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/nuevousuario/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/nuevousuario/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
	include_once("phps/nuevousuariopg.php");
?>

<script type="text/javascript" src="js/nuevousuario.js" charset="utf-8"></script>

</head>
<body onload="javascript:onloadbody();return false"><!---javascript:onloadbodynuevousuario(); return false;"> --->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pagenuevousuario" id="pagenuevousuario">

<h2>P and I - Nuevo Usuario</h2>
<br>
<h3>Congratulations ya eres uno de los nuestros...</h3>

<h4>Sus datos:</h4>
<div id="datos" class="datos">
<div id="nombre"><h5>Nombre de usuario: <?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></h5></div>
<div id="password"><h5>Contrase&ntilde;a: <?php echo((isset($_POST['PWDUsu'])?$_POST['PWDUsu']:"")); ?></h5></div>
</div>	
</div>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>