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
<link href="../css/aviso/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/aviso/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/aviso/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/aviso/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/aviso/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/aviso/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validaraviso.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageAviso" id="pageAviso">
<div id="avisotitulo">
<h2>P and I - Aviso</h2>
<h3>AVISO</h3>
</div>
<hr />

<div class="mensaje">
	<fieldset>
		<legend>Aviso!!</legend>
<?php
	if (isset($_GET["e"])) {
		$error = $_GET["e"];
		switch ($error) {
			case 1:
			case 2: 
			case 3: 
			case 4:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:
			case 10:
			case 11:
			case 12:
			case 15:
			case 13:
			case 14:
			case 16:
			case 17:
			case 18:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
			case 20:
					echo("<img src=\"../imagenes/iconos/mensajes/14984965-ubicacion-rojo-icono-de-candado-para-mapas.jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
			case 21:
					echo("<img src=\"../imagenes/iconos/mensajes/images.jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
			case 22:
					echo("<img src=\"../imagenes/iconos/mensajes/images.jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
			case 22:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 23:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 24:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 25:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 26:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(1).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 27:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(1).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 28:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(1).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
				case 29:
					echo("<img src=\"../imagenes/iconos/mensajes/images%20(2).jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
			default:
				echo("<img src=\"../imagenes/iconos/mensajes/descarga.jpg\" id=\"icoaviso\" class=\"icono\" alt=\"Aviso\"/>");
				break;
		}
	}
?>				
		<div class="avisoms" id="aviso">
			<p>mensaje de aviso</p>
<?php
	if (isset($_GET["e"])) {
		$error = $_GET["e"];
		switch ($error) {
			case 1:
			case 2: 
			case 3: 
					echo("<span class=\"errormensaje\">Error en formulario buscar</span>");
				break;
			case 4:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:
			case 10:
			case 11:
			case 12:
			case 15:
					echo("<span class=\"errormensaje\">Error en formulario de registro</span>");
				break;
			case 13:
			case 14:
					echo("<span class=\"errormensaje\">Error en formulario de crear album</span>");
				break;
			case 16:
			case 17:
					echo("<span class=\"errormensaje\">Error en formulario de foto</span>");
				break;
			case 18:
					echo("<span class=\"errormensaje\">Error en formulario de contacto</span>");
				break;
			case 20:
					echo("<span class=\"errormensaje\">Error durante el inicio de sesion</span>");
				break;
			case 21:
					echo("<span class=\"errormensaje\">Error ha expirado la sesion</span>");
				break;
			case 22:
					echo("<span class=\"errormensaje\">Error " . $_SESSION["ERRORBD"] . "</span>");
				break;
			case 23:
					echo("<span class=\"errormensaje\">No hay fotos con esos criterios de busqueda</span>");
				break;
				case 24:
					echo("<span class=\"errormensaje\">Fallo al registrarse</span>");
				break;
				case 25:
					echo("<span class=\"errormensaje\">Fallo en formulario de Crear un Album</span>");
				break;
				case 26:
					echo("<span class=\"errormensaje\">Su album se ha creado</span>");
				break;
				case 27:
					echo("<span class=\"errormensaje\">Su foto se ha subido</span>");
				break;
				case 28:
					echo("<span class=\"errormensaje\">Usuario borrado</span>");
				break;
				case 29:
					echo("<span class=\"errormensaje\">Usuario NO borrado</span>");
				break;				
			default:
					echo("<span class=\"error\">Ha ocurrido un error inesperado.</span>");
				break;

		}
	}
?>
		</div>
	</fieldset>
</div>
<br>
<hr />

<div id="lnkcontac" class="lnkcontac">
	<p><a href="Contacto.html">Contacto admin. </a></p>
</div>

<div id="lnkinicio" class="lnkinicio">
	<p><a href="../Home.html">Inicio  </a></p>
</div>

</div>

<?php
	include_once("../phps/includes/web/pie2.inc.php");
?>
</body>
</html>