<!DOCTYPE html>
<html>
<head>
	<title>INICIAR SESIÓN | iHelp</title>
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
                <li><a href="index.html"><i class="fa fa-home"></i> INICIO</a></li>
                <li><a href="Productos.html"><i class="fa fa-shopping-bag"></i> PRODUCTOS</a></li>
                <li><a href="Contacto.html"><i class="fas fa-headset"></i> CONTACTO</a></li>
                <li><a id="actual" href="Iniciar Sesion.php"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN | REGRISTRARSE</a></li>
            </ul>
        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>
    
    <div class="contactoEncabezado">
        <br><br><br>
        <h1>INICIAR SESIÓN</h1>
        <p class="pMedio">¡Ingresa a tu cuenta para comprar artículos y obten grandes descuentos!</p><br>
        <div class="formulario">
        <form action="loguear.php" method="POST" onsubmit="return validar2();">
            <div class="row">
                <div class="col-25">
                     <label>Usuario:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="usuario" id="username" onblur="valida_correo()" placeholder="Introduzca su nick..."><span id="emailOK"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                     <label>Contraseña:</label>
                </div>
                <div class="col-75">
                    <input type="password" name="contra" id="password" placeholder="Introduzca su contraseña...">
                </div>
            </div>
            
            <div class="intro">
                <br><input type="submit" value="Ingresar"> 
                <input type="reset" value="Limpiar">
            </div>
        </form>
        </div>
        <br><br><p class="pMedio">¿Usuario nuevo?</p>
        <a href="Registro.html" class="pMedio"><i class="fas fa-user-plus"></i> Da clic para crear una cuenta</a>
        <br><br><br>
    </div>
    
    <div class="footer">
  		<img class="logoFooter" src="img/Logo iHelp.jpeg">
        <h2>Con la Mejor Relacion Calidad-Precio</h2>
        <h2>Copyright © Todos los derechos reservados.</h2>
 	</div>
</body>
</html>