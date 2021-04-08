

/* Funciones de la practica en general */
var idioma="ESP";
/*validar fecha(esta aqui porque la usan las normales y las ER)*/
function esFechaValida(fecha){
	
	if ( fecha.value != "" ){
	
		var dia  =  parseInt(fecha.substring(0,2),10);//parseInt(fecha.value.substring(0,2),10);
		var mes  =  parseInt(fecha.substring(3,5),10);//parseInt(fecha.value.substring(3,5),10);
		var anio =  parseInt(fecha.substring(6),10);//parseInt(fecha.value.substring(6),10);
		
	
	switch(mes){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			numDias=31;
			break;
		case 4: 
		case 6: 
		case 9: 
		case 11:
			numDias=30;
			break;
		case 2:
			if (!comprobarSiBisisesto(anio)){ numDias=29; }else{ numDias=28; };
			break;
		default:
			return false;
		}
		//alert("numdias:"+numDias+"dia"+dia);
		if (dia>numDias || dia==0){
			//alert("mal");
			return false;
		}
		//alert("ok");
		return true;
	}

	return false;
}
// la usa la anterior
function comprobarSiBisisesto(anio){
	if ( ( anio % 100 != 0) && ((anio % 4 == 0) || (anio % 400 == 0))) {
		return true;
		}
	else {
		return false;
		}
}

/*modificar css para cuando un usuario se valida*/
/*
function validado_modificacss()
{
	document.getElementById('login').style.visibility='hidden';
	document.getElementById('loged').style.visibility='visible';
}
*/
/*nos muestra el formulario de acceso*/
/*
function salida_modificacss()
{
	document.getElementById('loged').style.visibility='hidden';
	document.getElementById('login').style.visibility='visible';
}
*/
/*Esta funcion saluda desde el 'onload'*/
function fSaluda(saludo) 
{
	alert(saludo);
}

