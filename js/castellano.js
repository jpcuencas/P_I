/* Funcion para traducir al castellano e ingles */

//var idioma="ESP";

function tradesp()
{
	idioma="ESP";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"
}
function tradespdetalle()
{
	idioma="ESP";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"
	//deltalle
	document.getElementById("titulodetalle").innerHTML = "<h2>P and I - Detalle</h2><br><h3>Resultados de busqueda: </h3>"
	document.getElementById("dimagen").innerHTML = "<p><img class='detalleimagen' src='imagenes/img/380633_444755565541534_197653873585039_1846352_750586431_n.jpg' alt='Imagen encontrada'/><br><a href='#' class='dlnkdes'>Descargar</a><br></p>"
	document.getElementById("dtTitulo").innerHTML = "<label form='dtTitulo'>Titulo: </label><label></label>"
	document.getElementById("dtAutor").innerHTML = "<label form='dtAutor'>Autor: </label><a href='pg/Usuario.html'> </a>"
	document.getElementById("dtAlbum").innerHTML = "<label form='dtAlbum'>Album: </label><a href='pg/Album.html'> </a>"
	document.getElementById("dtfecha").innerHTML = "<label form='dtDia'>Fecha: </label>"
	document.getElementById("dtPais").innerHTML = "<label form='dtPais'>Pais: </label><label></label>"
	document.getElementById("campcomentario").innerHTML = "<p><label form='dtComentario'>Comentario: </label><br><textarea rows='4' cols='50' name='dtComentario' maxlength='255' disabled></textarea></p>"
}
function tradesphome()
{
	idioma="ESP";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//home
	document.getElementById("pageHome").innerHTML = "<h2>P and I - Pictures & Images</h2><h3>Comparte y disfruta</h3><p>Te ofrecemos la oportunclassad de compartir tus mejores momentos<br>puedes crear tus propios albunes y descargarte las fotos de tus amigos<br>y compartir momentos con ellos<br><br>ya sabes una imagen dice mas que mil palabras<br>te esperamos...</p>"
	document.getElementById("labelfotos").innerHTML = "<p><label>Ultimas 5 Fotos:</label></p>"
	
	for(var i=0;i<5;i++)
	{
		document.getElementsByClassName("atributos")[i].innerHTML = "<label form='img"+i+"Titulo'>Titulo: </label><div id='img"+i+"Titulo'><label></label></div><label form='img1Autor'>Autor: </label><div id='img1Autor'><a href='pg/Usuario.html'> </a></div><label form='img1Album'>Album: </label><div id='img"+i+"Ablum'><a href='pg/Album.html'> </a></div>"
	}
}
function tradespbusqueda()
{
	idioma="ESP";	
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//busqueda
	document.getElementById("titulobusqueda").innerHTML = "<h2>P and I - Busqueda</h2><br><h3>Busqueda personalizada:</h3>"
	document.getElementById("btituloft").innerHTML = "<p><label for='bTitulo'>Titulo de foto:</label><input type='text' size='25' maxlength='25' class='bTitulo' name='bTitulo' id='bTitulo' value='Titulo de la foto' onblur=\"onblurtexto('bTitulo','Titulo de la foto','Grey');quitarError('errorbTitulo');return false;\" onfocus=\"onfocustexto('bTitulo','Titulo de la foto','Black');return false;\"/></p><div class='mainCompose' id='errorbTitulo'><div class='calloutUp'></div><div class=calloutUp2><h3>Error el titulo no puede estar vacio</h3><hr/><p>El titulo de la foto a buscar no puede estar vacio</p><hr/></div></div>"
	document.getElementById("bfecha1").innerHTML = "<label>Fecha de la foto:</label><br><label form='bFdia'>Entre:</label>"
	document.getElementById("bfecha2").innerHTML = "<label form='bFdia2'>y:</label>"
	document.getElementById("errorbFdia").innerHTML = "<div class='calloutUp2'><h3>La fecha inicial debe rellenarse</h3><hr/><p>La fecha inicial de busqueda debe rellenarse</p><hr/></div>"
	document.getElementById("errorbFdia2").innerHTML = "<div class='calloutUp2'><h3>La fecha final debe rellenarse</h3><hr/><p>La fecha final de busqueda debe rellenarse</p><hr/></div>"
	document.getElementById("CPais").innerHTML = "<p><label form='bPais'>Pais: </label><input type='text' size='25' maxlength='25' class='bPais' name='bPais' id='bPais' value='Pais' onblur=\"onblurtexto('bPais','Pais','Grey');return false;\" onfocus=\"onfocustexto('bPais','Pais','Black');return false;\"/></p>"
	document.getElementById("btlimbiarb").innerHTML = "<hr /><p><input type='reset' value='Limpiar' id='limpiar'/><input type='submit' value='Buscar' id='buscar' onclick='formulariobuscar(); return false;'/></p>"
}
function tradespregistro()
{
	idioma="ESP";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//registro
	document.getElementById("tituloregistro").innerHTML = "<h2>P and I - Registro</h2><br><h3>Registro de nuevo usuario: </h3>"
	document.getElementById("errorfotoregistro").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>Debe seleccionar una imagen</h3><hr/><p>-Debe seleccionar una imagen</p><hr/></div>"
	document.getElementById("rnombre").innerHTML = "<p><label for='rUsu'>Nombre de usuario (obligario): </label><input type='text' size='25' maxlength='25' name='rUsu' class='rUsu' id='rUsu' value='Usuario' onblur=\"onblurtexto('rUsu','Usuario','Grey');quitarError('errorrUsu');return false;\" onfocus=\"onfocustexto('rUsu','Usuario','Black');return false;\"/></p><div class='mainCompose' id='errorrUsu' ><div class='calloutUp'></div><div class='calloutUp2'><h3>El nombre de usuario no es valido</h3><hr/><p>El nombre debe rellenarse<br>-solo puede contener letras del alfabeto ingless<br>-la lgongitud minima 3 caracteres y maxima 15</p><hr/></div></div>"
	document.getElementById("rcontrasenia").innerHTML = "<p><label for='rPWD'>Contrase&ntilde;a (obligatorio): </label><input type='password' size='25' maxlength='15' name='rPWD' id='rPWD' onblur=\"onblurtexto('rPWD','','Black');quitarError('errorrPWD');return false;\" onfocus=\"onfocustexto('rPWD','','Black');return false;\"/></p><div class='mainCompose' id='errorrPWD'><div class='calloutUp'></div><div class='calloutUp2'><h3>La contrase&ntilde;a no es valida</h3><hr/><p>La contrase&ntilde;a debe rellenarse<br>-solo puede contener letras del alfabeto ingles <br>numeros y el subrayado<br>-al menos debe contener una letra en mayusculas,<br>una letra en minisculas y un numero<br>-la lgongitud minima 6 caracteres y maxima 15</p><hr/></div></div>"
	document.getElementById("rcontrasenia2").innerHTML = "<p><label for='rPWD2'>Repita contrase&ntilde;a (obligatorio): </label><input type='password' size='25' maxlength='15' name='rPWD2' id='rPWD2' onblur=\"onblurtexto('rPWD2','','Black');quitarError('errorrPWD2');return false;\" onfocus=\"onfocustexto('rPWD2','','Black');return false;\"/></p><div class='mainCompose' id='errorrPWD2'><div class='calloutUp'></div><div class='calloutUp2'><h3>Las contrase&ntilde;as no coindicen</h3><hr/><p>Se debe escribir la misma contrase&ntilde;a en ambos lados</p><hr/></div></div>"
	document.getElementById("rdireccion").innerHTML = "<p><label for='rEmail'>Direccion de correo (obligatorio): </label><input type='text' size='30' maxlength='50' class='rEmail' name='rEmail' id='rEmail' value='ejemplo@email.com' onblur=\"onblurtexto('rEmail','ejemplo@email.com','Grey');quitarError('errorrEmail');return false;\" onfocus=\"onfocustexto('rEmail','ejemplo@email.com','Black');return false;\"/></p><div class='mainCompose' id='errorrEmail'><div class='calloutUp'></div><div class='calloutUp2'><h3>La direccion de correo debe ser correcta</h3><hr/><p>-La direccion de correo debe rellenarse<br>-La direccion de correo no es correcta</p><hr/></div></div>"
	document.getElementById("rgenero").innerHTML = "<p><label form='rGenero'>Genero:</label><input type='radio' name='rGenero' id='rGeneroH' value='H'/>Hombre<input type='radio' name='rGenero' id='rGeneroM' value='M' checked />Mujer</p>"
	document.getElementById("rfecha").innerHTML = "<p><label form='rFdia'>Fecha Nacimiento:</label></p>"
	document.getElementById("errorrFdia").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>La fecha es incorrecta</h3><hr/><p>La fecha de nacimiento debe ser correcta</p><hr/></div>"
	document.getElementById("CPoblacion").innerHTML = "<p><label for='rPop'>Poblacion: </label><input type='text' size='25' maxlength='25' class='rPop' name='rPop' id='rPop' value='Poblacion' onblur=\"onblurtexto('rPop','Poblacion','Grey');return false;\" onfocus=\"onfocustexto('rPop','Poblacion','Black');return false;\"/></p>"
	document.getElementById("CCP").innerHTML = "<p><label for='rCP'>Codigo Postal(solo numeros): </label><input type='text' size='5' maxlength='5' class='rCP' name='rCP' id='rCP' value='02345' onblur=\"onblurtexto('rCP','02345','Grey');quitarError('errorrCP');return false;\" onfocus=\"onfocustexto('rCP','02345','Black');return false;\"/></p><div class='mainCompose' id='errorrCP'><div class='calloutUp'></div>	<div class='calloutUp2'><h3>El codigo postal no es valido</h3><hr/><p>-solo puede contener numeros<br>-la lgongitud 5 caracteres</p><hr/></div></div>"
	document.getElementById("rPaisdiv").innerHTML = "<p><label form='bPais'>Pais: </label><input type='text' size='25' maxlength='25' class='bPais' name='bPais' id='bPais' value='Pais' onblur=\"onblurtexto('bPais','Pais','Grey');return false;\" onfocus=\"onfocustexto('bPais','Pais','Black');return false;\"/></p>"
	//document.getElementById("errorcaptchaText").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>Codigo incorrecto</h3><hr/><p>-El codigo debe coincidir con la imagen</p><hr/></div>"
	document.getElementById("errorcaptchaText").innerHTML = "<img src='Modern-captcha.jpg' id='captchaImg' class='captchaImg' alt='imagen capcha'/><br>	Introduzca el codigo de la imagen: <input type='text' name='captchaText' id='captchaText'/><div class='mainCompose' id='errorcaptchaText'><div class='calloutUp'></div><div class='calloutUp2'><h3>Codigo incorrecto</h3><hr/><p>-El codigo debe coincidir con la imagen</p><hr/></div></div><audio id='myaudio' class='myaudio'>HTML5 audio no soportado</audio><br><hr/><input type='button' id='verifica' class='verificar' value='Verificar' onClick='fverifica(); return false;'/><input type='button' id='recargarimage' class='recargarimage' value='Recargar imagen' onClick='generaCaptcha(); return false;'/><input type='button' value='Reproducir sonido' onclick='playAudio(document.getElementById('audiofile').value); return false;'/>"
	document.getElementById("rcondicion").innerHTML = "<input type='checkbox' name='rCondicion' id='rCondicion' value='fail' onblur=\"quitarError('errorrCondicion');return false;\"/>He leido y acepto las<div class='lnkacepto'><a href=''> condiciones y terminos legales</a></div><div class='mainCompose' id='errorrCondicion'><div class='calloutUp'></div><div class='calloutUp2'><h3>Debe aceptar las condiciones del servicio</h3><hr/><p>-Para poder registrarse debe leery aceptar las condiciones del servicio</p><hr/></div></div>"
	document.getElementById("registrarsebt").innerHTML = "<input type='reset' value='Limpiar' id='limpiar'/><input type='submit' value='Registrarse' id='registrarse' onclick=\"formularioregistro(); return false;\"/>"
}

