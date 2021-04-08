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
<link href="../css/contacto/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/contacto/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/contacto/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/contacto/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/contacto/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/contacto/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validarcontacto.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageContacto" id="pageContacto">
<div id="contactotitulo">
<h2>P and I - Contacto</h2>
<br>
<h3>Contacto</h3>
</div>
<hr />
<div class="datos">
	
<form method="post" action="../phps/contactopg.php"  name="askform" id="askform" onsubmit="return false;">
	<div id="contactname">
	<label>Nombre : <input type="text" name="name" class="name" id="name" size="30" value="Su nombre" onblur="javascript:onblurtexto('name','Su nombre','Grey');return false;" onfocus="javascript:onfocustexto('name','Su nombre','Black');return false;"></label>
	</div>
	<br>
	<div id="contactemail">
	<label>E-Mail : <input type="text" size="30" maxlength="50" class="cEmail" name="cEmail" id="cEmail" value="ejemplo@email.com" onblur="javascript:onblurtexto('cEmail','ejemplo@email.com','Grey');javascript:quitarError('errorrEmail2');return false;" onfocus="javascript:onfocustexto('cEmail','ejemplo@email.com','Black');return false;"/></label>
	<div class="mainCompose" id="errorrEmail2">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La direccion de correo debe ser correcta</h3>
				<hr/>
					<p>-La direccion de correo debe rellenarse<br>
					   -La direccion de correo no es correcta</p>
				<hr/>
			</div>
	</div>
	</div>
	<br>
	<div id="labelcoment">
	<label>
		Escriba su pregunta...(min. 30, max. 3000 caracteres)					<br>
		<textarea title="Escriba su pregunta...(min. 30, max. 3000 caracteres)" onchange="javascript:contarletras();return false;" id="comment" name="comment" cols="30" rows="10"></textarea>
	</label>
	</div>
	<div id="submitcoment" class="submit">
		<input type="submit" name="submit_ask" title="Envie su pregunta" value="Envie su pregunta" onclick="javascript:formularioContacto();return false;">

		<div class="width50 floatright right paddingtop">
			Caracteres escritos:<input type="text" value="0" size="4" class="counter" id="counter" name="counter" maxlength="4" readonly="readonly">
		</div>
	</div>

				
</form>
	
	
	
</div>

<br>
</div>

<?php
	include_once("../phps/includes/web/pie2.inc.php");
?>
</body>
</html>