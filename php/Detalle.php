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
<link href="css/detalle/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/detalle/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/detalle/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="css/detalle/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/detalle/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/detalle/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
?>
<script type="text/javascript" src="js/validardetalles.js" charset="utf-8"></script>
<!--
<script type="text/javascript" src="js/funcionesValidar.js" charset="utf-8"></script>
<script type="text/javascript" src="js/fincionesValidarER.js" charset="utf-8"></script>
-->
</head>
<body onload="javascript:onloadbody();javascript:onloadbodyplantilla(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pageDetalle" id="pageDetalle">
	<div id="titulodetalle" class="titulodetalle">
		<h2>P and I - Detalle</h2>
		<br>
		<h3>Resultados de busqueda: </h3>
	</div>
	<br>
	<hr />
<?php
	include_once("phps/includes/Detallephp.php");
?>
	<div id="dimagen" class="dimagen">
		<p>
			<img class="detalleimagen" src="<?php echo((isset($Fichero)?$Fichero:"")); ?>" alt="Imagen encontrada"/><br>
			<a href="pg/Auxiliardesdt.php" class="dlnkdes">Descargar</a><br>
		</p>
	</div>
	<div class="datos">
		<!--¿como rellenar los datos? label from="" a?-->
		<div id="dtTitulo"><label form="dtTitulo">Titulo:<?php echo((isset($Titulo)?$Titulo:"")); ?></label></div><!--<input type="text" name="dtTitulo" disabled />-->
		<div id="dtAutor"><label form="dtAutor">Autor: </label><a href="pg/Usuario.html?iu=<?php echo((isset($IdUsuario)?$IdUsuario:"")); ?>"><?php echo((isset($Usuario)?$Usuario:"")); ?></a></div>
		<div id="dtAlbum"><label form="dtAlbum">Album: </label><a href="pg/Album.html?i=<?php echo((isset($IdAlbum)?$IdAlbum:"")); ?>"><?php echo((isset($Album)?$Album:"")); ?></a></a></div>
		<div id="dtfecha" class="fecha"><label form="dtDia">Fecha: </label> </div> 
		<?php echo((isset($Fecha)?$Fecha:"")); ?>
		<div class="dtsDia" id="dtDia"><label></label></div><!--<input type="text" size="2" name="dtDia" disabled />--><label form="dtMes"> / </label><div class="dtsMes" id="rsMes"><label></label></div><!--<input type="text" size="2" name="dtMes" disabled />--><label form="dtAnio"> / </label><div class="dtsAnio" id="dtAnio"><label></label></div><!--<input type="text" size="4" name="dtAnio" disabled />-->
			<div id="dtPais"><label form="dtPais">Pais: </label>
			<?php echo((isset($Pais)?$Pais:"")); ?>
		</div><!--<input type="text" name="rsPais" disabled />-->
		<div class="lnkalbn">
			<p><a href="pg/Album.html?i=<?php echo((isset($IdAlbum)?$IdAlbum:"")); ?>">Album</a></p>
		</div>
	
		<div id="campcomentario" class="campcomentario">
			<p><label form="dtComentario">Comentario: </label><br><!--<input type="textarea" rows="4" cols="50" value="Desc" id="Ccomentario"  disabled/>-->
			<textarea rows="4" cols="50" name="dtComentario" id="dtComentario" maxlength="255" disabled><?php echo((isset($Descripcion)?$Descripcion:"")); ?></textarea> <!--<div id="dtComentario"><label></label></div>-->
			</p>
		</div>
	</div>
	<hr />
	<br>
</div>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>