/*comprueba si el control esta vacio*/
function fEsVacio(control) 
{
	var flag=false;

	if (control.value=="") 
	{
		flag=true;
	}

	return flag;
}
/*muestra un mensaje error*/
function msgError(control,texto)////////////FALTA TERMINAR
{
	/*
	document.getElementById(control).style="border: 2px solid Crimson;"
	if(control=="bFdia")
	{
		document.getElementById("bFdia").style="border: 2px solid Crimson;"
		document.getElementById("bFmes").style="border: 2px solid Crimson;"
		document.getElementById("bFanio").style="border: 2px solid Crimson;"
	}
	if(control=="rFdia")
	{
		document.getElementById("rFdia").style="border: 2px solid Crimson;"
		document.getElementById("rFmes").style="border: 2px solid Crimson;"
		document.getElementById("rFanio").style="border: 2px solid Crimson;"
	}
	*/
	
	switch(control)
	{
		case "bTitulo":
		document.getElementById("errorbTitulo").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageBusqueda").style.height="520px";
			else
				document.getElementById("pageBusqueda").style.height="720px";
		//document.getElementById("errorbTitulo").style.width="";
		break;
		case "bFdia":
		document.getElementById("errorbFdia").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageBusqueda").style.height="520px";
			else
				document.getElementById("pageBusqueda").style.height="720px";
				//document.getElementById("errorbFdia").style.width="";
		break;
		case "bFdia2":
		document.getElementById("errorbFdia2").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageBusqueda").style.height="520px";
			else
				document.getElementById("pageBusqueda").style.height="720px";
				//document.getElementById("errorbFdia2").style.width="";
		break;
		case "captchaText":
		document.getElementById("errorcaptchaText").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorcaptchaText").style.width="";
		break;
		case "rUsu":
		document.getElementById("errorrUsu").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrUsu").style.width="";
		break;
		case "rPWD":
		document.getElementById("errorrPWD").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrPWD").style.width="";
		break;
		case "rPWD2":
		document.getElementById("errorrPWD2").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrPWD2").style.width="";
		break;
		case "rFdia":
		document.getElementById("errorrFdia").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrFdia").style.width="1000px";
		break;
		case "rEmail":
		document.getElementById("errorrEmail").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrEmail").style.width="";
		break;
		case "rCP":
		document.getElementById("errorrCP").style.display="inline";
			if(getCookie('estilo')!="textogrande")	
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrCP").style.width="";
		break;
		//case "rGenero":
		//document.getElementById("errorrGenero").style.display="inline";
				//if(getCookie('estilo')!="textogrande")	
				//document.getElementById("pageRegistro").style.height="";
				//else
				//document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrGenero").style.width="";
		//break;
		case "rCondicion":
		document.getElementById("errorrCondicion").style.display="inline";
		if(getCookie('estilo')!="textogrande")	
			document.getElementById("pageRegistro").style.height="1000px";
		else
			document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorrCondicion").style.width="";
		break;

		case "crAcesso":
		document.getElementById("errorcrAcesso").style.display="inline";
		if(getCookie('estilo')!="textogrande")
				document.getElementById("pageCrearalbum").style.height="450px";
			else
				document.getElementById("pageCrearalbum").style.height="650px";
				//document.getElementById("errorcrAcesso").style.width="";
		break;
		case "crtitulo":
		document.getElementById("errorcrtitulo").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageCrearalbum").style.height="450px";
			else
				document.getElementById("pageCrearalbum").style.height="650px";
		//document.getElementById("errorcrtitulo").style.width="";
		break;

		case "fotoregistro":
		document.getElementById("errorfotoregistro").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageRegistro").style.height="1000px";
			else
				document.getElementById("pageRegistro").style.height="1200px";
				//document.getElementById("errorfotoregistro").style.width="";
		break;
		case "fotoalbum":
		document.getElementById("errorfotoalbum").style.display="inline";
		if(getCookie('estilo')!="textogrande")
				document.getElementById("pageFoto").style.height="1000px";
		else
			document.getElementById("pageFoto").style.height="1200px";
		//document.getElementById("errorfotoalbum").style.width="";
		break;
		case "ffoto":
		document.getElementById("errorcrtitulo").style.display="inline";
			if(getCookie('estilo')!="textogrande")
				document.getElementById("pageFoto").style.height="1000px";
			else
				document.getElementById("pageFoto").style.height="1200px";
				//document.getElementById("errorffoto").style.width="";
		break;
		case "cEmail":
		document.getElementById("errorrEmail2").style.display="inline";
				if(getCookie('estilo')!="textogrande")
					document.getElementById("pageContacto").style.height="600px";
				else
					document.getElementById("pageContacto").style.height="800px";
				//document.getElementById("errorrEmail2").style.width="";
		break;
		
		//case "nombrecontrol":
			//document.getElementById("mensajerror").style.display="inline";
			////document.getElementById("calloutUp2").InertHTML="<h3>Error: "+texto+"</h3><hr/><p> explicacion del error</p>";
				//document.getElementById("mensajerror").style.height="";
				//document.getElementById("mensajerror").style.width="";
			//break;
		default:

			alert(texto);
		}
	
	
	
	
}
function quitarError(error)
{
	document.getElementById(error).style.display="none";
	if(getCookie('estilo')!="textogrande")
	{
	switch(error)
		{
		case "errorbTitulo":
		case "errorbFdia":
		case "errorbFdia2":
		document.getElementById("pageBusqueda").style.height="320px";
		break;
		case "errorcaptchaText":
		case "errorrUsu":
		case "errorrPWD":
		case "errorrPWD2":
		case "errorrFdia":
		case "errorrEmail":
		case "errorrCP":
		case "errorrCondicion":
				document.getElementById("pageRegistro").style.height="800px";
		break;

		case "errorcrAcesso":
		case "errorcrtitulo":
		document.getElementById("pageCrearalbum").style.height="250px";		
		break;

		case "errorfotoregistro":
		case "errorfotoalbum":
		case "errorffoto":
				document.getElementById("pageFoto").style.height="800px";
		break;
		case "errorcEmail":
		document.getElementById("pageContacto").style.height="400px";
		}		
	}
	else
	{
		switch(error)
		{
			case "errorerrorbTitulo":
		case "errorbFdia":
		case "errorbFdia2":
		document.getElementById("pageBusqueda").style.height="520px";
		break;
		case "errorcaptchaText":
		case "errorrUsu":
		case "errorrPWD":
		case "errorrPWD2":
		case "errorrFdia":
		case "errorrEmail":
		case "errorrCP":
		case "errorrCondicion":
				document.getElementById("pageRegistro").style.height="1000px";
		break;

		case "errorcrAcesso":
		case "errorcrtitulo":
		document.getElementById("pageCrearalbum").style.height="450px";		
		break;

		case "errorfotoregistro":
		case "errorfotoalbum":
		case "errorffoto":
				document.getElementById("pageFoto").style.height="1000px";
		break;
		case "errorcEmail":
		document.getElementById("pageContacto").style.height="600px";
		}
	}
}
/*quita escacios en blanco*/  
function trim(myString)
{
	var cad=myString.replace(/^\s+/g,'').replace(/\s+$/g,'');
	for (var i=0; i<cad.length; i++)
	{
		var caracter = cad[i];
		//que sean numeros
		if(caracter==9)
		{
			cad[i]="";
		}
	}
	return cad;
}
/*
 * Función que elimina acentos y caracteres especiales de
 * una cadena de texto.
 * @param input
 * @return cadena de texto limpia de acentos y caracteres especiales.
 */
