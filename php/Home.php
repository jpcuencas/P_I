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

<link href="css/home/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/home/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/home/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="css/home/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/home/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/home/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>


<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
?>
</head>
<body onload="javascript:onloadbody();javascript:onloadbodyplantilla(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div id="pageHome" class="pageHome">
	<h2>P and I - Pictures & Images</h2>

	<h3>Comparte y disfruta</h3>
<p>
Te ofrecemos la oportunclassad de compartir tus mejores momentos<br>
puedes crear tus propios albunes y descargarte las fotos de tus amigos<br>
y compartir momentos con ellos<br>
<br>
ya sabes una imagen dice mas que mil palabras<br>
te esperamos...
</p>
</div>
<?php
	include_once("phps/includes/Homephp.php");
?>
<div id="labelfotos" class="labelfotos">
	<p><label>Ultimas 5 Fotos:</label></p>
</div>
<div class="fotos5">
		<ol>
			<li>
				<fieldset class="hFoto1">
					<div class="image"><a href="phps/Detallepg.php?f=<?php echo((isset($IDfoto1)?$IDfoto1:"")); ?>"><img class="imagen" id="img1" src="<?php echo((isset($Ruta1)?$Ruta1:"")); ?>" alt="Foto 1"/></a></div>
					<div class="atributos display-great display-medium">
						<label form="img1Titulo">Titulo: </label><div id="img1Titulo"><label><?php echo((isset($Titulo1)?$Titulo1:"")); ?></label></div><!--<input type="text" name="img1Titulo" disabled />-->
						<label form="img1Autor">Autor: </label><div id="img1Autor"><a href="pg/Usuario.php?ui='<?php echo((isset($idUsr1)?$idUsr1:"")); ?>"><?php echo((isset($Nomusu1)?$Nomusu1:"")); ?></a></div>
						<label form="img1Album">Album: </label><div id="img1Ablum"><a href="pg/Album.php?ui='<?php echo((isset($albumID1)?$albumID1:"")); ?>"><?php echo((isset($Album1ok)?$Album1ok:"")); ?></a></div>
					</div>
				</fieldset>
			</li>$idUsr1=$consulta11["IdUsuario"];
			<li>
				<fieldset class="hFoto2">
					<div class="image"><a href="phps/Detallepg.php?f=<?php echo((isset($IDfoto2)?$IDfoto2:"")); ?>"><img class="imagen" id="img2" src="<?php echo((isset($Ruta2)?$Ruta2:"")); ?>" alt="Foto 2"/></a></div>
					<div class="atributos display-great display-medium">
						<label form="img2Titulo">Titulo: </label><div id="img2Titulo"><label><?php echo((isset($Titulo2)?$Titulo2:"")); ?></label></div><!--<input type="text" name="img2Titulo" disabled />-->
						<label form="img2Autor">Autor: </label><div id="img2Autor"><a href="pg/Usuario.php?ui='<?php echo((isset($idUsr2)?$idUsr2:"")); ?>'"><?php echo((isset($Nomusu2)?$Nomusu2:"")); ?></a></div>
						<label form="img2Album">Album: </label><div id="img2Album"><a href="pg/Album.php?ui='<?php echo((isset($albumID2)?$albumID2:"")); ?>"><?php echo((isset($Album2ok)?$Album2ok:"")); ?></a></div>
					</div>
				</fieldset>
			</li>
			<li>
				<fieldset class="hFoto3">
					<div class="image"><a href="phps/Detallepg.php=f=<?php echo((isset($IDfoto3)?$IDfoto3:"")); ?>"><img class="imagen" id="img3" src="<?php echo((isset($Ruta3)?$Ruta3:"")); ?>" alt="Foto 3"/></a></div>
					<div class="atributos display-great display-medium">
						<label form="img3Titulo">Titulo: </label><div id="img3Titulo"><label><?php echo((isset($Titulo3)?$Titulo3:"")); ?></label></div><!--<input type="text" name="img3Titulo" disabled />-->
						<label form="img3Autor">Autor: </label><div id="img3Autor"><a href="pg/Usuario.php?ui='<?php echo((isset($idUsr3)?$idUsr3:"")); ?>"><?php echo((isset($Nomusu3)?$Nomusu3:"")); ?></a></div>
						<label form="img3Album">Album: </label><div id="img3Album"><a href="pg/Album.php?ui='<?php echo((isset($albumID3)?$albumID3:"")); ?>"><?php echo((isset($Album3ok)?$Album3ok:"")); ?></a></div>
					</div>
				</fieldset>
			</li>
			<li>
				<fieldset class="hFoto4">
					<div class="image"><a href="phps/Detallepg.php?f=<?php echo((isset($IDfoto4)?$IDfoto4:"")); ?>"><img class="imagen" id="img4" src="<?php echo((isset($Ruta4)?$Ruta4:"")); ?>" alt="Foto 4"/></a></div>
					<div class="atributos display-great display-medium">
						<label form="img4Titulo">Titulo: </label><div id="img4Titulo"><label><?php echo((isset($Titulo4)?$Titulo4:"")); ?></label></div><!--<input type="text" name="img4Titulo" disabled />-->
						<label form="img4Autor">Autor: </label><div id="img4Autor"><a href="pg/Usuario.php?ui='<?php echo((isset($idUsr4)?$idUsr4:"")); ?>"><?php echo((isset($Nomusu4)?$Nomusu4:"")); ?></a></div>
						<label form="img4Album">Album: </label><div id="img4Album"><a href="pg/Album.php?ui='<?php echo((isset($albumID4)?$albumID4:"")); ?>"><?php echo((isset($Album4ok)?$Album4ok:"")); ?></a></div>
					</div>
				</fieldset>
			</li>
			<li>
				<fieldset class="hFoto5">
					<div class="image"><a href="phps/Detallepg.php?f=<?php echo((isset($IDfoto5)?$IDfoto5:"")); ?>"><img id="img5" class="imagen" src="<?php echo((isset($Ruta5)?$Ruta5:"")); ?>" alt="Foto 5"/></a></div>
					<div class="atributos display-great display-medium">
						<label form="img5Titulo">Titulo: </label><div id="img5Titulo"><label><?php echo((isset($Titulo5)?$Titulo5:"")); ?></label></div><!--<input type="text" name="img5Titulo" disabled />-->
						<label form="img5Autor">Autor: </label><div id="img5Autor"><a href="pg/Usuario.php?ui='<?php echo((isset($idUsr5)?$idUsr5:"")); ?>"><?php echo((isset($Nomusu5)?$Nomusu5:"")); ?></a></div>
						<label form="img5Album">Album: </label><div id="img5Album"><a href="pg/Album.php?ui='<?php echo((isset($albumID5)?$albumID5:"")); ?>"><?php echo((isset($Album5ok)?$Album5ok:"")); ?></a></div>
					</div>
				</fieldset>
			</li>
		</ol>

</div>
<br>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>