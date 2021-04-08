<?php
$idioma="ESP";
/*validar fecha(esta aqui porque la usan las normales y las ER)*/
function esFechaValida($fecha){
	
	if ($fecha != "" ){
	
		$dia  =  (int)substr($fecha,0,2);//parseInt(fecha.substring(0,2),10);
		$mes  =  (int)substr($fecha,3,5);//parseInt(fecha.substring(3,5),10);
		$anio =  (int)substr($fecha,6);//parseInt(fecha.substring(6),10);
		
	
	switch($mes){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$numDias=31;
			break;
		case 4: 
		case 6: 
		case 9: 
		case 11:
			$numDias=30;
			break;
		case 2:
			if (!comprobarSiBisisesto($anio)){ $numDias=29; }else{ $numDias=28; };
			break;
		default:
			return false;
		}
		if ($dia > $numDias || $dia==0)
		{
			return false;
		}
		return true;
	}

	return false;
}
// la usa la anterior
function comprobarSiBisisesto($anio){
	if ( ( $anio % 100 != 0) && (($anio % 4 == 0) || ($anio % 400 == 0))) {
		return true;
		}
	else {
		return false;
		}
}

/*Esta funcion saluda desde el 'onload'*/
/*
function fSaluda(saludo) 
{
	alert(saludo);
}
*/
/*comprueba si el control esta vacio*/
function fEsVacio($control) 
{
	$flag=false;

	if ($control=="") 
	{
		$flag=true;
	}

	return $flag;
}
/*
function msgError($control,$texto)////////////FALTA TERMINAR
{
*/
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
/*	
	switch($control)
	{
		case "bTitulo":
			header("Location: pg/Aviso.php?e=1");
		break;
		case "bFdia":
			header("Location: pg/Aviso.php?e=2");
		break;
		case "bFdia2":
			header("Location: pg/Aviso.php?e=3");
		break;
		case "captchaText":
			header("Location: pg/Aviso.php?e=4");
		break;
		case "rUsu":
			header("Location: pg/Aviso.php?e=5");
		break;
		case "rPWD":
			header("Location: pg/Aviso.php?e=6");
		break;
		case "rPWD2":
			header("Location: pg/Aviso.php?e=7");
		break;
		case "rFdia":
			header("Location: pg/Aviso.php?e=8");
		break;
		case "rEmail":
			header("Location: pg/Aviso.php?e=9");
		break;
		case "rCP":
			header("Location: pg/Aviso.php?e=10");
		break;
		//case "rGenero":
		//header("Location: pg/Aviso.php?e=11");
		//break;
		case "rCondicion":
			header("Location: pg/Aviso.php?e=12");
		break;

		case "crAcesso":
			header("Location: Aviso.php?e=13");
		break;
		case "crtitulo":
			header("Location: publica.php?e=14");
		break;

		case "fotoregistro":
			header("Location: pg/Aviso.php?e=15");
		break;
		case "fotoalbum":
			header("Location: Aviso.php?e=16");
		break;
		case "ffoto":
			header("Location: Aviso.php?e=17");
		break;
		case "cEmail":
			header("Location: Aviso.php?e=18");
		break;
		
		//case "nombrecontrol":
			//document.getElementById("mensajerror").style.display="inline";
			////document.getElementById("calloutUp2").InertHTML="<h3>Error: "+texto+"</h3><hr/><p> explicacion del error</p>";
				//document.getElementById("mensajerror").style.height="";
				//document.getElementById("mensajerror").style.width="";
			//break;
		default:
			//header("Location: Aviso.php?e=19");
			//header("Location: pg/Aviso.php?e=19");
			//alert(texto);
		}
	
	
	
	


}
*/
/*quita escacios en blanco*/  
/*function trim($myString)
{
	$cad=str_replace(/^\s+/g,'',$myString);
	str_replace(/\s+$/g,'',$myString);
	for ($i=0; $i<$cad.length; $i++)
	{
		$caracter = $cad[i];
		//que sean numeros
		if($caracter==9)
		{
			$cad[$i]="";
		}
	}
	return $cad;
}*/
/*
 * Función que elimina acentos y caracteres especiales de
 * una cadena de texto.
 * @param input
 * @return cadena de texto limpia de acentos y caracteres especiales.
 */

