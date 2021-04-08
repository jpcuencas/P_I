<div class="cabecera">
<div class="logo">
	<img src="../logo.jpg" alt="Logo de la empresa"/>
</div>
<div class="loged" id="loged">
	<fieldset class="flogin">
		<div class="imglogediv">
			<img class="imgloged" id="imgusuario" src="../imagenes/usr.jpg" alt="Usuario"/>
		</div>
		<div id="userloged" class="userloged">
			<label>has entrado como: </label><div class="logedUser" id="logedUsr"><a id="logedas" href="Usuario.html?i=<?php echo(isset($_SESSION["uius"])?$_SESSION["uius"]:""); ?>"><?php echo(isset($_SESSION["NOMUsu"])?$_SESSION["NOMUsu"]:""); ?></a></div>
			<?php echo(isset($_SESSION["Msg"])?$_SESSION["Msg"]:""); ?>
		</div>
		<div id="exitloged" class="exitloged">
			<a href="../phps/includes/login/salir2.php" onclick="javascript:salida_modificacss(); return false;">salir</a>
		</div>
	</fieldset>
</div>

<!-- action=" "-->
<form class="login" action="phps/loginpg2.php" method="POST" name="f1">
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
	<div id="recuerdam" class="recuer">
		<input type="checkbox" id="recuerdame" class="recuerdame" name="recuerdame" value="Recordar"/>Recordar sus datos en este equipo
	</div>
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
			<li class="current_page_item"><a href="../Home.php">Inicio</a></li>
			<li><a href="../Registro.php">Registro</a></li>
			<li><a href="../Busqueda.php">Busqueda</a></li>
			<li class="last">
				<!--<input type="search" name="buscar" id="buscar" placeholder="Buscar..."/>-->
				<input type="text" id="pBuscar" class="buscarmenu" name="buscar" value="Buscar..." onblur="javascript:onblurtexto('pBuscar','Buscar...','White');return false;" onfocus="javascript:onfocustexto('pBuscar','Buscar...','White');return false;"/></li>
		</ul>
		
	</fieldset>

</div>
	<div class="menuminiup display-mini">
	<label>Menu: </label><br>
		<select class="menuup display-mini" onchange="javascript:changepage();return false;">
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
	<input id="idesp" class="icon display-great display-medium" type="image" src="../imagenes/icon/bandera-Espana.gif" alt="bandera española"  onClick="javascript:tradesp();return false;"/>
	<input id="iden" class="icon display-great display-medium" type="image" src="../imagenes/icon/bandera-inglesa.gif" alt="bandera Inglesa"  onClick="javascript:traden();return false;"/>
</div>
<select class="display-mini" onchange="javascript:changeidioma();return false;">
	<option>Espa&ntilde;ol</option>
	<option>Ingles</option>
</select>
</div>
</div>