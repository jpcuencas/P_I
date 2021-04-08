<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<!--<meta name="copyright" content="PictiresImages, jupecuse, jupecuse"/>-->
<meta name="keywords" content="fotos, imagenes, compartir, albunes, photo, image, share, albums"/>
<meta name="description" content="pagina para compartir fotos y guardar albunes en la nube"/>
<meta name="author" content="Juan Pedro Cuenca Sevilla"/>

<meta name="robots" content="index, follow"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--<meta http-equiv="Content-Language" content="ES"/>-->

<link href="css/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>
<link href="css/impresion.css" rel="stylesheet" type="text/css" media="print" title="impresion"/>


<link href="css/stylewebgreat.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)"/>
<link href="css/stylewebmedium.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)"/>
<link href="css/stylewebmini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/altocontrastegreat.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" title="altoContrase"/>
<link href="css/altocontrastemedium.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" title="altoContrase"/>
<link href="css/altocontrastemini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>

<link href="css/textograndegreat.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" title="textoGrande"/>
<link href="css/textograndemedium.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" title="textoGrande"/>
<link href="css/textograndemini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="textoGrande"/>


<!--Definir el lenguaje por defecto de la paguina-->
<!--<meta http-equiv="Content-Script-Type" content="text/javascript"/>-->

<script type="text/javascript" src="js/styleswitcher.js" charset="utf-8"></script>
<!--<script type="text/javascript" src="js/prueba.js" charset="utf-8"></script>-->

<script type="text/javascript" src="js/castellano.js" charset="utf-8"></script>
<script type="text/javascript" src="js/funciones.js" charset="utf-8"></script>
<!--
<script type="text/javascript" src="js/funcionesValidar.js" charset="utf-8"></script>
<script type="text/javascript" src="js/fincionesValidarER.js" charset="utf-8"></script>
-->
<script type="text/javascript" src="js/cookies.js" charset="utf-8"></script>
<script type="text/javascript" src="js/base_64.js" charset="utf-8"></script>

</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<div class="cabecera">
<div class="logo">
	<img src="logo.jpg" alt="Logo de la empresa"/>
</div>

<div class="loged" id="loged">
	<fieldset class="flogin">
		<div class="imglogediv">
			<img class="imgloged" id="imgusuario" src="imagenes/usr.jpg" alt="Usuario"/>
		</div>
		<div id="userloged" class="userloged">
			<label>Has entrado como: </label><div class="logedUser" id="logedUsr"><a id="logedas" href="pg/Usuario.php"><?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></a></div>
		</div>
		<div id="horaent" class="horaent">
			<label>Ultima visita: </label><div class="visitaent" id="visitaent"></div>
		</div>
		<div id="exitloged" class="exitloged">
			<a href="#" onclick="javascript:salida_modificacss(); return false;">salir</a>
		</div>
	</fieldset>
</div>

<!-- action=" "-->
<form class="login" method="POST" name="f1" onsubmit="return false;">
<fieldset  id="login" class="flogin">
<div id="pidentif" class="pidentif">
	<!--
	<p>
		<label form="pUsu"> Usuario: </label>
		<input type="text" name="pUsu" id="pUsu" placeholder="Usuario" autocomplete required />
	</p>
	-->
	<label for="pUsu">Usuario: </label>
	<input type="text" size="23" maxlength="25" name="pUsu" id="pUsu" value="Usuario" onblur="javascript:onblurtexto('pUsu','Usuario','Grey');return false;" onfocus="javascript:onfocustexto('pUsu','Usuario','Black');return false;"/>
</div>
<div id="campoPWD" class="campoPWD">
	<!--
	<p>
		<label form="pPWD"> Contrase&ntilde;a (obligario)</label>
		<input type="password" name="pPWD" id="pPWD" placeholder="qLw9898" pattern="{a-z}{3}{0-9}{4}" required />
		(la contase&ntilde;a debe contener 3 letras y 4 numeros en este orden)
	</p>
	-->
	<label for="pPWD">Contraseña: </label>
	<input type="password" size="23" maxlength="15" name="pPWD" id="pPWD" />
</div>
<div id="recuerdam" class="recuerdam">
	<input type="checkbox" name="rrecuerdam" id="rrecuerdam" value="fail" onclick="javascript:recordar();return false;"/>Recordarme en este equipo
