/*Algoritmos ordenacion-seleccion: burbuja y quickSort*/
/*
*
*ordenamiento por burbuja
*
*/

//var lista =myArr;

//funciones menorque y mayorque
//"<"
/*
function menorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1].childNodes[0].childNodes[0].childNodes[0].substringData(0,myArr[elemento1].childNodes[0].childNodes[0].childNodes[0].length) <= myArr[elemento2].childNodes[0].childNodes[0].childNodes[0].substringData(0,myArr[elemento2].childNodes[0].childNodes[0].childNodes[0].length))
	{
		if(myArr[elemento1].childNodes[3].childNodes[0].substringData(0,myArr[elemento1].childNodes[3].childNodes[0].length) <= myArr[elemento2].childNodes[3].childNodes[0].substringData(0,myArr[elemento2].childNodes[3].childNodes[0].length))
		{
			if(myArr[elemento1].childNodes[4].childNodes[0].substringData(0,myArr[elemento1].childNodes[4].childNodes[0].length) < myArr[elemento2].childNodes[4].childNodes[0].substringData(0,myArr[elemento2].childNodes[4].childNodes[0].length))
			{
				return true;
			}
		}
	}
	}
	return false;
}
*/
//"<"
function menorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] <= myArr[elemento2][0])
	{
		if(myArr[elemento1][2] <= myArr[elemento2][2])
		{
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
/*
function mayorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1].childNodes[0].childNodes[0].childNodes[0].substringData(0,myArr[elemento1].childNodes[0].childNodes[0].childNodes[0].length) >= myArr[elemento2].childNodes[0].childNodes[0].childNodes[0].substringData(0,myArr[elemento2].childNodes[0].childNodes[0].childNodes[0].length))
	{
		if(myArr[elemento1].childNodes[3].childNodes[0].substringData(0,myArr[elemento1].childNodes[3].childNodes[0].length) >= myArr[elemento2].childNodes[3].childNodes[0].substringData(0,myArr[elemento2].childNodes[3].childNodes[0].length))
		{
			if(myArr[elemento1].childNodes[4].childNodes[0].substringData(0,myArr[elemento1].childNodes[4].childNodes[0].length) > myArr[elemento2].childNodes[4].childNodes[0].substringData(0,myArr[elemento2].childNodes[4].childNodes[0].length))
			{
				return true;
			}
		}
	}
	return false;	

	}
}
*/
//">"
function mayorque(myArr,elemento1,elemento2)
{
	if(myArr)
	{
	if(myArr[elemento1][0] >= myArr[elemento2][0])
	{
		if(myArr[elemento1][2] >= myArr[elemento2][2])
		{
			if(myArr[elemento1][3] > myArr[elemento2][3])
			{
				return true;
			}
		}
	}
	return false;	

	}
}
//intercambio
function swap2(myArr,indexOne, indexTwo){
alert("ola"+indexOne);
  //if( indexOne != indexTwo ){
  
	  var tmpVal0 = myArr[indexOne][0];//myArr[indexOne];
  var tmpVal1 = myArr[indexOne][1];//myArr[indexOne];
 var tmpVal2 = myArr[indexOne][2];//myArr[indexOne];
 var tmpVal3 = myArr[indexOne][3];//myArr[indexOne];
 
 alert("val0: "+tmpVal0)
 alert("val1: "+tmpVal1)
 alert("val2: "+tmpVal2)
 alert("val3: "+tmpVal3)
 
	   myArr[indexOne][0] = myArr[indexTwo][0];//myArr[indexTwo];
  myArr[indexOne][1] = myArr[indexTwo][1];//myArr[indexTwo];
  myArr[indexOne][2] = myArr[indexTwo][2];//myArr[indexTwo];
   myArr[indexOne][3] = myArr[indexTwo][3];//myArr[indexTwo];

	 myArr[indexTwo][0] = tmpVal0;
  myArr[indexTwo][1] = tmpVal1;
  myArr[indexTwo][2] = tmpVal2;
   myArr[indexTwo][3] = tmpVal3;

    return myArr;
}
/*
//intercambio
function swap1(myArr,indexOne, indexTwo){
//var myArr1= new Array();
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
  return myArr;
}
*/
/*
*
//ordenacion 1
*La idea tras este algoritmo es que, a cada iteracion por el conjunto, 
*un elemento es llevado hasta su posicion final
*menos eficiente
*/

function bubbleSort(myArr){
  var size = lengloc;//myArr.length;

  for( var pass = 1; pass < size; pass++ ){ // outer loop
    for( var left = 0; left < (size - pass); left++){ // inner loop
      var right = left + 1;
	 // alert(left+"---"+right);
	  //alert( myArr[left][0])
	  //alert( myArr[right][0])
      if(mayorque(myArr,left,right)){
	 // alert(left+"---"+right);
        swap2(left, right);
      }
    }
  }
 
  return myArr;
}

/*
*ordenar por seleccion
*Esta seleccion que da nombre al algoritmo permite tomar un elemento y 
*desplazarlo en un unico movimiento a su posicion definitiva
*
*/
/*
//intercambio
function swap2(myArr,indexOne, indexTwo){
  if( indexOne != indexTwo ){
	  var tmpVal = myArr[indexOne];//myArr[indexOne];
	  myArr[indexOne] = myArr[indexTwo];//myArr[indexTwo];
	  myArr[indexTwo] = tmpVal;
  }
    return myArr;
}

//ordenacion 2
function selectionSort2(myArr){
  var size = lengloc//myArr.length;
  for( var slot = 0; slot < size -1; slot ++ ){ // outer loop
    var smallest = slot;
    for( var check = slot + 1; check < size; check++ ){ // inner loop
      if( menorque(myArr,check,smallest) ){
        smallest = check;
      }
    }
    swap2(smallest, slot );
  }
  return myArr;
}
*/
/*
*
*ordenamiento por insercion
* mas eficiente
*/
/*
function insertionSort2(myArr) {
  var size = myArr.length,
      slot,
      tmp;
 
  for ( var item = 0; item < size; item++ ) { // outer loop     
    tmp = myArr[item];//myArr[item];
    for ( slot = item - 1; slot >= 0 && mayorque(myArr,slot,item); slot-- ){ // inner loop
      myArr[ slot + 1 ] = myArr[slot];
    }
    myArr[ slot + 1 ] = tmp;
  }
  return myArr;
}
*/
/////////////////////////
/**funciones de testeo**/
/////////////////////////
/*
var counter = 0;
 
function bubbleSort1(myArr){
  var size = myArr.length;
  counter = 0;
 
  for( var pass = 1; pass < size; pass++ ){ // outer loop
    for( var left = 0; left < (size - pass); left++){ // inner loop       
      var right = left + 1;
      counter++;
      if( menorque(left,right) ){
        swap2(myArr, left, right);
      }
    }
  }
  console.log('Bubble Sort: ', counter );
  return myArr;
}

 
function selectionSort1( myArr ){
  var size = myArr.length;
  counter = 0;
 
  for( var slot = 0; slot < size -1; slot ++ ){ // outer loop
    var smallest = slot;
    for( var check = slot + 1; check < size; check++ ){ // inner loop
      counter++;
      if( menorque(check,smallest) ){
        smallest = check;
      }
    }
    swap2( myArr, smallest, slot );
  }
  console.info( 'Selection  Sort: ', counter );
  return myArr;
}
 
function insertionSort1( vector ) {
  var innerCounter = 0;
  counter = 0;
  for (var i=1; i < vector.length; i++) {
    var temp = vector[i];
    var j = i-1;
    counter++;
    while (j >= 0 && mayorque(j,i)) {
      innerCounter++;
      vector[j + 1] = vector[j];
      j--;
    }
    vector[j+1] = temp;
  }
  console.info('Insertion Sort: ', innerCounter || counter );
  return vector;
}
*/