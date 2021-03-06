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
<link href="css/registro/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/registro/altocontraste.css" rel="alternate stylesheet" type="text/css" media="screen" title="altoContrase"/>
<link href="css/registro/textogrande.css" rel="alternate stylesheet" type="text/css" media="screen" title="textoGrande"/>

<link href="css/registro/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" title="altoContrase"/>
<link href="css/registro/mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>

<link href="css/registro/styleweb.css" rel="stylesheet" type="text/css" media="screen"/>

<?php
	include_once("phps/includes/web/cabecerajs.inc.php");
		include_once("phps/registropg.php");
?>
<script type="text/javascript" src="js/capcha.js" charset="utf-8"></script>

<script type="text/javascript" src="js/validarregistro.js" charset="utf-8"></script>

</head>
<body onload="javascript:onloadbody();javascript:onloadbodyregistro();javascript:generaCaptcha(); return false;"> <!--onload="set_style_from_cookie()"-->
<?php
	include_once("phps/includes/web/cabeceraWEB.inc.php");
?>
<div class="pageRegistro" id="pageRegistro">
	<div id="tituloregistro">
	<h2>P and I - Registro</h2>
	<br>
	<h3>Registro de nuevo usuario: </h3>
	</div>
	
	<form method="POST" action="phps/registropg.php" name="f2" class="formfotoreguistro" enctype="multipart/form-data">
		<div class="imgusr">
			<p><img class="imagen" src="imagenes/usr.jpg" alt="Foto del usuario"/></p>
		</div>
		<div class="botonsubir">
			<input type="file" name="fotoregistro" id="fotoregistro" accept="image/*"/>
			<div class="mainCompose" id="errorfotoregistro">
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
	<hr />
	<div class="datos">
		<div id="rnombre" class="CNombre">
		<!--
			<p>
				<label form="rUsu"> Nombre de usuario (obligario): </label>
				<input type="text" name="rUsu" id="rUsu" placeholder="Usuario" autocomplete required />
			</p>
		-->
			<p><label for="rUsu">Nombre de usuario (obligario): </label>
				<input type="text" size="25" maxlength="25" name="rUsu" class="rUsu" id="rUsu" value="Usuario" onblur="javascript:onblurtexto('rUsu','Usuario','Grey');quitarError('errorrUsu');return false;" onfocus="javascript:onfocustexto('rUsu','Usuario','Black');return false;"/>
			</p>
			<div class="mainCompose" id="errorrUsu" >
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El nombre de usuario no es valido</h3>
				<hr/>
					<p>El nombre debe rellenarse<br>
					-s??lo puede contener letras del alfabeto ingl??s<br>
					-la longitud m??nima 3 caracteres y m??xima 15
					</p>
				<hr/>
			</div>
	</div>
		</div>
		<div id="rcontrasenia" class="CPWD">
		<!--
			<p>
				<label form="rPWD"> Contrase&ntilde;a (obligario): </label>
				<input type="password" name="rPWD" id="rPWD" placeholder="qLw9898" pattern="{a-z}{3}{0-9}{4}" required />
				(la contase&ntilde;a debe contener 3 letras y 4 numeros en este orden)
			</p>
		-->
			<p><label for="rPWD">Contrase&ntilde;a (obligatorio): </label>
				<input type="password" size="25" maxlength="15" name="rPWD" id="rPWD" onblur="javascript:onblurtexto('rPWD','','Black');javascript:quitarError('errorrPWD');return false;" onfocus="javascript:onfocustexto('rPWD','','Black');return false;"/>
			</p>
			<div class="mainCompose" id="errorrPWD">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La contrase??a no es valida</h3>
				<hr/>
					<p>La contrase??a debe rellenarse<br>
					-s??lo puede contener letras del alfabeto ingl??s<br>
					n??meros y el subrayado<br>
					-al menos debe contener una letra en may??sculas,<br> 
					una letra en min??sculas y un n??mero<br>
					-la lgongitud m??nima 6 caracteres y m??xima 15
					</p>
				<hr/>
			</div>
	</div>
		</div>
		<div id="rcontrasenia2" class="CPWD2">
		<!--
			<p>
				<label form="rPWD2">Repita Contrase&ntilde;a (obligario): </label>
				<input type="password" name="rPWD2" id="rPWD2" placeholder="qLw9898" pattern="{a-z}{3}{0-9}{4}" required />
				(la contase&ntilde;a debe contener 3 letras y 4 numeros en este orden)
			</p>
		-->
			<p><label for="rPWD2">Repita contrase&ntilde;a (obligatorio): </label>
				<input type="password" size="25" maxlength="15" name="rPWD2" id="rPWD2" onblur="javascript:onblurtexto('rPWD2','','Black');javascript:quitarError('errorrPWD2');return false;" onfocus="javascript:onfocustexto('rPWD2','','Black');return false;"/>
			</p>
			<div class="mainCompose" id="errorrPWD2">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>Las contrase??as no coindicen</h3>
				<hr/>
					<p>Se debe escribir la misma contrase??a en ambos lados</p>
				<hr/>
			</div>
	</div>
		</div>
		<div id="rdireccion" class="CEmail">
		<!--
			<p>
				<label form="rEmail"> Direccion de correo: </label>
				<input type="email" name="rEmail" id="rEmail" placeholder="ejemplo@email.com" />
			</p>
		-->
			<p><label for="rEmail">Direccion de correo (obligatorio): </label>
				<input type="text" size="30" maxlength="50" class="rEmail" name="rEmail" id="rEmail" value="ejemplo@email.com" onblur="javascript:onblurtexto('rEmail','ejemplo@email.com','Grey');javascript:quitarError('errorrEmail');return false;" onfocus="javascript:onfocustexto('rEmail','ejemplo@email.com','Black');return false;"/>
			</p>
			<div class="mainCompose" id="errorrEmail">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>La direccion de correo debe ser correcta</h3>
				<hr/>
					<p>-La direccion de correo debe rellenarse<br>
					   -La direccion de correo no es correcta</p>
				<hr/>
			</div>
	</div>
			<hr />
		</div>
		<div id="rgenero" class="CGenero">
		<!--
			<p>
				<fieldset>
					<legend>Seleccione priorclassad</legend>
					<p> <label><input type="radio" name="rGenero" value="H"/> Hombre </label></p>
					<p> <label><input type="radio" name="rGenero" value="M" checked/> Mujer </label></p>
				</fieldset>
			</p>
		-->
			<!--form="rGenero"-->
			<p><label form="rGenero">Genero:</label>
				<input type="radio" name="rGenero" id="rGenero" value="H"/>Hombre
				<input type="radio" name="rGenero" id="rGenero" value="M" checked />Mujer
			</p>
