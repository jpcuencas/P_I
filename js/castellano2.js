/* Funcion para traducir al castellano e ingles paginas auxiliares */

//var idioma="ESP";
/*
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
*/
//album
function tradespalbum()
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
	//album
	document.getElementById("albumtitulo").innerHTML = "<h2>P and I - Album</h2><br><h3>Informacion del album</h3>"
	document.getElementById("ablalbum").innerHTML = "<label form='ablalbum'>Album: </label><label></label>"
	document.getElementById("ablusr").innerHTML = "<label form='ablusr'>Usuario: </label><a href='pg/Usuario.html' id='Aablusr'> </a>"
	document.getElementById("subft").innerHTML = "<label>Subir foto:</label>"
	document.getElementById("errorfotoalbum").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>Debe seleccionar una imagen</h3><hr/><p>-Debe seleccionar una imagen</p><hr/></div>"
	document.getElementById("botonalbum").innerHTML = "<p> <input type='submit' value='Subir foto' id='subir' onclick='formularioAlbumft();return false;'/>  <input type='reset' value='Quitar foto' id='quitar'/> </p>"
}
//Aviso
function tradespaviso()
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
	//AVISO
	document.getElementById("avisotitulo").innerHTML = "<h2>P and I - Aviso</h2><h3>AVISO</h3>"
	document.getElementById("aviso").innerHTML = "<p>mensaje de aviso</p>"
	document.getElementById("lnkcontac").innerHTML = "<p><a href='Contacto.html'>Contacto admin. </a></p>"
	document.getElementById("lnkinicio").innerHTML = "<p><a href='../Home.html'>Inicio  </a></p>"
}
//foto
function tradespfoto()
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
	//foto
	
	document.getElementById("fototitulo").innerHTML = "<h2>P and I - Foto</h2><br><h3>Subir foto</h3>"
	document.getElementById("errorffoto").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>Debe seleccionar una imagen</h3><hr/><p>-Debe seleccionar una imagen</p><hr/></div>"
	document.getElementById("subirft").innerHTML = "<p><input type='submit' value='Selecionar' id='selecionar' onclick='formulariofotoft();return false;'/><input type='reset' value='Quitar' /></p>"
	document.getElementById("camptitulo").innerHTML = "<p><label form='ctitulo'>Titulo: </label><input type='text' class='ftitulo' size='25' maxlength='25' id='ftitulo' value='Titulo de la foto' onblur=\"onblurtexto('ftitulo','Titulo de la foto','Grey');return false;\" onfocus=\"onfocustexto('ftitulo','Titulo de la foto','Black');return false;\"/><br></p><div class='mainCompose' id='errorftitulo'><div class='calloutUp'></div><div class='calloutUp2'><h3>El titulo debe rellenarse</h3><hr/><p>-El titulo no debe quedar vacio</p><hr/></div></div>"
	document.getElementById("campautor").innerHTML = "<label form='ftAutor'>Autor: </label><div id='ftAutor'><a href='pg/Usuario.html'></a></div>"
	document.getElementById("campalbum").innerHTML = "<p><label form='falbum'>Album: </label><select id='falbum'><option value='0'>Selecione album</option></select></p><div class='lnkcreAlbn'><p><a href='Crearalbum.html'>Crear album</a></p></div>"
	document.getElementById("camppais").innerHTML = "<p><label form='cpais'>Pais:</label><input type='text' size='25' maxlength='25' id='cpais' class='cpais' value='Pais' onblur=\"onblurtexto('cpais','Pais');return false;\" onfocus=\"onfocustexto('cPais','Pais');return false;\"/></p>"
	document.getElementById("campfecha").innerHTML = "<div class='fecha'><label form='ftDia'>Fecha de subida: </label></div><div class='dtsDia' id='ftDia'><label></label></div><label form='ftMes'> / </label><div class='dtsMes' id='ftMes'><label></label></div><label form='ftAnio'> / </label><div class='dtsAnio' id='ftAnio'><label></label></div>"

	document.getElementById("campdescarga").innerHTML = "<p><input type='checkbox' value='Desc' id='descargar' />Se puede descargar</p>"
	document.getElementById("campcomentarioft").innerHTML = "<p><label form='Ccomentario'>Comentario: </label><br><textarea rows='4' cols='50' name='Ccomentario' id='Ccomentario' maxlength='255'></textarea></p>"
	document.getElementById("ftboton").innerHTML = "<hr /><p><input type='submit' value='Guardar' id='guardar' onclick='formularioFoto(); return false;'/></p>"
	
}
//crear album
function tradespcralbum()
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
	//crear album
	document.getElementById("crearalbumtitulo").innerHTML = "<h2>P and I - Crear Album</h2><br><h3>Crear Album</h3>"
	document.getElementById("camptitulocra").innerHTML = "<p><label form='crtitulo'>Titulo: </label><input type='text' size='25' maxlength='25' class='crtitulo' id='crtitulo' value='Titulo del album' onblur=\"onblurtexto('ftitulo','Titulo del album','Grey');quitarError('errorcrtitulo');return false;\" onfocus=\"onfocustexto('ftitulo','Titulo del album','Black');return false;\"/></p><div class='mainCompose' id='errorcrtitulo'><div class='calloutUp'></div><div class='calloutUp2'><h3>El nombre de la foto no es valido</h3><hr/><p>El nombre debe rellenarse</p><hr/></div></div>"
	document.getElementById("campusrcra").innerHTML = "<label form='CrAbUsr'>Usuario: </label><div id='CrAbUsr'><label></label></div>"
	document.getElementById("campacess").innerHTML = "<p><label form='crAcesso'>Acesso: </label><input type='radio' name='pAcesso' id='puAcesso' value='pub' />Publico<input type='radio' name='pAcesso' id='prAcesso' value='pri' checked />Privado<!--<div class='mainCompose' id='errorcrAcesso'><div class='calloutUp'></div><div class='calloutUp2'><h3>El modo de acesso no es valido</h3><hr/><p>El nombre debe comprobarse</p><hr/></div></div>-->"
	document.getElementById("botoncrear").innerHTML = "<input type='submit' value='Crear' id='crear' onclick=\"formularioCrearAlbum(); return false;\"/>"
}

