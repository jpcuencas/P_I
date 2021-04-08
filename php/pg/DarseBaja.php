<?php
	include_once("../phps/includes/web/session.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title> Pictures & Images Vamos a compartir! </title>
<?php
	include_once("../phps/includes/web/cabeceracss.inc.php");
?>
<?php
	include_once("../phps/includes/web/cabecera2js.inc.php");
?>
<script>
if(confirm("Esa seguro de darse de baja"))
{
<?php
	include_once("../phps/includes/DarseBaja.php");
?>
}
</script>
</head>
<body> 
<?php
	if(isset($_POST['BorrarOK']))
	{
		if($_POST['BorrarOK']==true)
		{
			header("Location: Aviso.php?e=28");
		}
		else
		{
			header("Location: Aviso.php?e=29");
		}
	}
?>
</body>
</html>