function sustituirAcento(cadena)
{

	//filtrado SQL
	var cadena2=sqlfiltro1(cadena);
	var cadena1=trim(cadena2);
	// Cadena de caracteres original a sustituir.
	var original = "áàäéèëíìïóòöúùñÁÀÄÉÈËÍÌÏÓÒÖÚÙÜÑçÇ";
	// Cadena de caracteres ASCII que reemplazarán los originales.
	var ascii = "aaaeeeiiiooouuunAAAEEEIIIOOOUUUNcC";
	var resp = cadena1;
	var control=false;

	for (var i=0; i<resp.length; i++) 
	{
		for (var j=0; j<original.length; j++) 
		{
			if(resp[i]==original[j])
			{
				control=true;
			}
		}
	}
	if(control)
	{
		for (var j=0; j<original.length; j++) 
		{
			// Reemplazamos los caracteres especiales.
			resp=resp.replace(original[j], ascii[j]);
		}
		if(!confirm("Quiso decir: "+resp))
		{
			resp=cadena1;
		}
	}

	return resp;
}
/*filtrado basico sql*/
function sqlfiltro1(cadena)//Comprobar caracteres extraños
{
	var control=false;
	var texto=cadena.toUpperCase();
	var texto_final="";
	if(texto.search("SELECT")!=-1)
	{
	control=true;
	texto_final=texto.replace("SELECT", "");
	texto=texto_final;
	}
	if(texto.search("'")!=-1)
	{
	control=true;
	texto_final=texto.replace("'", "");
	texto=texto_final;
	}
	if(texto.search("\"")!=-1)
	{
	control=true;
	texto_final=texto.replace("\"", "");//MIRAR
	texto=texto_final;
	}
	if(texto.search("UPDATE")!=-1)
	{
	control=true;
	texto_final=texto.replace("UPDATE", "");
	texto=texto_final;
	}
	if(texto.search("DELETE")!=-1)
	{
	control=true;
	texto_final=texto.replace("DELETE", "");
	texto=texto_final;
	}
	if(texto.search("DROP")!=-1)
	{
	control=true;
	texto_final=texto.replace("DROP", "");
	texto=texto_final;
	}
	
	if(texto.search("UNION ")!=-1)
	{
	control=true;
	texto_final=texto.replace("UNION ", "");
	texto=texto_final;
	}
	
	if(texto.search("%")!=-1)
	{
	control=true;
	texto_final=texto.replace("%", "&#37;");//MIRAR
	texto=texto_final;
	}
	if(texto.search("%00")!=-1)
	{
	control=true;
	texto_final=texto.replace("%00", "");
	texto=texto_final;
	}
	if(texto.search(" TOP ")!=-1)
	{
	control=true;
	texto_final=texto.replace(" TOP ", "");
	texto=texto_final;
	}
	if(texto.search(" GROUP ")!=-1)
	{
	control=true;
	texto_final=texto.replace(" GROUP ", "");
	texto=texto_final;
	}
	if(texto.search("=")!=-1)
	{
	control=true;
	texto_final=texto.replace("=", "");
	texto=texto_final;
	}
	if(texto.search(">")!=-1)
	{
	control=true;
	texto_final=texto.replace(">", "&#62;");//MIRAR
	texto=texto_final;
	}
	if(texto.search("<")!=-1)
	{
	control=true;
	texto_final=texto.replace("<", "&#60;");//MIRAR
	texto=texto_final;
	}
	if(texto.search("IIF")!=-1)
	{
	control=true;
	texto_final=texto.replace("IIF", "");
	texto=texto_final;
	}
	if(texto.search("FROM")!=-1)
	{
	control=true;
	texto_final=texto.replace("FROM", "");
	texto=texto_final;
	}
	if(texto.search(" OR ")!=-1)
	{
	control=true;
	texto_final=texto.replace(" OR ", "");
	texto=texto_final;
	}
	if(texto.search(" AND ")!=-1)
	{
	control=true;
	texto_final=texto.replace(" AND ", "");
	texto=texto_final;
	}
	if(texto.search(" IN" )!=-1)
	{
	control=true;
	texto_final=texto.replace(" IN ", "");
	texto=texto_final;
	}	
	if(texto.search(" CHR ")!=-1)
	{
	control=true;
	texto_final=texto.replace(" CHR ", "");
	texto=texto_final;
	}
	/*	var aux=" ASC(";
	if(texto.search(aux)!=-1)
	{
	control=true;
	texto_final=texto.replace(aux, "");
	texto=texto_final;
	}*/
	if(cadena.search(" CurDir ")!=-1)
	{
	control=true;
	texto_final=cadena.replace(" CurDir ", "");
	texto=texto_final;
	}
	var aux2=" LEN";//LEN(
	if(cadena.search(aux2)!=-1)
	{
	control=true;
	texto_final=texto.replace(aux2, "");
	texto=texto_final;
	}
	if(cadena.search("SHELL")!=-1)
	{
	control=true;
	texto_final=texto.replace("SHELL", "");
	texto=texto_final;
	}
	if(cadena.search("ASCII")!=-1)
	{
	control=true;
	texto_final=texto.replace("ASCII", "");
	texto=texto_final;
	}
	if(cadena.search("SUBSTRING")!=-1)
	{
	control=true;
	texto_final=texto.replace("SUBSTRING", "");
	texto=texto_final;
	}
	if(cadena.search("LENGTH")!=-1)
	{
	control=true;
	texto_final=texto.replace("LENGTH", "");
	texto=texto_final;
	}
	if(cadena.search("VERSION")!=-1)
	{
	control=true;
	texto_final=texto.replace("VERSION","");
	texto=texto_final;
	}
	if(cadena.search("EXISTS")!=-1)
	{
	control=true;
	texto_final=texto.replace("EXISTS","");
	texto=texto_final;
	}
	/*texto_final=texto_final.replace()*/
	
	if(!control)
	{
		texto_final=cadena;
	}
	else
	{
		texto_final=texto;
	}
	//alert(texto_final)
	return texto_final;
}
/*
import DNS, smtplib DNS.DiscoverNameServers()
 mx_hosts = DNS.mxlookup(hostname) 
 # Just doing the mxlookup might be enough for you, 
 # but do something like this to test for SMTP server for mx in mx_hosts: smtp = smtplib.SMTP() 
 #.. if this doesn't raise an exception it is a valid MX host... try: smtp.connect(mx[1]) except smtplib.SMTPConnectError: continue 
 # try the next MX server in list 
*/