<!--			<div class="mainCompose" id="errorrGenero">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El genero debe rellenarse</h3>
				<hr/>
					<p>Debe asegurarse de que ha elegido genero</p>
				<hr/>
			</div>
	</div>
-->
		</div>
		<hr />
		<div class="CFecha">
		<!--
			<p>
				<label form="rfecha"> Fecha de nacimiento: </label>
				<input type="date" name="rfecha" class="rfecha" max="hoy" />
			</p>
		-->
		<div id="rfecha">
			<label form="rFdia">Fecha Nacimiento:</label>
		</div>
				<select id="rFdia" onblur="javascript:quitarError('errorrFdia');return false;">

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
		<label form="rFmes"> / </label>
		<select id="rFmes" class="rFmes" onblur="javascript:quitarError('errorrFdia');return false;">
		
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
		<label form="rFanio"> / </label>
		<select id="rFanio" class="rFanio" onblur="javascript:quitarError('errorrFdia');return false;">
		
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

			<div class="mainCompose" id="errorrFdia">
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
		<div id="CPoblacion" class="CPoblacion">
		<!--
			<p>
				<label form="rPop"> Poblacion: </label>
				<input type="text" name="rPop" id="rPop" placeholder="Poblacion" autocomplete />
			</p>
		-->
			<p><label for="rPop">Poblacion: </label>
				<input type="text" size="25" maxlength="25" class="rPop" name="rPop" id="rPop" value="Poblacion" onblur="javascript:onblurtexto('rPop','Poblacion','Grey');return false;" onfocus="javascript:onfocustexto('rPop','Poblacion','Black');return false;"/>
			</p>
		</div>
		<div id="CCP" class="CCP">
		<!--
			<p>
				<label form="rCP"> Poblacion: </label>
				<input type="number" size="5" maxlength="5" name="rCP" id="rCP" placeholder="02345" autocomplete />
			</p>
		-->
			<p><label for="rCP">Codigo Postal(solo numeros): </label>
				<input type="text" size="5" maxlength="5" class="rCP" name="rCP" id="rCP" value="02345" onblur="javascript:onblurtexto('rCP','02345','Grey');javascript:quitarError('errorrCP');return false;" onfocus="javascript:onfocustexto('rCP','02345','Black');return false;"/>
			</p>
			<div class="mainCompose" id="errorrCP">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>El codigo postal no es valido</h3>
				<hr/>
					<p>
					-s??lo puede contener n??meros<br>
					-la lgongitud 5 caracteres
					</p>
				<hr/>
			</div>
	</div>
		</div>
		<div id="rPaisdiv" class="CPais">
		<!--
			<p>
				<label form="rPais"> Poblacion: </label>
				<input type="text" size="25" maxlength="25" name="rPais" id="rPais" placeholder="Pais" autocomplete />
			</p>
		-->
			<p><label form="rPais">Pais: </label>
			<select id="rPais" name="rPais" class="rPais">
                      <option value="AF">Afganist??n</option> 
                      <option value="AL">Albania</option> 
                      <option value="DE">Alemania</option> 
                      <option value="AD">Andorra</option> 
                      <option value="AO">Angola</option> 
                      <option value="AI">Anguilla</option> 
                      <option value="AQ">Ant??rtida</option> 
                      <option value="AG">Antigua y Barbuda</option> 
                      <option value="AN">Antillas Holandesas</option> 
                      <option value="SA">Arabia Saud??</option> 
                      <option value="DZ">Argelia</option> 
                      <option value="AR">Argentina</option> 
                      <option value="AM">Armenia</option> 
                      <option value="AW">Aruba</option> 
                      <option value="AU">Australia</option> 
                      <option value="AT">Austria</option>  
                      <option value="AZ">Azerbaiy??n</option>  
                      <option value="BS">Bahamas</option>  
                      <option value="BH">Bahrein</option>  
                      <option value="BD">Bangladesh</option>  
                      <option value="BB">Barbados</option>  
                      <option value="BE">B??lgica</option>  
                      <option value="BZ">Belice</option>  
                      <option value="BJ">Benin</option>  
                      <option value="BM">Bermudas</option>  
                      <option value="BY">Bielorrusia</option>  
                      <option value="MM">Birmania</option>  
                      <option value="BO">Bolivia</option>  
                      <option value="BA">Bosnia y Herzegovina</option>  
                      <option value="BW">Botswana</option>  
                      <option value="BR">Brasil</option>  
                      <option value="BN">Brunei</option>  
                      <option value="BG">Bulgaria</option>  
                      <option value="BF">Burkina Faso</option>  
                      <option value="BI">Burundi</option>  
                      <option value="BT">But??n</option>  
                      <option value="CV">Cabo Verde</option>  
                      <option value="KH">Camboya</option>  
                      <option value="CM">Camer??n</option>  
                      <option value="CA">Canad??</option>  
                      <option value="TD">Chad</option>  
                      <option value="CL">Chile</option>  
                      <option value="CN">China</option>  
                      <option value="CY">Chipre</option>  
                      <option value="VA">Ciudad del Vaticano (Santa Sede)</option>  
                      <option value="CO">Colombia</option>  
                      <option value="KM">Comores</option>  
                      <option value="CG">Congo</option>  
                      <option value="CD">Congo, Rep??blica Democr??tica del</option>  
                      <option value="KR">Corea</option>  
                      <option value="KP">Corea del Norte</option>  
                      <option value="CI">Costa de Marf??l</option>  
                      <option value="CR">Costa Rica</option>  
                      <option value="HR">Croacia (Hrvatska)</option>  
                      <option value="CU">Cuba</option>  
                      <option value="DK">Dinamarca</option>  
                      <option value="DJ">Djibouti</option>  
                      <option value="DM">Dominica</option>  
                      <option value="EC">Ecuador</option>  
                      <option value="EG">Egipto</option>  
                      <option value="SV">El Salvador</option>  
                      <option value="AE">Emiratos ??rabes Unidos</option>  
                      <option value="ER">Eritrea</option>  
                      <option value="SI">Eslovenia</option>  
                      <option value="ES" selected>Espa??a</option>  
                      <option value="US">Estados Unidos</option>  
                      <option value="EE">Estonia</option>  
                      <option value="ET">Etiop??a</option>  
                      <option value="FJ">Fiji</option>  
                      <option value="PH">Filipinas</option>  
                      <option value="FI">Finlandia</option>  
                      <option value="FR">Francia</option>  
                      <option value="GA">Gab??n</option>  
                      <option value="GM">Gambia</option>  
                      <option value="GE">Georgia</option>  
                      <option value="GH">Ghana</option>  
                      <option value="GI">Gibraltar</option>  
                      <option value="GD">Granada</option>  
                      <option value="GR">Grecia</option>  
                      <option value="GL">Groenlandia</option>  
                      <option value="GP">Guadalupe</option>  
                      <option value="GU">Guam</option>  
                      <option value="GT">Guatemala</option>  
                      <option value="GY">Guayana</option>  
                      <option value="GF">Guayana Francesa</option>  
                      <option value="GN">Guinea</option>  
                      <option value="GQ">Guinea Ecuatorial</option>  
                      <option value="GW">Guinea-Bissau</option>  
                      <option value="HT">Hait??</option>  
                      <option value="HN">Honduras</option>  
                      <option value="HU">Hungr??a</option>  
                      <option value="IN">India</option>  
                      <option value="ID">Indonesia</option>  
                      <option value="IQ">Irak</option>  
                      <option value="IR">Ir??n</option>  
                      <option value="IE">Irlanda</option>  
                      <option value="BV">Isla Bouvet</option>  
                      <option value="CX">Isla de Christmas</option>  
                      <option value="IS">Islandia</option>  
                      <option value="KY">Islas Caim??n</option>  
                      <option value="CK">Islas Cook</option>  
                      <option value="CC">Islas de Cocos o Keeling</option>  
                      <option value="FO">Islas Faroe</option>  
                      <option value="HM">Islas Heard y McDonald</option>  
                      <option value="FK">Islas Malvinas</option>  
                      <option value="MP">Islas Marianas del Norte</option>  
                      <option value="MH">Islas Marshall</option>  
                      <option value="UM">Islas menores de Estados Unidos</option>  
                      <option value="PW">Islas Palau</option>  
                      <option value="SB">Islas Salom??n</option>  
                      <option value="SJ">Islas Svalbard y Jan Mayen</option>  
                      <option value="TK">Islas Tokelau</option>  
                      <option value="TC">Islas Turks y Caicos</option>  
                      <option value="VI">Islas V??rgenes (EE.UU.)</option>  
                      <option value="VG">Islas V??rgenes (Reino Unido)</option>  
                      <option value="WF">Islas Wallis y Futuna</option>  
                      <option value="IL">Israel</option>  
                      <option value="IT">Italia</option>  
                      <option value="JM">Jamaica</option>  
                      <option value="JP">Jap??n</option>  
                      <option value="JO">Jordania</option>  
                      <option value="KZ">Kazajist??n</option>  
                      <option value="KE">Kenia</option>  
                      <option value="KG">Kirguizist??n</option>  
                      <option value="KI">Kiribati</option>  
                      <option value="KW">Kuwait</option>  
                      <option value="LA">Laos</option>  
                      <option value="LS">Lesotho</option>  
                      <option value="LV">Letonia</option>  
                      <option value="LB">L??bano</option>  
                      <option value="LR">Liberia</option>  
                      <option value="LY">Libia</option>  
                      <option value="LI">Liechtenstein</option>  
                      <option value="LT">Lituania</option>  
                      <option value="LU">Luxemburgo</option>  
                      <option value="MK">Macedonia, Ex-Rep??blica Yugoslava de</option>  
                      <option value="MG">Madagascar</option>  
                      <option value="MY">Malasia</option>  
                      <option value="MW">Malawi</option>  
                      <option value="MV">Maldivas</option>  
                      <option value="ML">Mal??</option>  
                      <option value="MT">Malta</option>  
                      <option value="MA">Marruecos</option>  
                      <option value="MQ">Martinica</option>  
                      <option value="MU">Mauricio</option>  
                      <option value="MR">Mauritania</option>  
                      <option value="YT">Mayotte</option>  
                      <option value="MX">M??xico</option>  
                      <option value="FM">Micronesia</option>  
                      <option value="MD">Moldavia</option>  
                      <option value="MC">M??naco</option>  
                      <option value="MN">Mongolia</option>  
                      <option value="MS">Montserrat</option>  
                      <option value="MZ">Mozambique</option>  
                      <option value="NA">Namibia</option>  
                      <option value="NR">Nauru</option>  
                      <option value="NP">Nepal</option>  
                      <option value="NI">Nicaragua</option>  
                      <option value="NE">N??ger</option>  
                      <option value="NG">Nigeria</option>  
                      <option value="NU">Niue</option>  
                      <option value="NF">Norfolk</option>  
                      <option value="NO">Noruega</option>  
                      <option value="NC">Nueva Caledonia</option>  
                      <option value="NZ">Nueva Zelanda</option>  
                      <option value="OM">Om??n</option>  
                      <option value="NL">Pa??ses Bajos</option>  
                      <option value="PA">Panam??</option>  
                      <option value="PG">Pap??a Nueva Guinea</option>  
                      <option value="PK">Paquist??n</option>  
                      <option value="PY">Paraguay</option>  
                      <option value="PE">Per??</option>  
                      <option value="PN">Pitcairn</option>  
                      <option value="PF">Polinesia Francesa</option>  
                      <option value="PL">Polonia</option>  
                      <option value="PT">Portugal</option>  
                      <option value="PR">Puerto Rico</option>  
                      <option value="QA">Qatar</option>  
                      <option value="UK">Reino Unido</option>  
                      <option value="CF">Rep??blica Centroafricana</option>  
                      <option value="CZ">Rep??blica Checa</option>  
                      <option value="ZA">Rep??blica de Sud??frica</option>  
                      <option value="DO">Rep??blica Dominicana</option>  
                      <option value="SK">Rep??blica Eslovaca</option>  
                      <option value="RE">Reuni??n</option>  
                      <option value="RW">Ruanda</option>  
                      <option value="RO">Rumania</option>  
                      <option value="RU">Rusia</option>  
                      <option value="EH">Sahara Occidental</option>  
                      <option value="KN">Saint Kitts y Nevis</option>  
                      <option value="WS">Samoa</option>  
                      <option value="AS">Samoa Americana</option>  
                      <option value="SM">San Marino</option>  
                      <option value="VC">San Vicente y Granadinas</option>  
                      <option value="SH">Santa Helena</option>  
                      <option value="LC">Santa Luc??a</option>  
                      <option value="ST">Santo Tom?? y Pr??ncipe</option>  
                      <option value="SN">Senegal</option>  
                      <option value="SC">Seychelles</option>  
                      <option value="SL">Sierra Leona</option>  
                      <option value="SG">Singapur</option>  
                      <option value="SY">Siria</option>  
                      <option value="SO">Somalia</option>  
                      <option value="LK">Sri Lanka</option>  
                      <option value="PM">St. Pierre y Miquelon</option>  
                      <option value="SZ">Suazilandia</option>  
                      <option value="SD">Sud??n</option>  
                      <option value="SE">Suecia</option>  
                      <option value="CH">Suiza</option>  
                      <option value="SR">Surinam</option>  
                      <option value="TH">Tailandia</option>  
                      <option value="TW">Taiw??n</option>  
                      <option value="TZ">Tanzania</option>  
                      <option value="TJ">Tayikist??n</option>  
                      <option value="TF">Territorios franceses del Sur</option>  
                      <option value="TP">Timor Oriental</option>  
                      <option value="TG">Togo</option>  
                      <option value="TO">Tonga</option>  
                      <option value="TT">Trinidad y Tobago</option>  
                      <option value="TN">T??nez</option>  
                      <option value="TM">Turkmenist??n</option>  
                      <option value="TR">Turqu??a</option>  
                      <option value="TV">Tuvalu</option>  
                      <option value="UA">Ucrania</option>  
                      <option value="UG">Uganda</option>  
                      <option value="UY">Uruguay</option>  
                      <option value="UZ">Uzbekist??n</option>  
                      <option value="VU">Vanuatu</option>  
                      <option value="VE">Venezuela</option>  
                      <option value="VN">Vietnam</option>  
                      <option value="YE">Yemen</option>  
                      <option value="YU">Yugoslavia</option>  
                      <option value="ZM">Zambia</option>  
                      <option value="ZW">Zimbabue</option> 
