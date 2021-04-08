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
<link href="css/busqueda/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/busqueda/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/busqueda/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
?>

<script type="text/javascript" src="js/validarbuscar.js" charset="utf-8"></script>

<script type="text/javascript" src="js/ordenacion.js" charset="utf-8"></script>
<script type="text/javascript" src="js/buscar.js" charset="utf-8"></script>
</head>
<body onload="javascript:onloadbody();javascript:onloadbodyplantilla(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pageBusqueda" id="pageBusqueda">
	<div id="titulobusqueda">
		<h2>P and I - Busqueda</h2>
	<br>
	<h3>Busqueda personalizada:</h3>
	</div>
	<form method="POST" action="phps/buscarpg.php" name="f3" class="f3">
	<hr />
	<div id="btituloft" class="CTitulo">
	<!--
		<p>
			<label form="bTitulo"> Titulo de foto: </label>
			<input type="search" name="bTitulo" id="bTitulo" size="25" maxlength="25"/>
		</p>
	-->
		<p><label for="bTitulo">Titulo de foto:</label>
		<input type="text" size="25" maxlength="25" class="bTitulo" name="bTitulo" id="bTitulo" value="Titulo de la foto" onblur="javascript:onblurtexto('bTitulo','Titulo de la foto','Grey');javascript:quitarError('errorbTitulo');return false;" onfocus="javascript:onfocustexto('bTitulo','Titulo de la foto','Black');return false;"/></p>
		<div class="mainCompose" id="errorbTitulo">
			<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>Error el titulo no puede estar vacio</h3>
				<hr/>
					<p>El titulo de la foto a buscar no puede estar vacio</p>
				<hr/>
			</div>
		</div>
	</div>
	

	<div class="CFecha">
	<!--
	<p>
		<label>Fecha de la foto:</label><br>
		<label form="fecha1"> Entre: </label>
		<input type="date" name="fecha1" id="fecha1" max="hoy"/>
		<label from="fecha2">y:</label>
		<input type="date" name="fecha1" id="fecha1" max="hoy"/>
	</p>
	-->
		<div id="bfecha1">
		<label>Fecha de la foto:</label><br>
		<label form="bFdia">Entre:</label>
		</div>
		<select id="bFdia" name="bFdia" onfocus="javascript:quitarError('errorbFdia');return false;">
		
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
		<label form="bFmes"> / </label>
		<select id="bFmes" name="bFmes" onfocus="javascript:quitarError('errorbFdia');return false;">
		
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
		<label form="bFanio"> / </label>
		<select id="bFanio" name="bFanio" onfocus="javascript:quitarError('errorbFdia');return false;">
		
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
		<div class="mainCompose" id="errorbFdia">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La fecha inicial debe rellenarse</h3>
				<hr/>
					<p>La fecha inicial de busqueda debe rellenarse</p>
				<hr/>
			</div>
		</div>
		<br>
		<div id="bfecha2">
		<label form="bFdia2">y:</label>
		</div>
		<select id="bFdia2" name="bFdia2" onfocus="javascript:quitarError('errorbFdia2');return false;">
		
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
		<label form="bFmes2"> / </label>
		<select id="bFmes2" name="bFmes2" onfocus="javascript:quitarError('errorbFdia2');return false;">
		
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
		<label form="bFanio2"> / </label>
		<select name="bFanio2" id="bFanio2" onfocus="javascript:quitarError('errorbFdia2');return false;">
		<?php
		include_once("phps/includes/Anios.php");
		?>			
		</select>

		<div class="mainCompose" id="errorbFdia2">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La fecha final debe rellenarse</h3>
				<hr/>
					<p>La fecha final de busqueda debe rellenarse</p>
				<hr/>
			</div>
	</div>
	</div>
	<hr />
	<div id="CPais" class="CPais">
	<!--
		<p>
			<label form="bPais"> Pais: </label>
			<input type="text" name="bPais" id="bPais" size="25" maxlength="25"/>
		</p>
	-->
		<p>
			<label form="bPais">Pais: </label>
			<select id="bPais" name="bPais" class="bPais">
				<option value="0" selected>(Seleccione pais)</option> 
				<?php
				include_once("phps/includes/Paises.php");
				?>
			</select>
		</p>
	</div>
	
	<div id="btlimbiarb" class="boton">
		<hr />
		<input type="reset" value="Limpiar" id="limpiar" onclick="javascript:limpiarbusqueda(); return false;"/>
		<input type="submit" value="Buscar" id="buscar" onclick="submit();"/>
		<select class="orden" name="bordenar1" id="bordenar1" onchange="javascript:reordena(document.getElementById('ordenarpor1').value);return false;">
			<option value="ASC" selected>Ascendente</option>
			<option value="DES">Descendente</option>
		</select>
	</div>
			<div id="bordenarr" class="bordenarr">
			<p><label form="crAcesso">Ordenar por: </label>
			<input type="radio" name="ordenarpor1" id="ordenarpor1" onclick="javascript:ordenatit();return false;" value="tit" checked />Titulo
			<input type="radio" name="ordenarpor1" id="ordenarpor1" onclick="javascript:ordenafch();return false;" value="fch" />Fecha
			<input type="radio" name="ordenarpor1" id="ordenarpor1" onclick="javascript:ordenapas();return false;" value="pas" />Pais
		</p>
	</form>
	<br>
	<div id="bResultados" class="bResultados">
	<!--		<br>
		<br>
		<label>Fotos encontradas: </label><br>

		<input type="text" name="calbum1" disabled>
		class="flogin">
		-->
		<!--
		<fieldset> 
		<legend>Fotos encontradas: </legend>
		<ol>
			<li><label form="bfoto1"></label>
			<a href="Detalle.html"><img src="" class="imagen" id="bfoto1" alt="Fotos"></a></li>
			<li><label form="bfoto2"></label>
			<a href="Detalle.html"><img src="" class="imagen" id="bfoto2" alt="Fotos"></a></li>
			<li><label form="bfoto3"></label>
			<a href="Detalle.html"><img src="" class="imagen" id="bfoto3" alt="Fotos"></a></li>
		</ol>
		</fieldset>-->
	</div>
</div>
	
<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>