<?php
//include_once("funcionesValidarER.php");
include_once("funcionesValidar.php");
include_once("funciones.php");

$produccion=false;

	$usuario=(isset($_POST['rUsu']) ? $_POST['rUsu']:"");
	
	$contrasenia=(isset($_POST['rPWD']) ? $_POST['rPWD']:"");
	$contrasenia2=(isset($_POST['rPWD2']) ? $_POST['rPWD2']:"");
	$Email=(isset($_POST['rEmail']) ? $_POST['rEmail']:"");
	//var dia=(isset($_POST['rFdia']) ? $_POST['bFdia']:"");
	//var mes=(isset($_POST['rFmes']) ? $_POST['bFdia']:"");
	//var anio=(isset($_POST['rFanio']) ? $_POST['bFdia']:"");
	$dia=(isset($_POST['rFdia']) ? $_POST['bFdia']:"");
	$mes=(isset($_POST['rFmes']) ? $_POST['bFmes']:"");
	$anio=(isset($_POST['rFanio']) ? $_POST['bFanio']:"");
	$rPais=(isset($_POST['rPais']) ? $_POST['rPais']:"");
		$rPop=(isset($_POST['rPop']) ? $_POST['rPop']:"");
	$CP=(isset($_POST['rCP']) ? $_POST['rCP']:"");
		$rGenero=(isset($_POST['rGenero']) ? $_POST['rGenero']:"");
		$rCondicion=(isset($_POST['rCondicion']) ? $_POST['rCondicion']:"");
	$rPais=sustituirAcento($rPais);
	$rPop=sustituirAcento($rPop);
	$fotoregistro=(isset($_POST['fotoregistro']) ? $_POST['fotoregistro']:"");
	$registro="FAIL";
//if($fotoregistro=!"")
//{
	if(validarNombre($usuario))
	{
		if(validarContrasenia($contrasenia))
		{
			if(confirmarContrasenia($contrasenia,$contrasenia2))
			{
				if(validarEmail($Email))
				{
					//if(fEsVacio($rGenero))
					//{
						if(validarFecha($dia,$mes,$anio))
						{
							if(validarCP($CP))
							{
								//if(feligeCapcha())
								//{
									if($rCondicion== true)
									{

										//REGISTRO CORRECTO
										$_SESSION["regisro"]="OK";
										print_r($usuario,$produccion);
										print_r($contrasenia,$produccion);
										print_r($contrasenia2,$produccion);
										print_r($Email,$produccion);
										print_r($dia,$produccion);
										print_r($mes,$produccion);
										print_r($anio,$produccion);
										print_r($CP,$produccion);
										print_r($rCondicion,$produccion);
										
										include_once("phps/includes/Registrophp.php");
										
									}
								//}
								//else
								//{
									//funcion msgError(control,texto) para el fallo de capcha
									//msgError('captchaText',"No coinciden las letras de validacion");
									
								//}
							}
							else
							{
								//funcion msgError(control,texto) para el codigo postal en registro
								//msgError('rCP',"Codigo postal no valido");
							}
						}
						else
						{
							//funcion msgError(control,texto) para la fecha de nacimiento en registro
							//msgError('rFdia',"Fecha incorrecta");
						}
					//}
					//else
					//{
						//funcion msgError(control,texto) al seleccionar el genero en registro
						//msgError('rGenero',"Debe seleccionar genero");
					//}
				}
				else
				{
					//funcion msgError(control,texto) para el email en registro
					//msgError('rEmail',"No es un Email valido");
				}
			}
			else
			{
				//funcion msgError(control,texto) para la contraseña porque no coinciden en registro
				//msgError('rPWD2',"Las Contraseñas no coinciden");
			}
		}
		else
		{
			//funcion msgError(control,texto) para la contraseña en registro
			//msgError('rPWD',"No es una contraseña valida");
		}
	}
	else
	{
		//funcion msgError(control,texto) para el normbre de usuario en registro
		//msgError('rUsu',"No es un nombre valida");
	}
//}
//else
//{
	//funcion msgError(control,texto) para la seleccion la foto en foto
	//msgError('fotoregistro',"Debe selecionar una foto");
//}

?>