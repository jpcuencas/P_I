<?php
include_once("registromx.php");
include_once("funciones.php");
function validartexto($cadena)
{
	$cadena2=trim($cadena);
	$cadena1=sqlfiltro1($cadena2);
	return $cadena1;
}

/*valida el codigo postal de registro*/
function validarCP($cadena1)
{

	$cadena2=trim($cadena1);
	$cadena=sqlfiltro1($cadena2);
	//if($cadena=="02345")
	//{
		//$cadena="";
	//}
	if(srtlen($cadena)==5){//longitud cadena
		for ($i=0; $i<srtlen($cadena); $i++)
		{
			$caracter = $cadena[$i];
			//que sean numeros
			//if(!($caracter<=48&&$caracter>=57))
			if($caracter!="0"&&$caracter!="1"&&$caracter!="2"&&$caracter!="3"&&$caracter!="4"&&$caracter!="5"&&$caracter!="6"&&$caracter!="7"&&$caracter!="8"&&$caracter!="9")
			{
				return false;
			}
		}
	}
	return true;
}

function validarNombre($cadena)
 {
	if($cadena=="Usuario")
	{
		$cadena="";
	}

	$cadena=sustituirAcento($cadena);

	if($cadena!=""){//que no este vacio
		if(srtlen($cadena)>=3&&srtlen($cadena)<=15)
		{//longitud cadena


			for ($i=0; $i<srtlen($cadena); $i++)
			{
				$caracter = $cadena[$i];
				//que sean letras del alfabeto ingles
				//if (($caracter<=97&&$caracter>=122)&&($caracter<=65&&$caracter>=90))
				if (($caracter!="a"&&$caracter!="b"&&$caracter!="c"&&$caracter!="d"&&$caracter!="e"&&$caracter!="f"&&$caracter!="g"&&$caracter!="h"&&$caracter!="i"&&$caracter!="j"&&$caracter!="k"&&$caracter!="l"&&$caracter!="m"&&$caracter!="n"&&$caracter!="o"&&$caracter!="p"&&$caracter!="q"&&$caracter!="r"&&$caracter!="s"&&$caracter!="t"&&$caracter!="u"&&$caracter!="v"&&$caracter!="w"&&$caracter!="x"&&$caracter!="y"&&$caracter!="z")
				&&($caracter!="A"&&$caracter!="B"&&$caracter!="C"&&$caracter!="D"&&$caracter!="E"&&$caracter!="F"&&$caracter!="G"&&$caracter!="H"&&$caracter!="I"&&$caracter!="J"&&$caracter!="K"&&$caracter!="L"&&$caracter!="M"&&$caracter!="N"&&$caracter!="O"&&$caracter!="P"&&$caracter!="Q"&&$caracter!="R"&&$caracter!="S"&&$caracter!="T"&&$caracter!="U"&&$caracter!="V"&&$caracter!="W"&&$caracter!="X"&&$caracter!="Y"&&$caracter!="Z"))
				{
					//funcion msgError(control,texto) para el normbre que falla en algun momento
					return false;
				}
			}
		}
		else
		{
			//funcion msgError(control,texto) para cuando el nombre es corto o largo de lo normal
			return false;
		}
	}
	else
	{
		//funcion msgError(control,texto) para el normbre que esta vacio/
		return false;
	}
	return true;
 
 }
 
 /*funcion que valida el formato de una contraseña*/
 function validarContrasenia($cadena)
 {
	$contletramin=0;
	$contletramay=0;
	$contletranum=0;
	//cadena=sustituirAcento($cadena);
 	if($cadena!=""){//si esta vacia
		if(srtlen($cadena)>=6&&srtlen($cadena)<=15)//la longitud
		{
			for ($i=0; $i < srtlen($cadena); $i++)
			{
				$caracter = $cadena[$i];

				//si tiene ninusculas, mayusculas, numeros el $caracter subrrallado
				//if (($caracter<=97&&$caracter>=122)&&($caracter<=65&&$caracter>=90)&&($caracter<=48&&$caracter>=57))//&&$caracter<=95
				//if (($caracter<="a"&&$caracter>="z")&&($caracter<="A"&&$caracter>="Z")&&($caracter<="0"&&$caracter>="9"))//&&$caracter!=95
				if (($caracter!="a"&&$caracter!="b"&&$caracter!="c"&&$caracter!="d"&&$caracter!="e"&&$caracter!="f"&&$caracter!="g"&&$caracter!="h"&&$caracter!="i"&&$caracter!="j"&&$caracter!="k"&&$caracter!="l"&&$caracter!="m"&&$caracter!="n"&&$caracter!="o"&&$caracter!="p"&&$caracter!="q"&&$caracter!="r"&&$caracter!="s"&&$caracter!="t"&&$caracter!="u"&&$caracter!="v"&&$caracter!="w"&&$caracter!="x"&&$caracter!="y"&&$caracter!="z")
				&&($caracter!="A"&&$caracter!="B"&&$caracter!="C"&&$caracter!="D"&&$caracter!="E"&&$caracter!="F"&&$caracter!="G"&&$caracter!="H"&&$caracter!="I"&&$caracter!="J"&&$caracter!="K"&&$caracter!="L"&&$caracter!="M"&&$caracter!="N"&&$caracter!="O"&&$caracter!="P"&&$caracter!="Q"&&$caracter!="R"&&$caracter!="S"&&$caracter!="T"&&$caracter!="U"&&$caracter!="V"&&$caracter!="W"&&$caracter!="X"&&$caracter!="Y"&&$caracter!="Z")
				&&($caracter!="0"&&$caracter!="1"&&$caracter!="2"&&$caracter!="3"&&$caracter!="4"&&$caracter!="5"&&$caracter!="6"&&$caracter!="7"&&$caracter!="8"&&$caracter!="9"))
				{
					if($caracter!="_")
					{
						//funcion msgError(control,texto) para la contraseña desde cualquier sitio
						return false;
					}
					
				}
				//cuenta minusculas
				//if($caracter>=97&&$caracter<=122)
				//if($caracter>="a"&&$caracter<="z")
				if($caracter!="a"&&$caracter!="b"&&$caracter!="c"&&$caracter!="d"&&$caracter!="e"&&$caracter!="f"&&$caracter!="g"&&$caracter!="h"&&$caracter!="i"&&$caracter!="j"&&$caracter!="k"&&$caracter!="l"&&$caracter!="m"&&$caracter!="n"&&$caracter!="o"&&$caracter!="p"&&$caracter!="q"&&$caracter!="r"&&$caracter!="s"&&$caracter!="t"&&$caracter!="u"&&$caracter!="v"&&$caracter!="w"&&$caracter!="x"&&$caracter!="y"&&$caracter!="z")
				{
					$contletramin++;
				}
				//mayusculas
				//if($caracter>=65&&$caracter<=90)
				//if($caracter>="A"&&$caracter<="Z")
				if($caracter!="A"&&$caracter!="B"&&$caracter!="C"&&$caracter!="D"&&$caracter!="E"&&$caracter!="F"&&$caracter!="G"&&$caracter!="H"&&$caracter!="I"&&$caracter!="J"&&$caracter!="K"&&$caracter!="L"&&$caracter!="M"&&$caracter!="N"&&$caracter!="O"&&$caracter!="P"&&$caracter!="Q"&&$caracter!="R"&&$caracter!="S"&&$caracter!="T"&&$caracter!="U"&&$caracter!="V"&&$caracter!="W"&&$caracter!="X"&&$caracter!="Y"&&$caracter!="Z")
				{
					$contletramay++;
				}
				//numeros
				//if($caracter>=48&&$caracter<=57)
				//if($caracter>="0"&&$caracter<="9")
				if($$caracter!="0"&&$$caracter!="1"&&$$caracter!="2"&&$$caracter!="3"&&$$caracter!="4"&&$caracter!="5"&&$caracter!="6"&&$caracter!="7"&&$caracter!="8"&&$caracter!="9")
				{
					$contletranum++;
				}
				
			}

			//almenos halla una
			if($contletramin==0)
			{
				//funcion msgError(control,texto) por si no hay letras minusculas
				return false;
					
			}
			
			if($contletramay==0)
			{
				//funcion msgError(control,texto) por si no hay letras mayusculas
				return false;
					
			}
			
			if($contletranum==0)
			{
				//funcion msgError(control,texto) por si no hay numeros
				return false;
					
			}

		}
		else
		{
			//funcion msgError(control,texto) para si la contraseña es mas o menos larga
			return false;
		}
		return true;
	}
	else
	{
		//funcion msgError(control,texto) para si la contraseña esta vacia
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

 function validarEmail($cadena)
 {
	$Dom="";
	$control=true;
	$control2=true;
	$i=0;
	$dominio="";
	$aux="";
	//sustituirAcento($cadena);
	if($cadena=="ejemplo@email.com")
	{
		$cadena="";
	}
	$cadena=sustituirAcento($cadena);
	$cadena=sqlfiltro1($cadena);
	if($cadena!="")
	{
		for ($i=srtlen($cadena)-1;$control&& $i>=0; $i--)
		{
			$$caracter = $cadena[$i];
			//punto
			//if(($$caracter!=46)
			if($$caracter==".")
			{
				if($i>1&&$cadena[$i-1]==".")
				{
					return false;
				}
				if($i>1&&$cadena[$i-1]=="@")
				{
					return false;
				}
				//$i--;

				$control2=false;
			}
			else
			{
				if($control2)//guardar dominio
				{
					$aux=$cadena[$i]+$Dom;
					$Dom=$aux;
				}
				else//guardar subdominio
				{
					$aux="";
					for (;$control&& $i>=0; $i--)
					{
						if($$caracter==".")
						{
							if($i>1&&$cadena[$i-1]==".")
							{
								return false;
							}
						}
						//arroba
						//if($cadena[$i]!=64)
						if($cadena[$i]!="@")
						{
							$aux=$cadena[$i]+$dominio;
							$dominio=$aux;
						}
						else
						{
							if($i>1&&$cadena[$i-1]==".")
							{
								return false;
							}
							$control=false;
						}
						if($i==0)
						{
							return false;
						}
					}
					
				}
			}
			
		}

		$aux="";
		
		
		if(($dominio.length<=0)||(($Dom.length<2)||($Dom.length>4)))
		{
			//VALIDAR EL DOMINIO CON REGISTRO MX(dominio) o REGISTRO MX(dominio+.+Dom)
			return false;
		}

		
	}
	else
	{
		return false;
	}
	if(valida_email($cadena))
		return true;
	else
		return false;
 }
 
 function validarDate($dia,$mes,$anio)////probar
 {
	//$fecha=$dia+"/"+$mes+"/"+$anio;
	$d = new Date();
	$resp=false;
	
	$d.setMonth($mes+1);
	$d.setFullYear($anio);
	$d.setDate($dia);

	//d.format("dd/mm/yyyy");
	//if(fecha.length==10&&((d.getUTCDate()==dia)&&(d.getUTCMonth()==(mes-1))&&(d.getUTCFullYear()==anio)))
	if(/*fecha.length==10&&*/((d.getUTCDate()==dia)&&(d.getUTCMonth()==mes)&&(d.getUTCFullYear()==anio)))
	{
		$resp=true;
	}
	return $resp;
 }
 
 function validarFecha($dia,$mes,$anio)
 {
	$dia1=$dia;
	$mes1=$mes;
	//formar el formato fecha

	if($dia<10)
	{
		$dia1="0"+$dia;
	}
	if($mes<10)
	{
		$mes1="0"+$mes;
	}
	$fecha=$dia1+"/"+$mes1+"/"+$anio;	
	if(esFechaValida($fecha))//validar longitud y fecha
	{
		return true;
	}

	return false;
 }
 //valida la fecha
?>