</div>
<div class="validarlog">
	<hr />
	<div id="botonlog" class="botonlog">
		<input type="submit" value="Entrar" onclick="javascript:formulariologear(); return false;"/>
	</div>
	<div id="linklog" class="linklog">
		<!-- href=" "-->
		<a href="">Olvido la contraseña </a>
	</div>
</div>
</fieldset>
</form>


<h1>P and I - Pictures & Images</h1>


<div class="menu display-great display-medium">
	<fieldset id="fmenu" class="fmenu">
		<ul>
			<li class="current_page_item"><a href="Home.html">Inicio</a></li>
			<li><a href="Registro.html">Registro</a></li>
			<li><a href="Busqueda.html">Busqueda</a></li>
			<li class="last">
				<!--<input type="search" name="buscar" id="buscar" placeholder="Buscar..."/>-->
				<input type="text" id="pBuscar" class="buscarmenu" name="buscar" value="Buscar..." onblur="javascript:onblurtexto('pBuscar','Buscar...','White');return false;" onfocus="javascript:onfocustexto('pBuscar','Buscar...','White');return false;"/></li>
		</ul>
		
	</fieldset>

</div>
	<div class="menuminiup display-mini">
	<label>Menu: </label><br>
		<select class="menuup display-mini" onchange="javascript:changepage()">
			<option>Inicio</option>
			<option>Registro</option>
			<option>Busqueda</option>
		</select>
		<input type="text" id="pBuscar2" class="buscarmenumini" name="buscar" value="Buscar..." onblur="javascript:onblurtexto('pBuscar2','Buscar...','White');return false;" onfocus="javascript:onfocustexto('pBuscar2','Buscar...','White');return false;"/>	
	</div>
<div class="hrSuperior">
	<hr/>
</div>
<div class="idioma">
<label> Idiomas: </label><br>
<div id="idioma" class="display-great display-medium">
	<input id="idesp" class="icon display-great display-medium" type="image" src="imagenes/icon/bandera-Espana.gif" alt="bandera española"  onClick="javascript:tradesp();return false;"/>
	<input id="iden" class="icon display-great display-medium" type="image" src="imagenes/icon/bandera-inglesa.gif" alt="bandera Inglesa"  onClick="javascript:traden();return false;"/>
</div>
<select class="display-mini" onchange="javascript:changeidioma()">
	<option>Espa&ntilde;ol</option>
	<option>Ingles</option>
</select>
</div>
</div>
<div class="page" id="page">

<h2>P and I - Plantilla</h2>
<br>
<h3>PLANTILLA</h3>
	<h2 class="display-great">grande</h2>
	<h2 class="display-medium">medio</h2>
	<h2 class="display-mini">pequenio</h2>

</div>


<div id="footer" class="footer">
<div id="estilos2" class="estilos2">
	<br>Escoja un Estilo para la Web: 
	<a href="#" onclick="javascript:cambiarEstilo('normal'); return false;"> Normal</a>&nbsp;ó&nbsp; 
	<a href="#" onclick="javascript:cambiarEstilo('altoContrase'); return false;"> Alto Contraste</a>
</div>
<div id="estilos" class="estilos">
	<br>Escoja un Estilo para la Web: 
	<a href="#" onclick="javascript:cambiarEstilo('normal'); return false;"> Normal</a>, 
	<a href="#" onclick="javascript:cambiarEstilo('altoContrase'); return false;"> Alto Contraste</a>&nbsp;ó&nbsp;
	<a href="#" onclick="javascript:cambiarEstilo('textoGrande'); return false;">Texto Grande</a>
</div>
	<hr />
		<select id="menuminidown" class="menuminidown display-mini" onchange="javascript:changepage()">
			<option>Inicio</option>
			<option>Registro</option>
			<option>Busqueda</option>
		</select>
	<span id="empresa" class="empresa">
		<label>Pictures and Images S.L. </label>
		<label> Copirigth &copy;</label>
	</span>
	<span id="contactodir" class="contacto">
		<label>Contacto: </label><a href="Contacto.html"> jpcs1@alu.ua.es</a>
	</span>
</div>
<div id="url" class="url">
	 http://www.mi_empresa_P_and_I.com 
</div>
</body>
</html>