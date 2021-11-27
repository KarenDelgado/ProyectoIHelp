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
	<title>PRODUCTOS | iHelp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="css/Formato1.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--<script src="js/Archivo.js"></script>-->
</head>
<body>
	<img src="img/Fondo2.jpg" alt="fondo" id="f"/>
    <header>
        <div class="container">
            <div class="name"> <img class="logo" src="img/Logo iHelp.jpeg"> &nbsp; </div>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="Inicio.php"><i class="fa fa-home"></i> INICIO</a></li>
                <li><a id="actual" href="Productos.php"><i class="fa fa-shopping-bag"></i> PRODUCTOS</a></li>
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
        <h1>PRE ORDEN</h1>


        <?php
            /*echo $_POST['producto'];*/
            include("conexion.php");
            $link=conexion();

            $id = $_POST['idproducto'];
            $preorden = mysqli_query($link, "SELECT Nombre, Precio, Descripcion, Marca FROM `producto` WHERE id_producto = '$id'");
            $ver = mysqli_fetch_array($preorden);
            
            $nombre = $ver['Nombre'];
            $precio = $ver ['Precio'];
            $desc = $ver ['Descripcion'];
            $marca = $ver ['Marca'];
            $cantidad = $_POST['cantidad'];
            $total = $cantidad * $precio;
            /*echo 'Nombre: '.$nombre.', precio: '.$precio.', descripcion: '.$desc.', marca: '.$marca.' c:';*/
            
            mysqli_close($link);
        ?>
        <form action="Orden.php" method="POST">
            <table class="preorden">
                <tr class="titulo_productos_preorden">
                    <th colspan="3">COTIZACIÓN DEL PEDIDO</th>
                </tr>
                <tr>
                    <td rowspan="9" class="detalle_preorden"><?php
                    if($id == 1){
                        echo '<img src="img/productos/fundas1.jpg" class="img_preorden">';
                    } else if($id == 2){
                        echo '<img src="img/productos/cargador2.jpg" class="img_preorden">';
                    } else if($id == 3){
                        echo '<img src="img/productos/iphone3.jpg" class="img_preorden">';
                    } else if($id == 4){
                        echo '<img src="img/productos/cargador4.jpg" class="img_preorden">';
                    } else if($id == 5){
                        echo '<img src="img/productos/mica5.jpg" class="img_preorden">';
                    } else if($id == 6){
                        echo '<img src="img/productos/mica6.jpg" class="img_preorden">';
                    } else if($id == 7){
                        echo '<img src="img/productos/mica7.jpg" class="img_preorden">';
                    } else if($id == 8){
                        echo '<img src="img/productos/mica8.jpg" class="img_preorden">';
                    } else if($id == 9){
                        echo '<img src="img/productos/mica9.jpg" class="img_preorden">';
                    } else if($id == 10){
                        echo '<img src="img/productos/mica10.jpg" class="img_preorden">';
                    } else if($id == 11){
                        echo '<img src="img/productos/mica11.jpg" class="img_preorden">';
                    } else if($id == 16){
                        echo '<img src="img/productos/oled12.jpg" class="img_preorden">';
                    } else if($id == 13){
                        echo '<img src="img/productos/ssd13.jpg" class="img_preorden">';
                    } else if($id == 14){
                        echo '<img src="img/productos/audifonos14.jpg" class="img_preorden">';
                    } else if($id == 15){
                        echo '<img src="img/productos/usb15.jpg" class="img_preorden">';
                    } else {
                        echo '<img src="img/cheems_mmdisimo.png">';
                    }
                    ?> </td>
                    <td colspan="2" class="detalle_preorden"><input type="text" name="id_producto" value="<?php echo $id; ?>" class="dato"></td>
                </tr>
                <tr>
                    <td colspan="2" class="detalle_preorden"><strong>Número de orden: </strong><input type="text" class="dato" name="orden" value="<?php $i = rand(100000,999999); echo $i; ?>" >  <?php echo $i; ?> </td>
                </tr>
                <tr>
                    <td colspan="2" class="detalle_preorden"><strong>Producto: </strong><?php echo $nombre; ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="detalle_preorden"><strong>Descripción: </strong><?php echo $desc; ?>, marca <?php echo $marca; ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="detalle_preorden"><strong>Precio por unidad: </strong>$<?php echo $precio; ?> MXN</td>
                </tr>
                <tr class="detalle_preorden">
                    <td colspan="2"> <input type="text" name="cantidad_producto" value="<?php echo $cantidad; ?>" class="dato">
                        <strong>Cantidad ordenada: </strong><?php 
                        if($cantidad == 1){
                            echo $cantidad.' Pieza';
                        } else {
                            echo $cantidad.' Piezas';
                        }
                    ?></td>
                </tr>
                <tr class="detalle_preorden">
                    <td colspan="2"><strong>Total: </strong>$<?php echo $total; ?> MXN</td>
                </tr>
                <tr class="enviar_preorden">
                    <td colspan="2"><input type="submit" class="btn-submit" value="REALIZAR PEDIDO"></td>
                </tr>
                <tr class="detalle_preorden">
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="Productos.php" class="ver_mas">REGRESAR A PRODUCTOS</a><br></td>
                </tr>
            </table>
        </form><br><br>

    </div>

    <div class="footer">
        <img class="logoFooter" src="img/Logo iHelp.jpeg">
        <h2>Con la Mejor Relacion Calidad-Precio</h2>
        <h2>Copyright © Todos los derechos reservados.</h2>
    </div>
</body>
</html>