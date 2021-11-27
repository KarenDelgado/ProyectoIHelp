<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: Iniciar Sesion.php");
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>INICIO | iHelp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="css/Formato1.css" type="text/css">
    <link rel="stylesheet" href="css/Formato2.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/Archivo.js"></script>
    <!--<script src="js/Archivo1.js"></script>-->
</head>
<body>
	<img src="img/Fondo2.jpg" alt="fondo" id="f"/>
    <header>
        <div class="container">
            <div class="name"> <img class="logo" src="img/Logo iHelp.jpeg"> &nbsp; </div>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a id="actual" href="Inicio.php"><i class="fa fa-home"></i> INICIO</a></li>
                <li><a href="Productos.php"><i class="fa fa-shopping-bag"></i> PRODUCTOS</a></li>
                <li><a href="Contacto.php"><i class="fas fa-headset"></i> CONTACTO</a></li>
                <li><a href="Usuario.php"><i class="fas fa-user"></i> <?php echo $usuario; ?></a></li>
                <li><a href="salir.php"><i class="fas fa-sign-out-alt"></i> CERRAR SESIÓN</a></li>
            </ul>
        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>
    
    <div class="contactoEncabezado">
        <br><br><br>
        <h1>IHELP</h1>
        <img src="img/Inicio.gif" id="principal">
        <br><br><hr><br><br>
        <h1>TOP VENTAS</h1>
    
        <div id="top">
            <div class="ventas">
                <img src="img/top/cargador.jpg" class="top_img">
                <p class="top_etiqueta"> Cargador Laptop HP </p>
            </div>
            <div class="ventas">
                <img src="img/top/iphone.jpg" class="top_img">
                <p class="top_etiqueta"> iPhone 7 plus </p>
            </div>
            <div class="ventas">
                <img src="img/top/olep.jpg" class="top_img">
                <p class="top_etiqueta"> Display Oled Samsung </p>
            </div>
        </div>

        <br><br><br><a href="Productos.php" class="ver_mas">VER MAS PRODUCTOS</a><br><br>
        
    </div><br>
   
    <div class="footer">
        <img class="logoFooter" src="img/Logo iHelp.jpeg">
        <h2>Con la Mejor Relacion Calidad-Precio</h2>
        <h2>Copyright © Todos los derechos reservados.</h2>
    </div>
</body>
</html>