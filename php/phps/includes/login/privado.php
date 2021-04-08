<!DOCTYPE html>
<html>
<?php
session_start();

if((!isset($_SESSION["LOGIN"]))&&($_SESSION["LOGIN"]!="OK"))
{
session_destroy();
header("Location: publica.php?e=2");
}
//declarar variables de usuario
?>
<head>
<title> Parte publica </title>
</head>
<body>
<h1>Parte Publica de la web</h1>
<hr/>
<div id="menu" class="menu" name="menu">
Opcion 1 | Opcion 2 | Opcion 3 | Opcion 4 | Opcion 5 | <a href="salir.php"> Salir</a>
</div>
<hr/>
<div id="cuerpo" name="cuerpo" class="cuerpo">
<p> Bienvenido a la parte privada: <? php echo( $_SESSION["NOMUsu"]); ?></p>
</div>

<div id="pie">
Programacion internet &copyrigth;
</div>
</body>
</html>