/*funcion para loguearse en la plantilla como usuario valido*/
function formulariologear()
{	
	var Nombre=sustituirAcento(document.getElementById('pUsu').value);
	var Contrasenia=sustituirAcento(document.getElementById('pPWD').value);
	if(validarNombre(Nombre)&&(validarContrasenia(Contrasenia)))
	{
		validado_modificacss();
		//USUARIO CORRECTO
	}
	else
	{
		//PONER EL MENSAJE DE AVISO
		setTimeout("location.href='pg/Aviso.php?e=20'", 5000);//Como especificar el mensaje???
	}
	
}

function contarletras()
{

	document.getElementById('counter').value()=document.getElementById('comment').value().length;

}


 
 ///////////////////////////////////////////////////////

 //funcion placeholder onfocus plantilla
function onfocustexto(control,valor,color)//Black
{
	//mantener el negro si el css es de alto contraste
	//if (document.getElementById("css").href= "altoContraste.css") 
	//{
	//	document.getElementById(control).style.color="Black";
	//}
	//else
	//{
		//cambiar segun el color entre blanco y negro
		if(document.getElementById(control).value==valor)
		{
			document.getElementById(control).value='';
		}
		document.getElementById(control).style.color=color;
	//}
}
//funcion placeholder onblur plantilla
function onblurtexto(control,valor,color)//Grey
{
	//mantener el negro si el css es de alto contraste
	//if (document.getElementById("css").href= "altoContraste.css") 
	//{
	//	document.getElementById(control).style.color="Black";
	//}
	//else
	//{
		//cambiar segun el color entre blanco y gris
		if(document.getElementById(control).value=='') 
		{
			document.getElementById(control).value=valor;
			document.getElementById(control).style.color=color;
		}	

	//}
}

