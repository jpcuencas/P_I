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
<link href="../css/foto/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../css/foto/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="../css/foto/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="../css/foto/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="../css/foto/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="../css/foto/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>

<script type="text/javascript" src="../js/validarfoto.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("../phps/includes/web/cabeceraWEB2.inc.php");
?>
<div class="pageFoto" id="pageFoto">
<div id="fototitulo">
<h2>P and I - Foto</h2>
<br>
<h3>Subir foto</h3>
</div>

<div class="datos">
<form class="subirfoto" action="../phps/fotopg.php" method="POST" enctype="multipart/form-data">
<div class="imagenfoto">
	<p><img src="../imagenes/img/292484_10151041052255851_771792340_n.jpg" class="imagen" alt="Foto seleccionada"/></p>
</div>
	<!--titulo-->
	<div id="archivofoto">
		<label form="archivo"></label>
		<input type="file" name="ffoto" id="ffoto" accept="image/*" />
					<div class="mainCompose" id="errorffoto">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>Debe seleccionar una imagen</h3>
				<hr/>
					<p>
					-Debe seleccionar una imagen
					</p>
				<hr/>
			</div>
	</div>
	</div>
	<!--<div id="subirft">
	<p><input type="submit" value="Selecionar" id="selecionar" onclick="javascript:formulariofotoft();return false;"/>
		<input type="reset" value="Quitar" /></p>
	</div>-->
	<hr />

		<div id="camptitulo" class="camptitulo">
			<p>
			<label form="ctitulo">Titulo: </label>
			<input type="text" class="ftitulo" size="25" maxlength="25" id="ftitulo" value="Titulo de la foto" onblur="javascript:onblurtexto('ftitulo','Titulo de la foto','Grey');return false;" onfocus="javascript:onfocustexto('ftitulo','Titulo de la foto','Black');return false;"/><br>
			<!--<input type="text" size="25" maxlength="25" id="ftitulo" autocomplete />-->
			</p>
			<div class="mainCompose" id="errorftitulo">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El titulo debe rellenarse</h3>
				<hr/>
					<p>
					-El titulo no debe quedar vacio
					</p>
				<hr/>
			</div>
	</div>
		</div>
		<!--
		Como escribimos el autor??
		-->
		<div id="campautor" class="campautor">
			<!--<p><label form="cautor">Autor: </label><a href="" name"cautor"><label> </label></a></p>-->
			<label form="ftAutor">Autor: </label><div id="ftAutor"><a href="pg/Usuario.html"><?php echo((isset($_POST['NOMUsu'])?$_POST['NOMUsu']:"")); ?></a></div><!--<input type="text" name="cautor" disabled />-->
		</div>
		<div id="campalbum" class="campalbum">
			<p><label form="falbum">Album: </label>
			<select id="falbum">
				<option value="0">Selecione album</option>
				<?php
					include_once("../phps/includes/Fotoalb.php");
				?>
			</select></p>
			<div class="lnkcreAlbn">
				<p><a href="Crearalbum.html">Crear album</a></p>
			</div>
		</div>
		<hr />
		<div id="camppais" class="camppais">
			<p><label form="cpais">Pais:</label>
			<!--<input type="text" size="25" maxlength="25" id="cpais" autocomplete />-->
			<input type="text" size="25" maxlength="25" id="cpais" class="cpais" value="Pais" onblur="javascript:onblurtexto('cpais','Pais');return false;" onfocus="javascript:onfocustexto('cPais','Pais');return false;"/></p>
		</div>
		<!--
		Como escribimos la fecha??
		-->
		<div class="campfecha">
			<div class="fecha"><label form="ftDia">Fecha de subida: </label></div>
							<select id="fFdia" onblur="javascript:quitarError('errorrfFdia');return false;">

						<optgroup label="Dias:">
		
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<label form="fFmes"> / </label>
		<select id="fFmes" class="fFmes" onblur="javascript:quitarError('errorrfFdia');return false;">
		
		<optgroup label="Meses:">
		
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<label form="fFanio"> / </label>
		<select id="fFanio" class="fFanio" onblur="javascript:quitarError('errorrfFdia');return false;">
		
		<optgroup label="1900">
		
			<option value="1900">1900</option>
			<option value="1901">1901</option>
			<option value="1902">1902</option>
			<option value="1903">1903</option>
			<option value="1904">1904</option>
			<option value="1905">1905</option>
			<option value="1906">1906</option>
			<option value="1907">1907</option>
			<option value="1908">1908</option>
			<option value="1909">1909</option>
			<option value="1910">1910</option>

		<optgroup label="1910">
			
			<option value="1911">1911</option>
			<option value="1912">1912</option>
			<option value="1913">1913</option>
			<option value="1914">1914</option>
			<option value="1915">1915</option>
			<option value="1916">1916</option>
			<option value="1917">1917</option>
			<option value="1918">1918</option>
			<option value="1909">1909</option>
			<option value="1920">1920</option>
			
		<optgroup label="1920">			
			
			<option value="1921">1921</option>
			<option value="1922">1922</option>
			<option value="1923">1923</option>
			<option value="1924">1924</option>
			<option value="1925">1925</option>
			<option value="1926">1926</option>
			<option value="1927">1927</option>
			<option value="1928">1928</option>
			<option value="1929">1929</option>
			<option value="1930">1930</option>
			
		<optgroup label="1930">
		
			<option value="1931">1931</option>
			<option value="1932">1932</option>
			<option value="1933">1933</option>
			<option value="1934">1934</option>
			<option value="1935">1935</option>
			<option value="1936">1936</option>
			<option value="1937">1937</option>
			<option value="1938">1938</option>
			<option value="1939">1939</option>
			<option value="1940">1940</option>
			
		<optgroup label="1940">
			
			<option value="1941">1941</option>
			<option value="1942">1942</option>
			<option value="1943">1943</option>
			<option value="1944">1944</option>
			<option value="1945">1945</option>
			<option value="1946">1946</option>
			<option value="1947">1947</option>
			<option value="1948">1948</option>
			<option value="1949">1949</option>
			<option value="1950">1950</option>
			
		<optgroup label="1950">
			
			<option value="1951">1951</option>
			<option value="1952">1952</option>
			<option value="1953">1953</option>
			<option value="1954">1954</option>
			<option value="1955">1955</option>
			<option value="1956">1956</option>
			<option value="1957">1957</option>
			<option value="1958">1958</option>
			<option value="1959">1959</option>
			<option value="1960">1960</option>
			
		<optgroup label="1960">
			
			<option value="1961">1961</option>
			<option value="1962">1962</option>
			<option value="1963">1963</option>
			<option value="1964">1964</option>
			<option value="1965">1965</option>
			<option value="1966">1966</option>
			<option value="1967">1967</option>
			<option value="1968">1968</option>
			<option value="1969">1969</option>
			<option value="1970">1970</option>
			
		<optgroup label="1970">
			
			<option value="1971">1971</option>
			<option value="1972">1972</option>
			<option value="1973">1973</option>
			<option value="1974">1974</option>
			<option value="1975">1975</option>
			<option value="1976">1976</option>
			<option value="1977">1977</option>
			<option value="1978">1978</option>
			<option value="1979">1979</option>
			<option value="1980">1980</option>

		<optgroup label="1980">

			<option value="1981">1981</option>
			<option value="1982">1982</option>
			<option value="1983">1983</option>
			<option value="1984">1984</option>
			<option value="1985">1985</option>
			<option value="1986">1986</option>
			<option value="1987">1987</option>
			<option value="1988">1988</option>
			<option value="1989">1989</option>
			<option value="1990">1990</option>
			
		<optgroup label="1990">
			
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1908</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			
		<optgroup label="2000">
			
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			
		<optgroup label="2010">
			
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
					
				</select>
			<div class="mainCompose" id="errorrfFdia">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La fecha es incorrecta</h3>
				<hr/>
					<p>La fecha de nacimiento debe ser correcta</p>
				<hr/>
			</div>
	</div>
		</div>
		<hr />
		<div class="campdescarga">
			<p><input type="checkbox" value="Desc" id="descargar" />Se puede descargar</p>
		</div>
	
		<div id="campcomentarioft"  class="campcomentario">
			<p><label form="Ccomentario">Comentario: </label><br><!--<input type="textarea" rows="4" cols="50" value="Desc" id="Ccomentario" />-->
			<textarea rows="4" cols="50" name="Ccomentario" id="Ccomentario" maxlength="255"></textarea>
			</p>
		</div>
		
		<div id="ftboton" class="ftboton">
			<hr />
			<p><input type="submit" value="Guardar" id="guardar" onclick="javascript:formularioFoto(); return false;"/></p>
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