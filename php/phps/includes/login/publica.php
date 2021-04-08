<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
<title> Parte publica </title>
</head>
<body>
<h1>Parte Publica de la web</h1>
<hr/>
<div id="menu" class="menu" name="menu">
Opcion 1 | Opcion 2 | Opcion 3
</div>
<?php
if(isset($_GET['e'])
{
$error=$_GET['e'];
switch($error)
{
case 1: echo("<span class=\"ERRORLOG\">Error al inicio de sesion</span>");
case 2: echo("<span class=\"ERRORLOG\">Error usuario y contrase&ntilde;a incorrectos</span>");
default:
 echo("<span class=\"ERRORLOG\">Error inesperado</span>");
}
}

?>

<hr/>
<form name="f1" id="f1" action="login.php" onsubmit="return false;" method="POST">
<label> Usuario: </label>
<input type="text" id="Usu" name="Usu" size="25" maxlength="25"/>
<label> Contrase&ntilde;a: </label>
<input type="text" id="Pwd" name="Pwd" size="25" maxlength="25"/>
<br>
<input type="submit" value="Entrar"/>
</form>
<hr/>
<div id="cuerpo" name="cuerpo" class="cuerpo">
<p> interior de la parte publica para todos </p>
</div>

<div id="pie">
Programacion internet &copyrigth;
</div>
</body>
</html>