function tradespresultados()
{
	idioma="ESP";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>has entrado como: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>salir</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>Usuario: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='Usuario' onblur=\"onblurtexto('pUsu','Usuario','Grey');return false;\" onfocus=\"onfocustexto('pUsu','Usuario','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Contrase&ntilde;a: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Entra' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Olvido la contrase&ntilde;a </a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Inicio</a></li><li><a href='Registro.html'>Registro</a></li><li><a href='Busqueda.html'>Busqueda</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Buscar...' onblur=\"onblurtexto('pBuscar','Buscar...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Buscar...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Idiomas: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Escoja un Estilo para la Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> Alto Contraste</a>&nbsp;&Oacute;&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Texto Grande</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contacto: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//resultados
	document.getElementById("tituloresultados").innerHTML = "<h2>P and I - Resultados</h2><br><h3>Resultados de busqueda</h3>"
	document.getElementById("rtTitulo").innerHTML = "<label form='rtTitulo'>Titulo: </label><label></label></div>"
	document.getElementById("rtfecha").innerHTML = "<label form='rtDia'>Fecha: </label>"
	document.getElementById("rtAutor").innerHTML = "<label form='rtAutor'>Autor: </label><label></label>"
	document.getElementById("rtPais").innerHTML = "<label form='rtPais'>Pais: </label><label></label>"
	document.getElementById("lnkoutD").innerHTML = "<p><a href='Detalles.html'>Detalles</a></p>"

	////FALTAN LAS PAGINAS EXTRA////

}


