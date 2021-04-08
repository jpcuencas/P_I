<?php
include_once("registromx.php");
include_once("funciones.php");
//validar con expresiones regulares//
function validartexto($cadena)
{
	$cadena2=trim($cadena);
	$cadena1=sqlfiltro1($cadena2)
	return $cadena1;
}

/*valida el codigo postal de registro*/
function validarCP($cadena)
{
	if($cadena=="02345")
	{
		$cadena="";
	}
	$cadena2=trim($cadena);
	$cadena=sqlfiltro1($cadena2);
	$RegExPattern=/([0-9]{5})/;

	if($cadena!="")
	{
	if (!(RegExPattern.test($cadena))) {
		//alert("formato de fecha no valido (dd/mm/aaaa)");
		return false;
	}
	
	 }
	 return true;
}

function validarDate($dia,$mes,$anio)////probar 
 {
 //$fecha=$dia+"/"+$mes+"/"+$anio;
	$d = new Date();
	$resp=false;
	
	$d.setMonth($mes+1);
	$d.setFullYear($anio);
	$d.setDate($dia);

	//$d.format("dd/mm/yyyy");
	//if($fecha.length==10&&(($d.getUTCDate()==$dia)&&($d.getUTCMonth()==($mes+1))&&($d.getUTCFullYear()==$anio)))
	if((($d.getUTCDate()==$dia)&&($d.getUTCMonth()==$mes)&&($d.getUTCFullYear()==$anio)))
	{
		$resp=true;
	}
	return $resp;
 }
 //function validarFechaER($dia,$mes,$anio)
 function validarFecha($dia,$mes,$anio)
 {
	$dia1=$dia
	$mes1=$mes
	$RegExPattern= /^(0?[1-9]|[12][0-9]|3[01])\/(0?[1-9]|1[012])\/[0-9]{2,4}$/; //"/^\d{1,2}\/\d{1,2}\/\d{2,4}$/";

	if($dia<10)
	{
		$dia1="0"+$dia;
	}
	if($mes<10)
	{
		$mes1="0"+$mes;
	}
	$fecha=$dia1+"/"+$mes1+"/"+$anio;
	//formar el formato fecha
	if (!($RegExPattern.test($fecha))) {
		//alert("formato de fecha no valido (dd/mm/aaaa)");
		
		return false;
	}

	if(esFechaValida($fecha))//validar longitud y fecha
	{
		return true;
	}
	
	return false;
 }
 
 //function validarEmailER($cadena)
 function validarEmail($cadena)
 {
	$cadena=sustituirAcento($cadena);
	$Dom="";
	$control=true;
	$control2=true;
	$i=0;
	$RegExPattern = /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/; //"/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/";
	$dominio="";
	$aux="";
	if($cadena=="ejemplo@email.com")
	{
		$cadena="";
	}
	$cadena=sustituirAcento($cadena);
	$cadena=sqlfiltro1($cadena);
	if($cadena.value!="")
	{
	if (!($RegExPattern.test($cadena))) {
	//alert("formato de email no valido (ejemplo@email.com)");
		return false;
	}
	if(valida_email($cadena))
		return true;
	else
		return false;
 }
 else 
 return false; 
 } 

 //function validarcontraseniaER($cadena)
 function validarContrasenia($cadena)
 {
	$cadena=sustituirAcento($cadena);
	$cadena=sqlfiltro1($cadena);
	if($cadena=="")return false;
	if($cadena.value!="")
	{
		$RegExPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;//= /(([a-z]{1,15})([A-Z]{1,15})([a-zA-Z0-9_]*){6,15})$/;
		$RegExPattern2 = /([a-zA-Z0-9_]{6,15}$)/
		if ($RegExPattern.test(cadena)) 
		{
			if($RegExPattern2.test($cadena))
				return true;
			else
				return false;
		}
		else 
			return false;
	}
 }
  
  function confirmarContrasenia($cadena1,$cadena2)
 {
	$resp=false;
	if($cadena1==$cadena2)
	{
		$resp=true;
	}
	else
	{
		//funcion msgError(control,texto) para cuando la contraseña no coincide
	}
	return $resp;
 }
 function validarNombre($cadena)
 {
	if($cadena=="Usuario")
	{
		$cadena="";
	}
	if($cadena.value!="")
	{
 	$RegExPattern = /([0-9a-zA-Z]{3,15})$/;
 	  if (!($RegExPattern.test($cadena))) {
		return false;
    } 
	else
		return true;
	}
 else 
 return false;
 }
 
?>