</select>
			</p>
		</div>
		<div id="codcapcha" class="codcapcha">

			<img src="Modern-captcha.jpg" id="captchaImg" class="captchaImg" alt="imagen capcha"/>
			<br>
			Introduzca el codigo de la imagen: <input type="text" name="captchaText" id="captchaText"/>
		<div class="mainCompose" id="errorcaptchaText">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>Codigo incorrecto</h3>
				<hr/>
					<p>
					-El codigo debe coincidir con la imagen
					</p>
				<hr/>
			</div>
	</div>
	    <audio id="myaudio" src="capchasonido/capchawav/sound_4P3X4.wav" class="myaudio">
			HTML5 audio no soportado
		</audio>
			<br>
			<hr/>
			<input type="button" id="verifica" class="verificar" value="Verificar" onClick="javascript:fverifica(); return false;"/>

			<input type="button" id="recargarimage" class="recargarimage" value="Recargar imagen" onClick="javascript:generaCaptcha(); return false;"/>
			<input type="button" id="play" value="Reproducir sonido" onclick="javascript:reproducirsonido(); return false;"/>
		</div>
		<hr />
		<div id="rcondicion" class="CCondicion">
			<!--<fieldset>-->
			<input type="checkbox" name="rCondicion" id="rCondicion" value="fail" onblur="javascript:quitarError('errorrCondicion');return false;"/>He leido y acepto las 
				<div class="lnkacepto">
					<a href=""> condiciones y terminos legales</a>
				</div>
	<div class="mainCompose" id="errorrCondicion">
		<div class="calloutUp"></div>
			<div class="calloutUp2">
				<h3>Debe aceptar las condiciones del servicio</h3>
				<hr/>
					<p>
					-Para poder registrarse debe leery aceptar las condiciones del servicio
					</p>
				<hr/>
			</div>
	</div>
			<!--</fieldset>-->
		</div>
		<div id="registrarsebt" class="boton">
			<input type="reset" value="Limpiar" id="limpiar" />
			<input type="submit" value="Registrarse" id="registrarse" onclick="javascript:formularioregistro(); return false;"/>
		</div>
	</div>
	</form>
	<br>
</div>

<?php
	include_once("phps/includes/web/pie.inc.php");
?>
</body>
</html>