//////////INGLESSS//////////////

function traden()
{
	idioma="EN";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"
}
function tradendetalle()
{
	idioma="EN";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick=\"salida_modificacss(); return false;\">exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//deltalle
	document.getElementById("titulodetalle").innerHTML = "<h2>P and I - Detail</h2><br><h3>Search Results: </h3>"
	document.getElementById("dimagen").innerHTML = "<p><img class='detalleimagen' src='imagenes/img/380633_444755565541534_197653873585039_1846352_750586431_n.jpg' alt='Imagen encontrada'/><br><a href='#' class='dlnkdes'>Download</a><br></p>"
	document.getElementById("dtTitulo").innerHTML = "<label form='dtTitulo'>Title: </label><label></label>"
	document.getElementById("dtAutor").innerHTML = "<label form='dtAutor'>Author: </label><a href='pg/Usuario.html'> </a>"
	document.getElementById("dtAlbum").innerHTML = "<label form='dtAlbum'>Album: </label><a href='pg/Album.html'> </a>"
	document.getElementById("dtfecha").innerHTML = "<label form='dtDia'>Date: </label>"
	document.getElementById("dtPais").innerHTML = "<label form='dtPais'>Country: </label><label></label>"
	document.getElementById("campcomentario").innerHTML = "<p><label form='dtComentario'>Comment: </label><br><textarea rows='4' cols='50' name='dtComentario' maxlength='255' disabled></textarea></p>"
}
function tradenhome()
{	
	idioma="EN";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick=\"salida_modificacss(); return false;\">exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//home
	document.getElementById("pageHome").innerHTML = "<h2>P and I - Pictures & Images</h2><h3>Share and Enjoy </h3> Here is the oportunclassad to share your favorite moments <br> can create your own albums and download photos from your friends <br> and spend time with them you know <br> <br> a picture says a thousand words <br> hope you ...</p>"
	document.getElementById("labelfotos").innerHTML = "<p><label>Last 5 Photos:</label></p>"
	
	for(var i=0;i<5;i++)
	{
		document.getElementsByClassName("atributos")[i].innerHTML = "<label form='img"+i+"Titulo'>Title: </label><div id='img"+i+"Titulo'><label></label></div><label form='img1Autor'>Author: </label><div id='img1Autor'><a href='pg/Usuario.html'> </a></div><label form='img1Album'>Album: </label><div id='img"+i+"Ablum'><a href='pg/Album.html'> </a></div>"
	}
}
function tradenbusqueda()
{
	idioma="EN";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick=\"salida_modificacss(); return false;\">exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//busqueda
	document.getElementById("titulobusqueda").innerHTML = "<h2>P and I - Search</h2><br><h3>Search personalizada:</h3>"
	document.getElementById("btituloft").innerHTML = "<p><label for='bTitulo'>Title of photo:</label><input type='text' size='25' maxlength='25' class='bTitulo' name='bTitulo' id='bTitulo' value='Title of photo' onblur=\"onblurtexto('bTitulo','Title of photo','Grey');quitarError('errorbTitulo');return false;\" onfocus=\"onfocustexto('bTitulo','Title of photo','Black');return false;\"/></p><div class='mainCompose' id='errorbTitulo'><div class='calloutUp'></div><div class=calloutUp2><h3>Error Title can not be empty </h3> <hr/> <p> photo title to search can not be empty</p><hr/></div></div>"
	document.getElementById("bfecha1").innerHTML = "<label>Date photo:</label><br><label form='bFdia'>Between:</label>"
	document.getElementById("bfecha2").innerHTML = "<label form='bFdia2'>and:</label>"
	document.getElementById("errorbFdia").innerHTML = "<div class='calloutUp2'><h3>The date must be filled </h3> <hr/> <p> search The date must be filled</p><hr/></div>"
	document.getElementById("errorbFdia2").innerHTML = "<div class='calloutUp2'><h3>The end date must be filled </h3> <hr/> <p> search end date must be filled</p><hr/></div>"
	document.getElementById("CPais").innerHTML = "<p><label form='bPais'>Country: </label><input type='text' size='25' maxlength='25' class='bPais' name='bPais' id='bPais' value='Country' onblur=\"onblurtexto('bPais','Country','Grey');return false;\" onfocus=\"onfocustexto('bPais','Country','Black');return false;\"/></p>"
	document.getElementById("btlimbiarb").innerHTML = "<hr /><p><input type='reset' value='Clean' id='limpiar'/><input type='submit' value='Search' id='buscar' onclick='formulariobuscar(); return false;'/></p>"
}
function tradenregistro()
{
	idioma="EN";
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//registro
	document.getElementById("tituloregistro").innerHTML = "<h2>P and I - Registration</h2><br><h3>User registration: </h3>"
	document.getElementById("errorfotoregistro").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>You must select an image </h3> <hr/> <p>-You must select an image</p><hr/></div>"
	document.getElementById("rnombre").innerHTML = "<p><label for='rUsu'>Username (Required): </label><input type='text' size='25' maxlength='25' name='rUsu' class='rUsu' id='rUsu' value='User' onblur=\"onblurtexto('rUsu','User','Grey');quitarError('errorrUsu');return false;\" onfocus=\"onfocustexto('rUsu','User','Black');return false;\"/></p><div class='mainCompose' id='errorrUsu' ><div class='calloutUp'></div><div class='calloutUp2'><h3>The user name is invalid </h3> <p> <hr/> enter <br>-filled can contain only English letters-the lgongitud <br> minimum 3 and maximum 15 characters</p><hr/></div></div>"
	document.getElementById("rcontrasenia").innerHTML = "<p><label for='rPWD'>Password (Required): </label><input type='password' size='25' maxlength='15' name='rPWD' id='rPWD' onblur=\"onblurtexto('rPWD','','Black');quitarError('errorrPWD');return false;\" onfocus=\"onfocustexto('rPWD','','Black');return false;\"/></p><div class='mainCompose' id='errorrPWD'><div class='calloutUp'></div><div class='calloutUp2'><h3>The password is not valid </h3> <hr/> <p> <br>-filled password must contain only English letters and numbers <br> <br>-emphasis must contain at least one uppercase letter , <br> a lower case letter and one number-the lgongitud <br> minimum 6 characters and maximum 15 </p><hr/></div></div>"
	document.getElementById("rcontrasenia2").innerHTML = "<p><label for='rPWD2'>Repeat password (required): </label><input type='password' size='25' maxlength='15' name='rPWD2' id='rPWD2' onblur=\"onblurtexto('rPWD2','','Black');quitarError('errorrPWD2');return false;\" onfocus=\"onfocustexto('rPWD2','','Black');return false;\"/></p><div class='mainCompose' id='errorrPWD2'><div class='calloutUp'></div><div class='calloutUp2'><h3>Passwords do not match </h3> <hr/> <p> must type the same password on both sides</p><hr/></div></div>"
	document.getElementById("rdireccion").innerHTML = "<p><label for='rEmail'>E-mail (required): </label><input type='text' size='30' maxlength='50' class='rEmail' name='rEmail' id='rEmail' value='example@email.com' onblur=\"onblurtexto('rEmail','example@email.com','Grey');quitarError('errorrEmail');return false;\" onfocus=\"onfocustexto('rEmail','example@email.com','Black');return false;\"/></p><div class='mainCompose' id='errorrEmail'><div class='calloutUp'></div><div class='calloutUp2'><h3> The email address must be correct </h3> <hr/> <p>-The email address must be filled <br>-The email address is incorrect</p><hr/></div></div>"
	document.getElementById("rgenero").innerHTML = "<p><label form='rGenero'>Genero:</label><input type='radio' name='rGenero' id='rGeneroH' value='H'/>Man<input type='radio' name='rGenero' id='rGeneroM' value='M' checked />Woman</p>"
	document.getElementById("rfecha").innerHTML = "<p><label form='rFdia'>Birth Date:</label></p>"
	document.getElementById("errorrFdia").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>The date is incorrect </h3> <hr/> <p> birth date must be correct</p><hr/></div>"
	document.getElementById("CPoblacion").innerHTML = "<p><label for='rPop'>City: </label><input type='text' size='25' maxlength='25' class='rPop' name='rPop' id='rPop' value='City' onblur=\"onblurtexto('rPop','City','Grey');return false;\" onfocus=\"onfocustexto('rPop','City','Black');return false;\"/></p>"
	document.getElementById("CCP").innerHTML = "<p><label for='rCP'>Zip Code (only numbers): </label><input type='text' size='5' maxlength='5' class='rCP' name='rCP' id='rCP' value='02345' onblur=\"onblurtexto('rCP','02345','Grey');quitarError('errorrCP');return false;\" onfocus=\"onfocustexto('rCP','02345','Black');return false;\"/></p><div class='mainCompose' id='errorrCP'><div class='calloutUp'></div>	<div class='calloutUp2'><h3>The postal code is invalid </h3> <hr/> <p>-only contain numbers <br>-the lgongitud 5 characters</p><hr/></div></div>"
	document.getElementById("rPaisdiv").innerHTML = "<p><label form='bPais'>Country: </label><input type='text' size='25' maxlength='25' class='bPais' name='bPais' id='bPais' value='Country' onblur=\"onblurtexto('bPais','Country','Grey');return false;\" onfocus=\"onfocustexto('bPais','Country','Black');return false;\"/></p>"
	//document.getElementById("errorcaptchaText").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>Incorrect code </h3> <hr/> <p>-The code must match the picture</p><hr/></div>"
	document.getElementById("errorcaptchaText").innerHTML = "<img src='Modern-captcha.jpg' id='captchaImg' class='captchaImg' alt='imagen capcha'/><br>	Enter the Captcha: <input type='text' name='captchaText' id='captchaText'/><div class='mainCompose' id='errorcaptchaText'><div class='calloutUp'></div><div class='calloutUp2'><h3>Incorrect code </h3> <hr/> <p>-The code must match the picture</p><hr/></div></div><audio id='myaudio' class='myaudio'>HTML5 audio not supported</audio><br><hr/><input type='button' id='verifica' class='verificar' value='Verify code' onClick='fverifica(); return false;'/><input type='button' id='recargarimage' class='recargarimage' value='Reload image' onClick='generaCaptcha(); return false;'/><input type='button' value='Play sound' onclick='playAudio(document.getElementById('audiofile').value); return false;'/>"
	document.getElementById("rcondicion").innerHTML = "<input type='checkbox' name='rCondicion' id='rCondicion' value='fail' onblur=\"quitarError('errorrCondicion');return false;\"/>I accept the<div class='lnkacepto'><a href=''> legal terms and conditions</a></div><div class='mainCompose' id='errorrCondicion'><div class='calloutUp'></div><div class='calloutUp2'><h3>You must accept the terms of service </h3> <hr/> <p>-leery To register you must accept the terms of service</p><hr/></div></div>"
	document.getElementById("registrarsebt").innerHTML = "<input type='reset' value='Clean' id='limpiar'/><input type='submit' value='Register' id='registrarse' onclick=\"formularioregistro(); return false;\"/>"
}
function tradenresultados()
{
	idioma="EN";	
	//plantilla
	document.getElementById("userloged").innerHTML = "<label>You are logged in as: </label><div class='logedUser' id='logedUsr'><a href='pg/Usuario.html' id='userloged'> </a></div>";
	document.getElementById("exitloged").innerHTML = "<a href='#' onclick='salida_modificacss(); return false;'>exit</a>"
	document.getElementById("pidentif").innerHTML = "<label for='pUsu'>User: </label><input type='text' size='23' maxlength='25' name='pUsu' id='pUsu' value='User' onblur=\"onblurtexto('pUsu','User','Grey');return false;\" onfocus=\"onfocustexto('pUsu','User','Black');return false;\"/>"
	document.getElementById("campoPWD").innerHTML = "<label for='pPWD'>Password: </label><input type='password' size='23' maxlength='15' name='pPWD' id='pPWD' />"
	document.getElementById("botonlog").innerHTML = "<input type='submit' value='Login' onclick='formulariologear(); return false;'/>"
	document.getElementById("linklog").innerHTML = "<a href=''>Forgot password</a>"
	document.getElementById("fmenu").innerHTML = "<ul><li class='current_page_item'><a href='Home.html'>Home</a></li><li><a href='Registro.html'>Registration</a></li><li><a href='Busqueda.html'>Search</a></li><li class='last'><input type='text' id='pBuscar' class='buscarmenu' name='buscar' value='Search...' onblur=\"onblurtexto('pBuscar','Search...','White');return false;\" onfocus=\"onfocustexto('pBuscar','Search...','White');return false;\"/></li></ul>"
	document.getElementById("idioma").innerHTML = "<label> Languages: </label><input id='idesp' class='icon' type='image' src='icon/bandera-Espana.gif' alt='bandera espa&ntilde;ola'  onClick='tradesp();'/><input id='iden' class='icon' type='image' src='icon/bandera-inglesa.gif' alt='bandera Inglesa'  onClick='traden();'/>"
	document.getElementById("estilos").innerHTML = "<div id='estilos' class='estilos'><br>Choose a style for the Web: <a href='#' onclick=\"setActiveStyleSheet('normal'); return false;\"> Normal</a>, <a href='#' onclick=\"setActiveStyleSheet('altoContrase'); return false;\"> high Contrast</a>&nbsp;or&nbsp;<a href='#' onclick=\"setActiveStyleSheet('textoGrande'); return false;\">Large Text</a></div>"
	document.getElementById("contactodir").innerHTML = "<label>Contact whit author: </label><a href='pg/Contacto.html'> jpcs1@alu.ua.es</a>"

	//resultados
	document.getElementById("tituloresultados").innerHTML = "<h2>P and I - Details</h2><br><h3>Search results</h3>"
	document.getElementById("rtTitulo").innerHTML = "<label form='rtTitulo'>Title: </label><label></label></div>"
	document.getElementById("rtfecha").innerHTML = "<label form='rtDia'>Date: </label>"
	document.getElementById("rtAutor").innerHTML = "<label form='rtAutor'>Author: </label><label></label>"
	document.getElementById("rtPais").innerHTML = "<label form='rtPais'>Country: </label><label></label>"
	document.getElementById("lnkoutD").innerHTML = "<p><a href='Detalles.html'>Details</a></p>"
}

////FALTAN LAS PAGINAS EXTRA////



