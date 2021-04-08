function ordena1(vector,dato)
{
	switch(dato)
	{
		case "fch":
		return ordenarfch1(vector);
		break;
		case "pas":
		return ordenarpas1(vector);
		break;
		default:
		return ordenartit1(vector);
	}

}
function ordena2(vector,dato)
{
	var dato=document.getElementById("ordenarpor").value;
	switch(dato)
	{
		case "fch":
		return ordenarfch2(vector);
		break;
		case "pas":
		return ordenarpas2(vector);
		break;
		default:
		return ordenartit2(vector);
	}

}
function ordenarfch1(vector)
{
	return directa12(vector);
}
function ordenartit1(vector)
{
	return directa11(vector);
}
function ordenarpas1(vector)
{
	return directa13(vector);
}
function ordenarfch2(vector)
{
	return directa22(vector);
}
function ordenartit2(vector)
{
	return directa21(vector);
}
function ordenarpas2(vector)
{
	return directa23(vector);
}
//por mezcla merge sort
function mergesort1(vector)
{
	var n=lengloc;
	vector=mezcla1(vector,n);
	return vector;
}
function mezcla1(vector,n)
{
	var n1=0,n2=0;
	var x=0,y=0;	
	var temp1 = new Array();
	var temp2 = new Array();
	if(n>1)
	{
		if(n%2==0)
		{
			n1=parseInt(n/2);//(int)n/2;
			n2=n1;//(int)n/2;
		}
		else
		{
			n1=parseInt(n/2);//(int)n/2;
			n2=n1+1;
		}
		for(x=0;x<n1;x++)
		{
			temp1[x]=vector[x];
		}
		for(y=0;y<n2;y++)
		{
			temp2[y]=vector[x];
		}
		temp1=mezcla1(temp1,n1);
		temp2=mezcla1(temp2,n2);
		vector=mezclar1(temp1,n1,temp2,n2,vector);
	
	}
	return vector;
}
function mergesort2(vector)
{
	var n=lengloc;
	vector=mezcla2(vector,n);
	return vector;
}
function mezcla2(vector,n)
{
	var n1=0,n2=0,x=0;	
	var temp1 = new Array();
	var temp2 = new Array();
	if(n>1)
	{
		if(n%2==0)
		{
			n1=parseInt(n/2);//(int)n/2;
			n2=n1//(int)n/2;
		}
		else
		{
			n1=parseInt(n/2);//(int)n/2;
			n2=n1+1;
		}
		for(x=0;x<n1;x++)
		{
			temp1[x]=vector[x];
		}
		for(var y=0;y<n2;y++)
		{
			temp2[y]=vector[x];
		}
		temp1=mezcla2(temp1,n1);
		temp2=mezcla2(temp2,n2);
		vector=mezclar2(temp1,n1,temp2,n2);
	
	}
}
///////////////////////////////////////////////
function menorque2(elemento1,elemento2)
{
	if(elemento1[0] <= elemento2[0])
	{
		if(elemento1[0] < elemento2[0])return true;
		if(elemento1[2] <= elemento2[2])
		{
			if(elemento1[2] < elemento2[2])return true;
			if(elemento1[3] < elemento2[3])
			{
				return true;
			}
		}
	}
	return false;	
}
function mayorque2(elemento1,elemento2)
{
	if(elemento1[0] >= elemento2[0])
	{
		if(elemento1[0] > elemento2[0])return true;
		if(elemento1[2] >= elemento2[2])
		{
			if(elemento1[2] > elemento2[2])return true;
			if(elemento1[3] > elemento2[3])
			{
				return true;
			}
		}
	}
	return false;	
}
function igualar3(elemento2)
{
	var elemento1= new Array();
	  elemento1[0] = elemento2[0];
	  elemento1[1] = elemento2[1];
	  elemento1[2] = elemento2[2];
	  elemento1[3] = elemento2[3];
	  return elemento1;
}
function  mezclar1( temp1,n1,temp2,n2,vector)
{

	var x1=0,x2=0,x3=0;
	while(x1<n1&&x2<n2)
	{
		if(menorque2(temp1[x1],temp2[x2]))
		{
			vector[x3]=igualar3(temp1[x1]);
			x1++;
		}
		else
		{
			vector[x3]=igualar3(temp2[x2]);
			x2++;
		}
		x3++;
	}

	while(x1<n1)
	{
		vector[x3]=igualar3(temp1[x1]);
		x1++;
		x3++;
	}

	while(x2<n2)
	{
		vector[x3]=igualar3(temp2[x2]);
		x2++;
		x3++;
	}

	return vector;
}

