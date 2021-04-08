<?php
session_start();
unset($_SESSION["LOGIN"]);
// Borra todas las variables de sesión
$_SESSION = array();
header("Location: Home.php");
?>