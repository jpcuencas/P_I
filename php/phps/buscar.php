<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");
//busqueda lineal o simple
function busquedaSimple($vector,$titulo,$fecha,$pais)
{
	$resultado= array();
  $i=0;
  $j=0;
  $encontrado=false;
   while(($i<$vector.length-1) && !$encontrado){
      
       if(igualvalores($vector[$i],$titulo,$fecha,$pais))
		{
			$resultado[$j]=$vector[$i];
			$j++;
	   }
	   $i++;
   }
 
}
function igualvalores($elemento,$titulo,$fecha,$pais)
{
	if($elemento[0]==$titulo) return true;
	if($elemento[2]==$fecha) return true;
	if($elemento[3]==$pais) return true;
	return false;
}
//busqueda ordenada (binaria o dicotomica)
function busquedaBinaria($vector,$titulo,$fecha,$pais)
{
	$n= $vector.length-1;
	$centro;
	$j=0;
	$inf=0;
	$sup=$n-1;
	$resultado= array();
   while($inf<=$sup){
     $centro=($sup+$inf)/2;
     if(igualvalores($vector[$centro],$titulo,$fecha,$pais))
	 {
		$resultado[$j]=$vector[$i];
		$j++;
	 }
     else
	 {
		if(menorque1($vector,$centro,$titulo,$fecha,$pais)){
			$sup=$centro-1;
		 }
		 else {
		   $inf=$centro+1;
		 }
	 }
   }
   return $resultado;
}

function menorque1($myArr,$indice,$titulo,$fecha,$pais)
{
	if($myArr)
	{
		if($myArr[$indice][0] <= $titulo)
		{
			if($myArr[$indice][0] < $titulo)return true;
			if($myArr[$elemento1][2] <= $fecha)
			{
				if($myArr[$indice][2] < $fecha)return true;
				if($myArr[$indice][3] < $pais)
				{
					return true;
				}
			}
		}
		return false;	

	}
}
?>