function  mezclar2( temp1,n1,temp2,n2,vector)
{

	var x1=0,x2=0,x3=0;
	while(x1<n1&&x2<n2)
	{
		if(mayorque2(temp1[x1],temp2[x2]))
		{
			vector[x3]=igualar3(temp1[x1]);
			x1++;
		}
		else
		{
			vector[x3]=igualar3(temp2[x2]);
			x2++;
		}
		x3++;
	}

	while(x1<n1)
	{
		vector[x3]=igualar3(temp1[x1]);
		x1++;
		x3++;
	}

	while(x2<n2)
	{
		vector[x3]=igualar3(temp2[x2]);
		x2++;
		x3++;
	}

	return vector;
}
////////////////////////////////////////////////
//por insercion insertion sort
function insercion1(vector)
{

   var i, j, indice;
 
   for (i=1; i < lengloc; i++) 
   {
      indice = igualar3(vector[i]);
 
      for (j=i-1;j >= 0 && mayorque4(vector[j],indice);j--) 
      {
         vector[j + 1] = igualar3(vector[j]);
      }
      vector[j+1] = igualar3(indice);
 
   }
	return vector;
}

function insercion2(vector)
{

   var i, j, indice;
 
   for (i=1; i < lengloc; i++) 
   {
      indice = igualar3(vector[i]);
 
      for (j=i-1;j >= 0 && menorque4(vector[j],indice);j--) 
      {
         vector[j + 1] = igualar3(vector[j]);
      }
      vector[j+1] = igualar3(indice);
 
   }
	return vector;
}
////////////////////////////////////////////////
function igualar2(myArr,indexOne,element)
{
   myArr[indexOne][0] = element[0];//myArr[indexTwo];
  myArr[indexOne][1] = element[1];//myArr[indexTwo];
  myArr[indexOne][2] = element[2];//myArr[indexTwo];
   myArr[indexOne][3] = element[3];//myArr[indexTwo];

return myArr;
}

function igualar1(myArr,indexOne,indexTwo)
{
   myArr[indexOne][0] = myArr[indexTwo][0];//myArr[indexTwo];
  myArr[indexOne][1] = myArr[indexTwo][1];//myArr[indexTwo];
  myArr[indexOne][2] = myArr[indexTwo][2];//myArr[indexTwo];
   myArr[indexOne][3] = myArr[indexTwo][3];//myArr[indexTwo];

return myArr;
}
//////////////////////////////////////////////////////
//ordenacion por burbuja
function burbuja1(vector)
{

	for(var i=1; i<lengloc-1;i++)
	{
		for(var x =lengloc-2; x>=i;x--)
		{
			if(menorque(vector,x,x-1))
			{
				vector=swap2(vector,x,x-1);
			}
		}
	}
	return vector;
}
function burbuja2(vector)
{

	for(var i=1; i<lengloc-1;i++)
	{
		for(var x =lengloc-2; x>=i;x--)
		{
			if(mayorque(vector,x,x-1))
			{
				vector=swap2(vector,x,x-1);
			}
		}
	}
	return vector;
}
///////////////////////////////////////////////////TITULO
//funcion insercion directa

