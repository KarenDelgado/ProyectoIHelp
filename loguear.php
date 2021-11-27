<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO | iHelp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="css/Formato1.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/Archivo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<img src="img/Fondo2.jpg" alt="fondo" id="f"/>
    <header>
        <div class="container">
            <div class="name"> <img class="logo" src="img/Logo iHelp.jpeg"> &nbsp; </div>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="Error404.html"><i class="fa fa-home"></i> INICIO</a></li>
                <li><a href="Construccion.html"><i class="fa fa-shopping-bag"></i> PRODUCTOS</a></li>
                <li><a href="Contacto.html"><i class="fas fa-headset"></i> CONTACTO</a></li>
                <li><a id="actual" href="Iniciar Sesion.php"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN | REGRISTRARSE</a></li>
            </ul>
        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>


	<?php
	include("conexion.php");
	        $link=conexion();
	session_start();

	$usuario = $_POST['usuario'];
	$clave = $_POST['contra'];

	$q = "select count(*) as contar from cliente where Nick = '$usuario' and Contra = '$clave'";
	$consulta = mysqli_query ($link, $q);
	$array = mysqli_fetch_array($consulta);

	if($array ['contar']>0){
		$_SESSION['username'] = $usuario;
		header("location: Productos.php");
	} else{
		echo '<script src="js/sweetalert3.js"></script>';
	}

	if(!isset($usuario)){
    header("location: Iniciar Sesion.php");
	} 

	?>


</body>
</html>