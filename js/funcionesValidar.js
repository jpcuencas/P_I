function validartexto(cadena)
{
	var cadena2=trim(cadena);
	var cadena1=sqlfiltro1(cadena2)
	return cadena1;
}

/*valida el codigo postal de registro*/
function validarCP(cadena1)
{
	//if(cadena=="02345")
	//{
		//cadena="";
	//}
	var cadena2=trim(cadena1);
	var cadena=sqlfiltro1(cadena2);
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

function validarNombre(cadena)
 {
	if(cadena=="Usuario")
	{
		cadena="";
	}

	cadena=sustituirAcento(cadena);

	if(cadena.value!=""){//que no este vacio
		if(cadena.length>=3&&cadena.length<=15)
		{//longitud cadena


			for (var i=0; i<cadena.length; i++)
			{
				var caracter = cadena[i];
				//que sean letras del alfabeto ingles
				//if ((caracter<=97&&caracter>=122)&&(caracter<=65&&caracter>=90))
				if ((caracter!="a"&&caracter!="b"&&caracter!="c"&&caracter!="d"&&caracter!="e"&&caracter!="f"&&caracter!="g"&&caracter!="h"&&caracter!="i"&&caracter!="j"&&caracter!="k"&&caracter!="l"&&caracter!="m"&&caracter!="n"&&caracter!="o"&&caracter!="p"&&caracter!="q"&&caracter!="r"&&caracter!="s"&&caracter!="t"&&caracter!="u"&&caracter!="v"&&caracter!="w"&&caracter!="x"&&caracter!="y"&&caracter!="z")
				&&(caracter!="A"&&caracter!="B"&&caracter!="C"&&caracter!="D"&&caracter!="E"&&caracter!="F"&&caracter!="G"&&caracter!="H"&&caracter!="I"&&caracter!="J"&&caracter!="K"&&caracter!="L"&&caracter!="M"&&caracter!="N"&&caracter!="O"&&caracter!="P"&&caracter!="Q"&&caracter!="R"&&caracter!="S"&&caracter!="T"&&caracter!="U"&&caracter!="V"&&caracter!="W"&&caracter!="X"&&caracter!="Y"&&caracter!="Z"))
				{
					//funcion msgError(control,texto) para el normbre que falla en algun momento
					/*alert("El Nombre no puede contener números o caracteres extraños");*/
					return false;
				}
			}
		}
		else
		{
			//funcion msgError(control,texto) para cuando el nombre es corto o largo de lo normal
			/*alert("El Nombre tiene longitud mínima 3 caracteres y máxima 15");*/
			return false;
		}
	}
	else
	{
		//funcion msgError(control,texto) para el normbre que esta vacio
		/*alert("El campo Nombre no puede estar vacio");*/
		return false;
	}
	return true;
 
 }
 
 /*funcion que valida el formato de una contraseña*/
 function validarContrasenia(cadena)
 {
	var contletramin=0;
	var contletramay=0;
	var contletranum=0;
	//cadena=sustituirAcento(cadena);
 	if(cadena.value!=""){//si esta vacia
		if(cadena.length>=6&&cadena.length<=15)//la longitud
		{
			for (var i=0; i < cadena.length; i++)
			{
				var caracter = cadena[i];

				//si tiene ninusculas, mayusculas, numeros el caracter subrrallado
				//if ((caracter<=97&&caracter>=122)&&(caracter<=65&&caracter>=90)&&(caracter<=48&&caracter>=57))//&&caracter<=95
				//if ((caracter<="a"&&caracter>="z")&&(caracter<="A"&&caracter>="Z")&&(caracter<="0"&&caracter>="9"))//&&caracter!=95
				if ((caracter!="a"&&caracter!="b"&&caracter!="c"&&caracter!="d"&&caracter!="e"&&caracter!="f"&&caracter!="g"&&caracter!="h"&&caracter!="i"&&caracter!="j"&&caracter!="k"&&caracter!="l"&&caracter!="m"&&caracter!="n"&&caracter!="o"&&caracter!="p"&&caracter!="q"&&caracter!="r"&&caracter!="s"&&caracter!="t"&&caracter!="u"&&caracter!="v"&&caracter!="w"&&caracter!="x"&&caracter!="y"&&caracter!="z")
				&&(caracter!="A"&&caracter!="B"&&caracter!="C"&&caracter!="D"&&caracter!="E"&&caracter!="F"&&caracter!="G"&&caracter!="H"&&caracter!="I"&&caracter!="J"&&caracter!="K"&&caracter!="L"&&caracter!="M"&&caracter!="N"&&caracter!="O"&&caracter!="P"&&caracter!="Q"&&caracter!="R"&&caracter!="S"&&caracter!="T"&&caracter!="U"&&caracter!="V"&&caracter!="W"&&caracter!="X"&&caracter!="Y"&&caracter!="Z")
				&&(caracter!="0"&&caracter!="1"&&caracter!="2"&&caracter!="3"&&caracter!="4"&&caracter!="5"&&caracter!="6"&&caracter!="7"&&caracter!="8"&&caracter!="9"))
				{
					if(caracter!="_")
					{
						//funcion msgError(control,texto) para la contraseña desde cualquier sitio
						/*alert("La contraseña debe contener números, letras o subrrallado ( _ ) exclusivamente");*/
						return false;
					}
					
				}
				//cuenta minusculas
				//if(caracter>=97&&caracter<=122)
				//if(caracter>="a"&&caracter<="z")
				if(caracter!="a"&&caracter!="b"&&caracter!="c"&&caracter!="d"&&caracter!="e"&&caracter!="f"&&caracter!="g"&&caracter!="h"&&caracter!="i"&&caracter!="j"&&caracter!="k"&&caracter!="l"&&caracter!="m"&&caracter!="n"&&caracter!="o"&&caracter!="p"&&caracter!="q"&&caracter!="r"&&caracter!="s"&&caracter!="t"&&caracter!="u"&&caracter!="v"&&caracter!="w"&&caracter!="x"&&caracter!="y"&&caracter!="z")
				{
					contletramin++;
				}
				//mayusculas
				//if(caracter>=65&&caracter<=90)
				//if(caracter>="A"&&caracter<="Z")
				if(caracter!="A"&&caracter!="B"&&caracter!="C"&&caracter!="D"&&caracter!="E"&&caracter!="F"&&caracter!="G"&&caracter!="H"&&caracter!="I"&&caracter!="J"&&caracter!="K"&&caracter!="L"&&caracter!="M"&&caracter!="N"&&caracter!="O"&&caracter!="P"&&caracter!="Q"&&caracter!="R"&&caracter!="S"&&caracter!="T"&&caracter!="U"&&caracter!="V"&&caracter!="W"&&caracter!="X"&&caracter!="Y"&&caracter!="Z")
				{
					contletramay++;
				}
				//numeros
				//if(caracter>=48&&caracter<=57)
				//if(caracter>="0"&&caracter<="9")
				if(caracter!="0"&&caracter!="1"&&caracter!="2"&&caracter!="3"&&caracter!="4"&&caracter!="5"&&caracter!="6"&&caracter!="7"&&caracter!="8"&&caracter!="9")
				{
					contletranum++;
				}
				
			}

			//almenos halla una
			if(contletramin==0)
			{
				//funcion msgError(control,texto) por si no hay letras minusculas
				/*alert("La contraseña debe contener al menos una letra minuscula");*/
				return false;
					
			}
			
			if(contletramay==0)
			{
				//funcion msgError(control,texto) por si no hay letras mayusculas
				/*alert("La contraseña debe contener al menos una letra mayuscula");*/
				return false;
					
			}
			
			if(contletranum==0)
			{
				//funcion msgError(control,texto) por si no hay numeros
				/*alert("La contraseña debe contener al menos un número");*/
				return false;
					
			}

		}
		else
		{
			//funcion msgError(control,texto) para si la contraseña es mas o menos larga
			/*alert("La contraseña debe tener longitud mínima 6 caracteres y máxima 15");*/
			return false;
		}
		return true;
	}
	else
	{
		//funcion msgError(control,texto) para si la contraseña esta vacia
		/*alert("El campo contraseña no puede estar vacio");*/
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
 
 //Falta REGISTRO MX
 
 function validarEmail(cadena)
 {
	var Dom="";
	var control=true;
	var control2=true;
	var i=0;
	var dominio="";
	var aux="";
	//sustituirAcento(cadena);
	if(cadena=="ejemplo@email.com")
	{
		cadena="";
	}
	cadena=sustituirAcento(cadena);
	cadena=sqlfiltro1(cadena);
	//alert(cadena)
	if(cadena!="")
	{
		for (i=cadena.length-1;control&& i>=0; i--)
		{
			var caracter = cadena[i];
			//punto
			//if((caracter!=46)
			if(caracter==".")
			{
				if(i>1&&cadena[i-1]==".")
				{
					return false;
				}
				if(i>1&&cadena[i-1]=="@")
				{
					return false;
				}
				//i--;

				control2=false;
			}
			else
			{
				if(control2)//guardar dominio
				{
					aux=cadena[i]+Dom;
					Dom=aux;
				}
				else//guardar subdominio
				{
					aux="";
					for (;control&& i>=0; i--)
					{
						if(caracter==".")
						{
							if(i>1&&cadena[i-1]==".")
							{
								return false;
							}
						}
						//arroba
						//if(cadena[i]!=64)
						if(cadena[i]!="@")
						{
							aux=cadena[i]+dominio;
							dominio=aux;
						}
						else
						{
							if(i>1&&cadena[i-1]==".")
							{
								return false;
							}
							control=false;
						}
						if(i==0)
						{
							return false;
						}
					}
					
				}
			}
			
		}

		aux="";
		
		//alert(dominio);
		//alert(Dom);
		
		if((dominio.length<=0)||((Dom.length<2)||(Dom.length>4)))
		{
			//VALIDAR EL DOMINIO CON REGISTRO MX(dominio) o REGISTRO MX(dominio+.+Dom)
			//funcion msgError(control,texto) para cuando el email no es correcto
			//alert("El campo Email no es correcto");
			return false;
		}

		
	}
	else
	{
		//funcion msgError(control,texto) para cuando el email esta vacio
		/*alert("El campo Email no puede estar vacio");*/
		return false;
	}
	return true;
 }
 
 function validarDate(dia,mes,anio)////probar
 {
	//var fecha=dia+"/"+mes+"/"+anio;
	var d = new Date();
	var resp=false;
	
	d.setMonth(mes+1);
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
	if(/*fecha.length==10&&*/((d.getUTCDate()==dia)&&(d.getUTCMonth()==mes)&&(d.getUTCFullYear()==anio)))
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
 
 function validarFecha(dia,mes,anio)
 {
	var dia1=dia
	var mes1=mes
	//formar el formato fecha

	if(dia<10)
	{
		dia1="0"+dia;
	}
	if(mes<10)
	{
		mes1="0"+mes;
	}
	var fecha=dia1+"/"+mes1+"/"+anio;
	//alert(fecha);
	
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
 //valida la fecha