function directa11(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   //alert("vuelta "+i);
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( mayorquetit(vector,menor,j)) menor = j;
		  
		  //mostrar(vector)
		  //alert("fin vector elemento->"+j)
		
	   }
	
	   vector=swap2(vector,i,menor);
	/*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
function directa21(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( menorquetit(vector,menor,j)) menor = j;
	   }
	    vector=swap2(vector,i,menor);
	   /*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
///////////////////////////////////////////////////
//funcion insercion directa

function directa12(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   //alert("vuelta "+i);
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( mayorquefch(vector,menor,j)) menor = j;
		  
		  //mostrar(vector)
		  //alert("fin vector elemento->"+j)
		
	   }
	
	   vector=swap2(vector,i,menor);
	/*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
function directa22(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( menorquefch(vector,menor,j)) menor = j;
	   }
	    vector=swap2(vector,i,menor);
	   /*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
///////////////////////////////////////////////////
//funcion insercion directa
function mostrar(vector)
{
for(var i=0 ; i<lengloc-1 ; i++)
	{
		alert(vector[i][0]);
	}
}
function directa13(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   //alert("vuelta "+i);
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( mayorquepas(vector,menor,j)) menor = j;
		  
		  //mostrar(vector)
		  //alert("fin vector elemento->"+j)
		
	   }
	
	   vector=swap2(vector,i,menor);
	/*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
function directa23(vector)
{
	
	for(var i=0 ; i<lengloc-1 ; i++)
	{
	   var menor = i;
	   
	   for(var j=i+1 ; j<lengloc ; j++)
	   {
		
		  if ( menorquepas(vector,menor,j)) menor = j;
	   }
	    vector=swap2(vector,i,menor);
	   /*
	   var temp =vector[menor];

	   vector[menor] = vector[i];
	   vector[i] = temp;
	   */
	}
	return vector;
}
/////////////////////////////////////////

//funciones menorque y mayorque
//"<"
function menorque4(elemento1,elemento2)
{
		if(elemento1[0] <= elemento2[0])
		{
			if(elemento1[0] < elemento2[0])return true;
			if(elemento1[2] <= elemento2[2])
			{
				if(elemento1[2] < elemento2[2])return true;
				if(elemento1[3] < elemento2[3])
				{
					return true;
				}
			}
		}
		return false;	

	}

function mayorque4(elemento1,elemento2)
{
		if(elemento1[0] >= elemento2[0])
		{
			if(elemento1[0] > elemento2[0])return true;
			if(elemento1[2] >= elemento2[2])
			{
				if(elemento1[2] > elemento2[2])return true;
				if(elemento1[3] > elemento2[3])
				{
					return true;
				}
			}
		}
		return false;	

	}


