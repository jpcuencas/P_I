

////    <a href="javascript:estilo(’Principal’)">Principal</a>   ////


// Código de http://www.w3schools.com/js/js_cookies.asp
function setCookie(c_name, value, expiredays) {
	var exdate = new Date();
	var resp;
		//c_mane=hex_md5(c_name);
	//c_mane=hex_sha1(c_name);
	exdate.setDate(exdate.getDate() + expiredays);
	//codificar(value);
	resp=value;
	document.cookie = c_name + "=" + escape(resp) + ((expiredays == null) ? "" : ";expires="+ exdate.toGMTString());
}
function getCookie(c_name) {
	var resp;
		//c_mane=hex_md5(c_name);
	//c_mane=hex_sha1(c_name);
	if(document.cookie.length > 0) {
		c_start = document.cookie.indexOf(c_name + "=");
		if(c_start != -1) {
			c_start = c_start + c_name.length + 1;
			c_end = document.cookie.indexOf(";", c_start);
			if(c_end == -1)
			{
				c_end = document.cookie.length;
			}
			
			resp=document.cookie.substring(c_start, c_end);
			//decodificar(resp);
			return unescape(resp);
		}
	}
	return "";
}