//crear album
function tradespcontacto()
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
	//contacto
	document.getElementById("contactotitulo").innerHTML = "<h2>P and I - Contacto</h2><br><h3>Contacto</h3>"
	document.getElementById("contactname").innerHTML = "<label>Nombre : <input type='text' name='name' class='name' id='name' size='30' value='Su nombre' onblur=\"onblurtexto('name','Su nombre','Grey');return false;\" onfocus=\"onfocustexto('name','Su nombre','Black');return false;\"></label>"
	document.getElementById("errorrEmail2").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>La direccion de correo debe ser correcta</h3><hr/><p>-La direccion de correo debe rellenarse<br>-La direccion de correo no es correcta</p><hr/></div>"
	document.getElementById("labelcoment").innerHTML = "<label>Escriba su pregunta...(min. 30, max. 3000 caracteres)<br><textarea title='Escriba su pregunta...(min. 30, max. 3000 caracteres)' onchange='contarletras();return false;' id='comment' name='comment' cols='30' rows='10'></textarea></label>"
	document.getElementById("submitcoment").innerHTML = "<input type='submit' name='submit_ask' title='Envie su pregunta' value='Envie su pregunta' onclick=\"formularioContacto();return false;\"><div class='width50 floatright right paddingtop'>Caracteres escritos:<input type='text' value='0' size='4' class='counter' id='counter' name='counter' maxlength='4' readonly='readonly'></div>"
	
}
function tradespusuario()
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
	//usuario

	document.getElementById("usuariotitulo").innerHTML = "<h2>P and I - Usuario</h2><br><h3>Detalles de usuario</h3>"
	document.getElementById("usrNombre").innerHTML = "<label form='usrNombre'>Nombre: </label><label></label>"
	document.getElementById("usrEmail").innerHTML = "<label form='usrEmail'>Email: </label><label></label>"
	document.getElementById("usrGenero").innerHTML = "<label form='usrGenero'>Sexo: </label><label></label>"
	document.getElementById("usrfecha").innerHTML = "<label form='usrDia'>Fecha nacimiento: </label>"
	document.getElementById("usrPoblacion").innerHTML = "<label form='usrPoblacion'>Poblacion: </label><label></label>"
	document.getElementById("usrPais").innerHTML = "<label form='usrPais'>Pais: </label><label></label>"
	document.getElementById("usrfecha1").innerHTML = "<label form='usrDia1'>Fecha de alta: </label>"
	document.getElementById("lnkbaja").innerHTML = "<a href=''>Darse de baja  </a>"
	document.getElementById("contactodir").innerHTML = "<a href='Contacto.html'>Contactar </a>"
	document.getElementById("contactodir").innerHTML = "<br><br><label>Albunes: </label><br><!--input type='text' name='calbum1' disabled>--><!--<div id='calbum1'><label></label></div><a href=''><img src='' id='calbum1' alt='Albumes'></a>-->"

}
	