function menorque1(myArr,elemento1,elemento2)
{
	if(myArr)
	{
		if(myArr[elemento1][0] <= elemento2[0])
		{
			if(myArr[elemento1][0] < elemento2[0])return true;
			if(myArr[elemento1][2] <= elemento2[2])
			{
				if(myArr[elemento1][2] < elemento2[2])return true;
				if(myArr[elemento1][3] < elemento2[3])
				{
					return true;
				}
			}
		}
		return false;	

	}
}
//"<"
function menorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] <= myArr[elemento2][0])
	{
		if(myArr[elemento1][0] < myArr[elemento2][0])return true;
		if(myArr[elemento1][2] <= myArr[elemento2][2])
		{
			if(myArr[elemento1][2] < myArr[elemento2][2])return true;
			if(myArr[elemento1][3] < myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//">"
function mayorque1(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] >= elemento2[0])
	{
		if(myArr[elemento1][0] > elemento2[0])return true;
		if(myArr[elemento1][2] >= elemento2[2])
		{
			if(myArr[elemento1][2] > elemento2[2])return true;
			if(myArr[elemento1][3] > elemento2[3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//">"
function mayorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] >= myArr[elemento2][0])
	{
		if(myArr[elemento1][0] > myArr[elemento2][0])return true;
		if(myArr[elemento1][2] >= myArr[elemento2][2])
		{
			if(myArr[elemento1][2] > myArr[elemento2][2])return true;
			if(myArr[elemento1][3] > myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
///////////////////////////////////////
//">"
function mayorquetit(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] >= myArr[elemento2][0])
	{
		if(myArr[elemento1][0] > myArr[elemento2][0])return true;
		if(myArr[elemento1][2] >= myArr[elemento2][2])
		{
			if(myArr[elemento1][2] > myArr[elemento2][2])return true;
			if(myArr[elemento1][3] > myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//">"
function mayorquefch(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][2] >= myArr[elemento2][2])
	{
		if(myArr[elemento1][2] > myArr[elemento2][2])return true;
		if(myArr[elemento1][0] >= myArr[elemento2][0])
		{
			if(myArr[elemento1][0] > myArr[elemento2][0])return true;
			if(myArr[elemento1][3] > myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//">"
function mayorquepas(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][3] >= myArr[elemento2][3])
	{
		if(myArr[elemento1][3] > myArr[elemento2][3])return true;
		if(myArr[elemento1][0] >= myArr[elemento2][0])
		{
			if(myArr[elemento1][0] > myArr[elemento2][0])return true;
			if(myArr[elemento1][2] > myArr[elemento2][2])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
////////////////////////////////////////
//"<"
function menorquetit(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] <= myArr[elemento2][0])
	{
		if(myArr[elemento1][0] < myArr[elemento2][0])return true;
		if(myArr[elemento1][2] <= myArr[elemento2][2])
		{
			if(myArr[elemento1][2] < myArr[elemento2][2])return true;
			if(myArr[elemento1][3] < myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//"<"
function menorquefch(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][2] <= myArr[elemento2][2])
	{
		if(myArr[elemento1][2] < myArr[elemento2][2])return true;
		if(myArr[elemento1][0] <= myArr[elemento2][0])
		{
			if(myArr[elemento1][0] < myArr[elemento2][0])return true;
			if(myArr[elemento1][3] < myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//"<"
function menorquepas(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][3] <= myArr[elemento2][3])
	{
		if(myArr[elemento1][3] < myArr[elemento2][3])return true;
		if(myArr[elemento1][0] <= myArr[elemento2][0])
		{
			if(myArr[elemento1][0] < myArr[elemento2][0])return true;
			if(myArr[elemento1][2] < myArr[elemento2][2])
			{
				return true;
			}
		}
	}
	return false;	

	}
}


////////////////////////////////////////
//intercambio
function swap2(myArr,indexOne, indexTwo)
{
  if( indexOne != indexTwo ){
  
	var tmpVal0 = myArr[indexOne][0];//myArr[indexOne];
	var tmpVal1 = myArr[indexOne][1];//myArr[indexOne];
	var tmpVal2 = myArr[indexOne][2];//myArr[indexOne];
	var tmpVal3 = myArr[indexOne][3];//myArr[indexOne];
 
	myArr[indexOne][0] = myArr[indexTwo][0];//myArr[indexTwo];
	myArr[indexOne][1] = myArr[indexTwo][1];//myArr[indexTwo];
	myArr[indexOne][2] = myArr[indexTwo][2];//myArr[indexTwo];
	myArr[indexOne][3] = myArr[indexTwo][3];//myArr[indexTwo];

	myArr[indexTwo][0] = tmpVal0;
	myArr[indexTwo][1] = tmpVal1;
	myArr[indexTwo][2] = tmpVal2;
	myArr[indexTwo][3] = tmpVal3;
	}
    return myArr;
}

function swap3(myArr,indexOne, vec){

  //if( indexOne != indexTwo ){
  
	var tmpVal0 = myArr[indexOne][0];//myArr[indexOne];
	var tmpVal1 = myArr[indexOne][1];//myArr[indexOne];
	var tmpVal2 = myArr[indexOne][2];//myArr[indexOne];
	var tmpVal3 = myArr[indexOne][3];//myArr[indexOne];
 
	myArr[indexOne][0] =vec[0];//myArr[indexTwo];
    myArr[indexOne][1] = vec[1];//myArr[indexTwo];
    myArr[indexOne][2] = vec[2];//myArr[indexTwo];
    myArr[indexOne][3] = vec[3];//myArr[indexTwo];

	vec[0] = tmpVal0;
	vec[1] = tmpVal1;
	vec[2] = tmpVal2;
    vec[3] = tmpVal3;

    return myArr;
}
