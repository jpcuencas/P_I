 
 
 
captchaImages=new Array("imagenes/capt-img/capt0.jpg","imagenes/capt-img/capt1.jpg","imagenes/capt-img/capt2.jpg","imagenes/capt-img/capt3.jpg","imagenes/capt-img/capt4.jpg","imagenes/capt-img/capt5.jpg","imagenes/capt-img/capt6.jpg","imagenes/capt-img/capt7.jpg","imagenes/capt-img/capt8.jpg","imagenes/capt-img/capt9.jpg");
/*se le puede pedir al servidor el valor*/
captchaText = new Array("26KCY","CS6T5","SXGPT","G5C6R","5S4UG","RJ28Q","4P3X4","SMWM","TAYNQGM","WVPHNH");
var n1;
    
    
/*Elige la imagen capcha*/
function generaCaptcha() 
{
	
	n1 = parseInt(Math.random()*10);

	document.getElementById('captchaImg').src = captchaImages[n1];   
		
	/*alert ()n1+"<>"+n2+"<>"+n3;*/
}
     
function reFresh() 
{
	location.reload(true);	  
}	

   
function fverificaCapcha(){
	var wcaptcha;
	wcaptcha=document.getElementById('captchaText').value.toUpperCase();
	var respuesta = captchaText[n1];
	if (wcaptcha == respuesta)
	{
		/*alert("Correcto");*/
		return true;
	}
	else
	{
		/*alert("incorrecto");*/
		//funcion msgError(control,texto) para el fallo de capcha
		//document.getElementById('captchaText').focus();
		generaCaptcha();
		//reFresh();//freload();
		return false;
	}
}
/////////////////////////////////////////////////////////
    // Global variable to track current file name.
    var currentFile = "";
		
		
function reproducirsonido()
{
	var sonido="";
	//if(fverificaCapcha())
	//{
	if(idioma=="EN")
	{
		if(navigator.appName.indexOf("Microsoft Internet Explorer") !=-1)
		{
			sonido="capchasonido/ingles/capchamp3/sound_"+ captchaText[n1] +".mp3"
		}
		else
		{
			sonido="capchasonido/ingles/capchawav/sound_"+ captchaText[n1] +".wav"
		}
	}
	else
	{
		if(navigator.appName.indexOf("Microsoft Internet Explorer") !=-1)
		{
			sonido="capchasonido/capchamp3/sound_"+ captchaText[n1] +".mp3"
		}
		else
		{
			sonido="capchasonido/capchawav/sound_"+ captchaText[n1] +".wav"
		}
	}
			
		playAudio(sonido);
	//}
	//else
	//{
		//document.getElementById('captchaText').focus();
		/*alert("capcha incorrecto");*/
		//funcion msgError(control,texto) para el fallo de capcha
		//msgError('captchaText',"No coinciden las letras de validacion");
	//}
}

    function playAudio(sonido) {
		var currentFile;
            // Check for audio element support.
            if (window.HTMLAudioElement) {
                try {
                    var oAudio = document.getElementById('myaudio');
                    var btn = document.getElementById('play'); 
                    var audioURL = sonido; 

                    //Skip loading if current file hasn't changed.
                    if (audioURL.value != currentFile) {
                        oAudio.src = audioURL.value;
                        currentFile = audioURL.value;                       
                    }

                    // Tests the paused attribute and set state. 
                    if (oAudio.paused) {
                        oAudio.play();
                        btn.textContent = "Pause";
                    }
                    else {
                        oAudio.pause();
                        btn.textContent = "Play";
                    }
                }
                catch (e) {
                    // Fail silently but show in F12 developer tools console
                     if(window.console && console.error("Error:" + e));
                }
            }
		}
    
