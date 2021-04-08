
//validar con expresiones regulares//
function validartexto(cadena)
{
	var cadena2=trim(cadena);
	var cadena1=sqlfiltro1(cadena2)
	return cadena1;
}

/*valida el codigo postal de registro*/
function validarCP(cadena)
{
	if(cadena=="02345")
	{
		cadena="";
	}
	var cadena2=trim(cadena);
	var cadena=sqlfiltro1(cadena2);
	var RegExPattern=/([0-9]{5})/;

	if(cadena!="")
	{
	/*
	if(cadena.length==5){//longitud cadena
		for (var i=0; i<cadena.length; i++)
		{
			var caracter = cadena[i];
			//que sean numeros
			//if(!(caracter<=48&&caracter>=57))
			if(caracter!="0"&&caracter!="1"&&caracter!="2"&&caracter!="3"&&caracter!="4"&&caracter!="5"&&caracter!="6"&&caracter!="7"&&caracter!="8"&&caracter!="9")
			{
				return false;
			}
		}
	}
	return true;
	 }
	 else 
	 return false;
	 */
	if (!(RegExPattern.test(cadena))) {
		//alert("formato de fecha no valido (dd/mm/aaaa)");
		return false;
	}
	
	 }
	 return true;
}

function validarDate(dia,mes,anio)////FUNCIONA MAL
 {
	//var fecha=dia+"/"+mes+"/"+anio;
	var d = new Date();
	var resp=false;
	
	d.setMonth(mes);
	d.setFullYear(anio);
	d.setDate(dia);
	/*
	alert(d.getUTCDate())
	alert(dia)
	alert(d.getUTCMonth())
	alert(mes)
	alert(d.getUTCFullYear())
	alert(anio)
	*/
	//d.format("dd/mm/yyyy");
	//if(fecha.length==10&&((d.getUTCDate()==dia)&&(d.getUTCMonth()==(mes-1))&&(d.getUTCFullYear()==anio)))
	if(fecha.length==10&&((d.getUTCDate()==dia)&&(d.getUTCMonth()==mes)&&(d.getUTCFullYear()==anio)))
	{
		resp=true;
	}
	//else
	//{
		//funcion msgError(control,texto) para cuando la fecha es erronea
		/*alert("Fecha introducida erronea");*/
	//}
	return resp;
 }
 //function validarFechaER(dia,mes,anio)
 function validarFecha(dia,mes,anio)
 {
	var dia1=dia
	var mes1=mes
	var RegExPattern= /^(0?[1-9]|[12][0-9]|3[01])\/(0?[1-9]|1[012])\/[0-9]{2,4}$/; //"/^\d{1,2}\/\d{1,2}\/\d{2,4}$/";

	if(dia<10)
	{
		dia1="0"+dia;
	}
	if(mes<10)
	{
		mes1="0"+mes;
	}
	var fecha=dia1+"/"+mes1+"/"+anio;
	//formar el formato fecha
	if (!(RegExPattern.test(fecha))) {
		alert("formato de fecha no valido (dd/mm/aaaa)");
		
		return false;
	}

	if(esFechaValida(fecha))//validar longitud y fecha
	{
		return true;
	}
	//else
	//{
		//funcion msgError(control,texto) para cuando la fecha es erronea
		/*alert("Fecha introducida erronea");*/
	//}
	return false;
 }
 
//Falta REGISTRO MX
 
 //function validarEmailER(cadena)
 function validarEmail(cadena)
 {
	cadena=sustituirAcento(cadena);
	var Dom="";
	var control=true;
	var control2=true;
	var i=0;
	var RegExPattern = /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/; //"/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/";
	var dominio="";
	var aux="";
	if(cadena=="ejemplo@email.com")
	{
		cadena="";
	}
	cadena=sustituirAcento(cadena);
	cadena=sqlfiltro1(cadena);
	if(cadena.value!="")
	{
	if (!(RegExPattern.test(cadena))) {
	//alert("formato de email no valido (ejemplo@email.com)");
		return false;
	}
	
	return true;
 }
 else 
 return false; 
 } 

 //function validarcontraseniaER(cadena)
 function validarContrasenia(cadena)
 {
	cadena=sustituirAcento(cadena);
	cadena=sqlfiltro1(cadena);
	if(cadena=="")return false;
	if(cadena.value!="")
	{
		var RegExPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;//= /(([a-z]{1,15})([A-Z]{1,15})([a-zA-Z0-9_]*){6,15})$/;
		var RegExPattern2 = /([a-zA-Z0-9_]{6,15}$)/
		if (RegExPattern.test(cadena)) 
		{
			if(RegExPattern2.test(cadena))
				return true;
			else
				return false;
		}
		else 
			return false;
	}
 }
  
  function confirmarContrasenia(cadena1,cadena2)
 {
	var resp=false;
	if(cadena1==cadena2)
	{
		resp=true;
	}
	else
	{
		//funcion msgError(control,texto) para cuando la contraseña no coincide
		/*alert("El campo contraseña debe coincidir");*/
	}
	return resp;
 }
 function validarNombre(cadena)
 {
	if(cadena=="Usuario")
	{
		cadena="";
	}
	if(cadena.value!="")
	{
 	var RegExPattern = /([0-9a-zA-Z]{3,15})$/;
 	  if (!(RegExPattern.test(cadena))) {
        //alert('Password Incorrecta');
		return false;
    } 
	else
		return true;
	}
 else 
 return false;
 }
 
/*
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
*/