//////////INGLESSS//////////////
/*
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
*/
//album
function tradenalbum()
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
	//album
	document.getElementById("albumtitulo").innerHTML = "<h2>P and I - Album</h2><br><h3>Album Info</h3>"
	document.getElementById("ablalbum").innerHTML = "<label form='ablalbum'>Album: </label><label></label>"
	document.getElementById("ablusr").innerHTML = "<label form='ablusr'>User: </label><a href='pg/Usuario.html' id='Aablusr'> </a>"
	document.getElementById("subft").innerHTML = "<label>Upload photo:</label>"
	document.getElementById("errorfotoalbum").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3> must select an image </h3> <hr/> <p>-You must select an image</p><hr/></div>"
	document.getElementById("botonalbum").innerHTML = "<p> <input type='submit' value='Upload photo' id='subir' onclick='formularioAlbumft();return false;'/>  <input type='reset' value='Clean Picture' id='quitar'/> </p>"
}
//Aviso
function tradenaviso()
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
	//AVISO
	document.getElementById("avisotitulo").innerHTML = "<h2>P and I - Advice</h2><h3>ADVICE</h3>"
	document.getElementById("aviso").innerHTML = "<p>warning</p>"
	document.getElementById("lnkcontac").innerHTML = "<p><a href='Contacto.html'>Contact to admin. </a></p>"
	document.getElementById("lnkinicio").innerHTML = "<p><a href='../Home.html'>Home  </a></p>"
}
//foto
function tradenfoto()
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
	//foto
	
	document.getElementById("fototitulo").innerHTML = "<h2>P and I - Photo</h2><br><h3>Upload photo</h3>"
	document.getElementById("errorffoto").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>You must select an image </h3> <hr/> <p>-You must select an image</p><hr/></div>"
	document.getElementById("subirft").innerHTML = "<p><input type='submit' value='Select' id='selecionar' onclick='formulariofotoft();return false;'/><input type='reset' value='Clean' /></p>"
	document.getElementById("camptitulo").innerHTML = "<p><label form='ctitulo'>Title: </label><input type='text' class='ftitulo' size='25' maxlength='25' id='ftitulo' value='Title of photo' onblur=\"onblurtexto('ftitulo','Title of photo','Grey');return false;\" onfocus=\"onfocustexto('ftitulo','Title of photo','Black');return false;\"/><br></p><div class='mainCompose' id='errorftitulo'><div class='calloutUp'></div><div class='calloutUp2'>The title should be filled <h3> </h3> <hr/> <p>-The title should not be empty</p><hr/></div></div>"
	document.getElementById("campautor").innerHTML = "<label form='ftAutor'>Author: </label><div id='ftAutor'><a href='pg/Usuario.html'></a></div>"
	document.getElementById("campalbum").innerHTML = "<p><label form='falbum'>Album: </label><select id='falbum'><option value='0'>Select album</option></select></p><div class='lnkcreAlbn'><p><a href='Crearalbum.html'>Create album</a></p></div>"
	document.getElementById("camppais").innerHTML = "<p><label form='cpais'>Country:</label><input type='text' size='25' maxlength='25' id='cpais' class='cpais' value='Country' onblur=\"onblurtexto('cpais','Country');return false;\" onfocus=\"onfocustexto('cPais','Country');return false;\"/></p>"
	document.getElementById("campfecha").innerHTML = "<div class='fecha'><label form='ftDia'>Upload date: </label></div><div class='dtsDia' id='ftDia'><label></label></div><label form='ftMes'> / </label><div class='dtsMes' id='ftMes'><label></label></div><label form='ftAnio'> / </label><div class='dtsAnio' id='ftAnio'><label></label></div>"

	document.getElementById("campdescarga").innerHTML = "<p><input type='checkbox' value='Desc' id='descargar' />It can be downloaded</p>"
	document.getElementById("campcomentarioft").innerHTML = "<p><label form='Ccomentario'>Comment: </label><br><textarea rows='4' cols='50' name='Ccomentario' id='Ccomentario' maxlength='255'></textarea></p>"
	document.getElementById("ftboton").innerHTML = "<hr /><p><input type='submit' value='Save' id='guardar' onclick='formularioFoto(); return false;'/></p>"
	
}
//crear album
function tradencralbum()
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
	//crear album
	document.getElementById("crearalbumtitulo").innerHTML = "<h2>P and I - Create Album</h2><br><h3>Create Album</h3>"
	document.getElementById("camptitulocra").innerHTML = "<p><label form='crtitulo'>Title: </label><input type='text' size='25' maxlength='25' class='crtitulo' id='crtitulo' value='Album Title' onblur=\"onblurtexto('ftitulo','Album Title','Grey');quitarError('errorcrtitulo');return false;\" onfocus=\"onfocustexto('ftitulo','Album Title','Black');return false;\"/></p><div class='mainCompose' id='errorcrtitulo'><div class='calloutUp'></div><div class='calloutUp2'><h3>The name of the photo is not valid </h3> <hr/> <p> The name must be filled</p><hr/></div></div>"
	document.getElementById("campusrcra").innerHTML = "<label form='CrAbUsr'>User: </label><div id='CrAbUsr'><label></label></div>"
	document.getElementById("campacess").innerHTML = "<p><label form='crAcesso'>Access: </label><input type='radio' name='pAcesso' id='puAcesso' value='pub' />Public<input type='radio' name='pAcesso' id='prAcesso' value='pri' checked />Private<!--<div class='mainCompose' id='errorcrAcesso'><div class='calloutUp'></div><div class='calloutUp2'><h3>Mode login is invalid </h3> <hr/> <p> checked, enter</p><hr/></div></div>-->"
	document.getElementById("botoncrear").innerHTML = "<input type='submit' value='Create' id='crear' onclick=\"formularioCrearAlbum(); return false;\"/>"
}

