<?php
/********************
Windows getmxrr 1.1
By Hamish Milne
bool getmxrr ( string $hostname , array &$mxhosts [, array &$weight ] )

A getmxrr function compatible with Windows.
Exactly the same as it's Linux counterpart.
See the PHP documentation for further info:
	http://www.php.net/getmxrr
Requires:
	nslookup - ie. Windows - with access to 4.2.2.*
	PHP >= 4.0.3
	shell_exec() enabled - ie. safe mode disabled
********************/
/*
function getmxrr($host, &$mx, &$weight=NULL){
	$res=explode("\n",strstr(shell_exec('nslookup -type=mx '.escapeshellarg($host).' 4.2.2.3'),$host));
	if(!isset($res[1])){
		$mx[]=FALSE;
		return FALSE;
	}
	foreach($res as $v){
		$w=explode(' ',$v);
		$mx[]=$w[7];
		if(isset($weight)){
			$weight[]=$w[3]{0};
		}
	}
	unset($mx[count($mx)-1]);
	unset($weight[count($weight)-1]);
	return TRUE;
}
*/
function valida_email($email, $mx = false){  
  if(eregi("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))  
    if($mx){  
      list($username, $domain) = split("@", $email);  
      return getmxrr($domain, $mxrecords);  
    }else  
      return true;  
    else  
  return false;  
}
?>