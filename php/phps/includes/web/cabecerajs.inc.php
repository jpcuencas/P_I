
<!--Definir el lenguaje por defecto de la paguina-->
<!--<meta http-equiv="Content-Script-Type" content="text/javascript"/>-->

<script type="text/javascript" src="js/styleswitcher.js" charset="utf-8"></script>
<!--<script type="text/javascript" src="js/prueba.js" charset="utf-8"></script>-->

<script type="text/javascript" src="js/castellano.js" charset="utf-8"></script>
<script type="text/javascript" src="js/funciones.js" charset="utf-8"></script>
<script type="text/javascript" src="js/cookies.js" charset="utf-8"></script>

<script type="text/javascript" src="js/funcionesValidar.js" charset="utf-8"></script>
<!--
<script type="text/javascript" src="js/fincionesValidarER.js" charset="utf-8"></script>
-->
<!--<script type="text/javascript" src="js/cookies.js" charset="utf-8"></script>-->
<script type="text/javascript" src="js/base_64.js" charset="utf-8"></script>

<?php
if((!isset($_SESSION)) and (!isset($_SESSION['LOGIN'])) and ($_SESSION['LOGIN']!="OK"))
{
	echo("<script>\nif(document.getElementById('loged')!=null)\ndocument.getElementById('loged').style.visibility='hidden';\n");
	echo("if(document.getElementById('login')!=null)\ndocument.getElementById('login').style.visibility='visible';\n</script>\n");
}
else
{
	echo("<script>\nif(document.getElementById('loged')!=null)\ndocument.getElementById('loged').style.visibility='visible';\n");
	echo("if(document.getElementById('login')!=null)\ndocument.getElementById('login').style.visibility='hidden';\n</script>\n");
}
?>