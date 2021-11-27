<?php
session_start();

session_destroy();

header("location: Iniciar Sesion.php");
exit();

?>