//crear album
function tradencontacto()
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
	//contacto
	document.getElementById("contactotitulo").innerHTML = "<h2>P and I - Contact</h2><br><h3>Contact</h3>"
	document.getElementById("contactname").innerHTML = "<label>Name : <input type='text' name='name' class='name' id='name' size='30' value='Name' onblur=\"onblurtexto('name','Name','Grey');return false;\" onfocus=\"onfocustexto('name','Name','Black');return false;\"></label>"
	document.getElementById("errorrEmail2").innerHTML = "<div class='calloutUp'></div><div class='calloutUp2'><h3>The email address must be correct </h3> <hr/> <p>-The email address must be filled <br>-The email address is incorrect</p><hr/></div>"
	document.getElementById("labelcoment").innerHTML = "<label>Type your question ... (min. 30, max. 3000 characters)<br><textarea title='Type your question ...(min. 30, max. 3000 caracteres)' onchange='contarletras();return false;' id='comment' name='comment' cols='30' rows='10'></textarea></label>"
	document.getElementById("submitcoment").innerHTML = "<input type='submit' name='submit_ask' title='Send your question' value='Send your question' onclick=\"formularioContacto();return false;\"><div class='width50 floatright right paddingtop'>Written characters:<input type='text' value='0' size='4' class='counter' id='counter' name='counter' maxlength='4' readonly='readonly'></div>"
	
}
function tradenusuario()
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
	//usuario

	document.getElementById("usuariotitulo").innerHTML = "<h2>P and I - User</h2><br><h3>Detalles de usuario</h3>"
	document.getElementById("usrNombre").innerHTML = "<label form='usrNombre'>Name: </label><label></label>"
	document.getElementById("usrEmail").innerHTML = "<label form='usrEmail'>Email: </label><label></label>"
	document.getElementById("usrGenero").innerHTML = "<label form='usrGenero'>Sex: </label><label></label>"
	document.getElementById("usrfecha").innerHTML = "<label form='usrDia'>Date of birth: </label>"
	document.getElementById("usrPoblacion").innerHTML = "<label form='usrPoblacion'>City: </label><label></label>"
	document.getElementById("usrPais").innerHTML = "<label form='usrPais'>Country: </label><label></label>"
	document.getElementById("usrfecha1").innerHTML = "<label form='usrDia1'>User Submitted: </label>"
	document.getElementById("lnkbaja").innerHTML = "<a href=''>Unsubscribe  </a>"
	document.getElementById("contactodir").innerHTML = "<a href='Contacto.html'>Contact </a>"
	document.getElementById("contactodir").innerHTML = "<br><br><label>Albunes: </label><br><!--input type='text' name='calbum1' disabled>--><!--<div id='calbum1'><label></label></div><a href=''><img src='' id='calbum1' alt='Albumes'></a>-->"

}












