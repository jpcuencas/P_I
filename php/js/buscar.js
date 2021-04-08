//busqueda lineal o simple
function busquedaSimple(vector,titulo,fecha,pais)
{
	var resultado= new Array();
  var i=0,j=0,encontrado=false;
   while((i<vector.length-1) && !encontrado){
      
       if(igualvalores(vector[i],titulo,fecha,pais))
		{
			resultado[j]=vector[i];
			j++;
	   }
	   i++;
   }
 
}
function igualvalores(elemento,titulo,fecha,pais)
{
	if(elemento[0]==titulo) return true;
	if(elemento[2]==fecha) return true;
	if(elemento[3]==pais) return true;
	return false;
}
//busqueda ordenada (binaria o dicotomica)
function busquedaBinaria(vector,titulo,fecha,pais)
{
	var n= vector.length-1;
   var centro,j=0,inf=0,sup=n-1;
	var resultado= new Array();
   while(inf<=sup){
     centro=(sup+inf)/2;
     if(igualvalores(vector[centro],titulo,fecha,pais))
	 {
		resultado[j]=vector[i];
		j++;
	 }
     else
	 {
		if(menorque1(vector,centro,titulo,fecha,pais)){
			sup=centro-1;
		 }
		 else {
		   inf=centro+1;
		 }
	 }
   }
   return resultado;
}

function menorque1(myArr,indice,titulo,fecha,pais)
{
	if(myArr)
	{
		if(myArr[indice][0] <= titulo)
		{
			if(myArr[indice][0] < titulo)return true;
			if(myArr[elemento1][2] <= fecha)
			{
				if(myArr[indice][2] < fecha)return true;
				if(myArr[indice][3] < pais)
				{
					return true;
				}
			}
		}
		return false;	

	}
}