function onloadbody()
{
	var objs = document.getElementsByTagName("input");
	//comprobar estilos
	var titulo="";
	
	if(getCookie('estiloPI')!="")
	{
		titulo=getCookie('estiloPI')
		estilo(titulo);
	}

	for (var i=0;i<objs.length; i++) 
	{
		if(objs[i].getAttribute("type").indexOf("text") == 0) 
		{
			if(objs[i].value!="")
			{
				objs[i].style.color="Grey";
			}
		}
	}
	document.getElementById("pBuscar").style.color="White";
		
}

/*
function onfocustexto(valor)
{
	if(this.value==valor) this.value='';
	//rhis.style.color="gris o tenue"
}

function onblurtexto(valor)
{
	if(this.value=='') this.value=valor;
	//rhis.style.color="gris o tenue"
}
*/

/*funcion que comprueba si existe una caracteristica necesaria*/
/*
function prepareLinks()
{
	if (!document.getElementsByTagName) 
		return false;

	var obj = document.getElementsByTagType("text");
	for (var i=0; i<obj.length; i++) {
		if (obj[i].getAttribute("class").indexOf("popup") >= 0) 
		{
			obj[i].onclick = function() {
									popUp(this.getAttribute("href"));
									return false;
								}
		}	
	}
}
*/
/********************************
+
+Codigo para comprobar si el navegador tiene los atributos adecuados
+
********************************/

//window.onload = comprobacionInicial;
function comprobacionInicial() 
{
	//array de mis atributos necesarios
	var misAtributos = new Array(5);
	
	misAtributos[0] = "accept";
	misAtributos[1] = "autocomplete";
	misAtributos[2] = "required";
	misAtributos[3] = "placeholder";
	misAtributos[4] = "autofocus";
	misAtributos[5] = "pattern";
	//array de mis valores necesarios del atributo type
	var misTipos = new Array(7);
	
	misTipos[0] = "tel";
	misTipos[1] = "email";
	misTipos[2] = "url";
	misTipos[3] = "number";
	misTipos[4] = "date";
	misTipos[5] = "search";
	misTipos[6] = "range";
	misTipos[7] = "color";
}
//para comprobar los atributos
function comprobarAtributos(atributos,elemento) {

	var obj = document.getElementById(elemento);
	var resp=true;
	//si el elemento tiene todos los atributos....
	for (var i=0; resp&&i<atributos.length; i++) {
		if (obj.getAttribute(atributos[i]) == 0) 
		{
			//obj[i].onclick = function() {
			//	popUp(this.getAttribute("href"));
			resp=false;
			//	}
		}
	}
	return resp;
}
//comprobar los valores posibles del atributo type
function comprobarTipos(tipos,elemento) {
	var obj = document.getElementById(elemento);
	var resp=true;
	for (var i=0; resp&&i<tipos.length; i++) {
		if (obj.getAttribute("type").indexOf(tipos[i]) == 0) 
		{
			//obj[i].onclick = function() {
			//					popUp(this.getAttribute("href"));
			resp=false;
			//				}
		}
	}
	return resp;
}
//funcion para crear una ventana emergente
function popUp(winURL) 
{
	window.open(winURL,"popup","width=320,height=480");
}