function sustituirAcento($cadena)
{

	//filtrado SQL
	$cadena2=sqlfiltro1($cadena);
	$cadena1=trim($cadena2);
}
/*	// Cadena de caracteres original a sustituir.
	$original = "áàäéèëíìïóòöúùñÁÀÄÉÈËÍÌÏÓÒÖÚÙÜÑçÇ";
	// Cadena de caracteres ASCII que reemplazarán los originales.
	$ascii = "aaaeeeiiiooouuunAAAEEEIIIOOOUUUNcC";
	$resp = $cadena1;
	$control=false;

	for ($i=0; $i<$resp.length; $i++) 
	{
		for ($j=0; $j<$original.length; $j++) 
		{
			if($resp[$i]==$original[$j])
			{
				$control=true;
			}
		}
	}
	if($control)
	{
		for ($j=0; $j<$original.length; $j++) 
		{
			// Reemplazamos los caracteres especiales.
			$resp=$resp.replace($original[$j], $ascii[$j]);
		}
		if(!confirm("Quiso decir: "+$resp))
		{
			$resp=$cadena1;
		}
	}

	return $resp;
}*/
/*filtrado basico sql*/
function sqlfiltro1($cadena)//Comprobar caracteres extraños
{
	$control=false;
	$texto=strtoupper($cadena);
	$texto_final="";
	if(substr_count($texto,'SELECT')>0)
	{
		$control=true;
		$texto_final=str_replace("SELECT", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"'")>0)
	{
		$control=true;
		$texto_final=str_replace("'", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"\"")>0)
	{
		$control=true;
		$texto_final=str_replace("\"", "",$texto);//MIRAR
		$texto=$texto_final;
	}
	if(substr_count($texto,"UPDATE")>0)
	{
		$control=true;
		$texto_final=str_replace("UPDATE", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"DELETE")>0)
	{
		$control=true;
		$texto_final=str_replace("DELETE", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"DROP")>0)
	{
		$control=true;
		$texto_final=str_replace("DROP", "",$texto);
		$texto=$texto_final;
	}
	
	if(substr_count($texto,"UNION ")>0)
	{
		$control=true;
		$texto_final=str_replace("UNION ", "",$texto);
		$texto=$texto_final;
	}
	
	if(substr_count($texto,"%")>0)
	{
		$control=true;
		$texto_final=str_replace("%", "&#37;",$texto);//MIRAR
		$texto=$texto_final;
	}
	if(substr_count($texto,"%00")>0)
	{
		$control=true;
		$texto_final=str_replace("%00", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto," TOP ")>0)
	{
		$control=true;
		$texto_final=str_replace(" TOP ", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto," GROUP ")>0)
	{
		$control=true;
		$texto_final=str_replace(" GROUP ", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"=")>0)
	{
		$control=true;
		$texto_final=str_replace("=", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,">")>0)
	{
		$control=true;
		$texto_final=str_replace(">", "&#62;",$texto);//MIRAR
		$texto=$texto_final;
	}
	if(substr_count($texto,"<")>0)
	{
		$control=true;
		$texto_final=str_replace("<", "&#60;",$texto);//MIRAR
		$texto=$texto_final;
	}
	if(substr_count($texto,"IIF")>0)
	{
		$control=true;
		$texto_final=str_replace("IIF", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto,"FROM")>0)
	{
		$control=true;
		$texto_final=str_replace("FROM", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto," OR ")>0)
	{
		$control=true;
		$texto_final=str_replace(" OR ", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($texto," AND ")>0)
	{
	$control=true;
	$texto_final=str_replace(" AND ", "",$texto);
	$texto=$texto_final;
	}
	if(substr_count($texto," IN" )!=-1)
	{
		$control=true;
		$texto_final=str_replace(" IN ", "",$texto);
		$texto=$texto_final;
	}	
	if(substr_count($texto," CHR ")>0)
	{
		$control=true;
		$texto_final=str_replace(" CHR ", "",$texto);
		$texto=$texto_final;
	}
	/*$aux=" ASC(";
	if(substr_count($texto,$aux)!=-1)
	{
		$control=true;
		$texto_final=$texto.replace(aux, "",$texto);
		$texto=$texto_final;
	}*/
	if(substr_count($cadena," CurDir ")>0)
	{
		$control=true;
		$texto_final=str_replace(" CurDir ", "",$texto);
		$texto=$texto_final;
	}
	$aux2=" LEN";//LEN(
	if(substr_count($cadena,$aux2)>0)
	{
		$control=true;
		$texto_final=str_replace($aux2, "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"SHELL")>0)
	{
		$control=true;
		$texto_final=str_replace("SHELL", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"ASCII")>0)
	{
		$control=true;
		$texto_final=str_replace("ASCII", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"SUBSTRING")>0)
	{
		$control=true;
		$texto_final=str_replace("SUBSTRING", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"LENGTH")>0)
	{
		$control=true;
		$texto_final=str_replace("LENGTH", "",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"VERSION")>0)
	{
		$control=true;
		$texto_final=str_replace("VERSION","",$texto);
		$texto=$texto_final;
	}
	if(substr_count($cadena,"EXISTS")>0)
	{
		$control=true;
		$texto_final=str_replace("EXISTS","",$texto);
		$texto=$texto_final;
	}
	
	if(!$control)
	{
		$texto_final=$cadena;
	}
	else
	{
		$texto_final=$texto;
	}
	return $texto_final;
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
	$Usu=(isset($_POST['pUsu']) ? $_POST['pUsu']:"");
	$Pwd=(isset($_POST['pPWD']) ? $_POST['pPWD']:"");
	$Usu=sustituirAcento($Usu);
	$PWD=sustituirAcento($Pwd);
	if(validarNombre($Usu)&&(validarContrasenia($Pwd)))
	{
		validado_modificacss();
		//USUARIO CORRECTO
	}
	else
	{
		//PONER EL MENSAJE DE Aviso
		//setTimeout("location.href='pg/Aviso.html'", 5000);//Como especificar el mensaje???
		setTimeout("Location:'pg/Aviso.html?e=2'", 5000);//Como especificar el mensaje???
	}
	
}

/*funcion para loguearse en la plantilla como usuario valido*/
function formulariologear2()
{	
	$Usu=(isset($_POST['pUsu']) ? $_POST['pUsu']:"");
	$Pwd=(isset($_POST['pPWD']) ? $_POST['pPWD']:"");
	$Usu=sustituirAcento($Usu);
	$PWD=sustituirAcento($Pwd);
	if(validarNombre($Usu)&&(validarContrasenia($Pwd)))
	{
		validado_modificacss();
		//USUARIO CORRECTO
	}
	else
	{
		//PONER EL MENSAJE DE Aviso
		setTimeout("Location:'/Aviso.html?e=1'", 5000);//Como especificar el mensaje???
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
	if($idioma=="EN")
	{
		tradenusuario();
	}
	/*
	if($idioma=="ESP")
	{
		tradespusuario();
	}
	*/
}
function onloadbodyfoto()
{
	if($idioma=="EN")
	{
		tradenfoto();
	}
	/*
	if($idioma=="ESP")
	{
		tradespfoto();
	}
	*/
}
function onloadbodycralbum()
{
	if($idioma=="EN")
	{
		tradencralbum();
	}
	/*
	if($idioma=="ESP")
	{
		tradespcralbum();
	}
	*/
}
function onloadbodycontacto()
{
	if($idioma=="EN")
	{
		tradencontacto();
	}
	/*
	if($idioma=="ESP")
	{
		tradespcontacto();
	}
	*/
}
function onloadbodyAviso()
{
	if($idioma=="EN")
	{
		tradenAviso();
	}
	/*
	if($idioma=="ESP")
	{
		tradespAviso();
	}
	*/
}
function onloadbodyalbum()
{
	if($idioma=="EN")
	{
		tradenalbum();
	}
	/*
	if($idioma=="ESP")
	{
		tradespalbum();
	}
	*/
}
function onloadbodyplantilla()
{
	if($idioma=="EN")
	{
		traden();
	}
	/*
	if($idioma=="ESP")
	{
		tradesp();
	}
	*/
}
function onloadbodyregistro()
{
	if($idioma=="EN")
	{
		tradenregistro();
	}
	/*
	if($idioma=="ESP")
	{
		tradespregistro();
	}
	*/
}
function onloadbodyhome()
{
	if($idioma=="EN")
	{
		tradenhome();
	}
	/*
	if($idioma=="ESP")
	{
		tradesphome();
	}
	*/
}
function onloadbodydetalle()
{
	if($idioma=="EN")
	{
		tradendetalle();
	}
	/*
	if($idioma=="ESP")
	{
		tradespdetalle();
	}
	*/
}
function onloadbodyresultados()
{
	if($idioma=="EN")
	{
		tradenresultados();
	}
	/*
	if($idioma=="ESP")
	{
		tradespresultados();
	}
	*/
}
function onloadbodybusqueda()
{
	if($idioma=="EN")
	{
		tradenbusqueda();
	}
	/*
	if($idioma=="ESP")
	{
		tradespbusqueda();
	}
	*/
}
?>