function cambiarEstilo(titulo) 
{
	/*
	if(getCookie('estiloPI')=="")
	{
		setCookie('estiloPI',titulo,2);
	}
	*/
	//c_mane=hex_md5(c_name);
	//titulo=hex_sha1(titulo);
	setCookie('estiloPI',titulo,0);//destruir cookie anterior
	setCookie('estiloPI',titulo,2);
	estilo(titulo);

}

// Funcion aconsejada para cambiar estilo
function estilo(titulo) {
	var arrayLink = document.getElementsByTagName('link');
	for(var i = 0; i < arrayLink.length; i++) {
		// Sólo aquellas etiquetas link que hacen referencia a un estilo
		// y que no sea para impresión
		if(arrayLink[i].getAttribute('rel') != null && arrayLink[i].getAttribute('rel').indexOf('stylesheet') != -1 && arrayLink[i].getAttribute('media') != 'print') {
			// Si tiene título es un estilo preferido o alternativo,
			// si no tiene título es un estilo
			// predeterminado y siempre tiene que utilizarse
			if(arrayLink[i].getAttribute('title') != null && arrayLink[i].getAttribute('title').length > 0) {
				if(arrayLink[i].getAttribute('title') == titulo)
				{
					arrayLink[i].disabled = false;
				}
				else
				{
					arrayLink[i].disabled = true;
				}
			}
		}
	}
}

//<!--
//funcion que puede fallar ya que todo el css debe estar en el otro fichero y <link> tb tiene otros usos
//para cambiar el estilo
/*
function estilo(titulo) {
	var arrayLink = document.getElementsByTagName('link');
	for(var i = 0; i < arrayLink.length; i++) {
	if(arrayLink[i].getAttribute('title') == titulo)
		arrayLink[i].disabled = false;
	else
		arrayLink[i].disabled = true;
	}
}
*/
// -->
function onloadbodyusuario()
{
	if(idioma=="EN")
	{
		tradenusuario();
	}
	/*
	if(idioma=="ESP")
	{
		tradespusuario();
	}
	*/
}
function onloadbodyfoto()
{
	if(idioma=="EN")
	{
		tradenfoto();
	}
	/*
	if(idioma=="ESP")
	{
		tradespfoto();
	}
	*/
}
function onloadbodycralbum()
{
	if(idioma=="EN")
	{
		tradencralbum();
	}
	/*
	if(idioma=="ESP")
	{
		tradespcralbum();
	}
	*/
}
function onloadbodycontacto()
{
	if(idioma=="EN")
	{
		tradencontacto();
	}
	/*
	if(idioma=="ESP")
	{
		tradespcontacto();
	}
	*/
}
function onloadbodyaviso()
{
	if(idioma=="EN")
	{
		tradenaviso();
	}
	/*
	if(idioma=="ESP")
	{
		tradespaviso();
	}
	*/
}
function onloadbodyalbum()
{
	if(idioma=="EN")
	{
		tradenalbum();
	}
	/*
	if(idioma=="ESP")
	{
		tradespalbum();
	}
	*/
}
function onloadbodyplantilla()
{
	if(idioma=="EN")
	{
		traden();
	}
	/*
	if(idioma=="ESP")
	{
		tradesp();
	}
	*/
}
function onloadbodyregistro()
{
	if(idioma=="EN")
	{
		tradenregistro();
	}
	/*
	if(idioma=="ESP")
	{
		tradespregistro();
	}
	*/
}
function onloadbodyhome()
{
	if(idioma=="EN")
	{
		tradenhome();
	}
	/*
	if(idioma=="ESP")
	{
		tradesphome();
	}
	*/
}
function onloadbodydetalle()
{
	if(idioma=="EN")
	{
		tradendetalle();
	}
	/*
	if(idioma=="ESP")
	{
		tradespdetalle();
	}
	*/
}
function onloadbodyresultados()
{
	if(idioma=="EN")
	{
		tradenresultados();
	}
	/*
	if(idioma=="ESP")
	{
		tradespresultados();
	}
	*/
}
function onloadbodybusqueda()
{
	if(idioma=="EN")
	{
		tradenbusqueda();
	}
	/*
	if(idioma=="ESP")
	{
		tradespbusqueda();
	}
	*/
}