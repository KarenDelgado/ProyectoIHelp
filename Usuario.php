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
	<title>USUARIO | iHelp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="css/Formato1.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/Archivo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body onload="nobackbutton();">
	<img src="img/Fondo2.jpg" alt="fondo" id="f"/>
    <header>
        <div class="container">
            <div class="name"> <img class="logo" src="img/Logo iHelp.jpeg"> &nbsp; </div>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="Inicio.php"><i class="fa fa-home"></i> INICIO</a></li>
                <li><a href="Productos.php"><i class="fa fa-shopping-bag"></i> PRODUCTOS</a></li>
                <li><a href="Contacto.php"><i class="fas fa-headset"></i> CONTACTO</a></li>
                <li><a id="actual" href="Usuario.php"><i class="fas fa-user"></i> <?php echo $usuario; ?></a></li>
                <li><a href="salir.php"><i class="fas fa-sign-out-alt"></i> CERRAR SESIÓN</a></li>
            </ul>
        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>
    
    <div class="contactoEncabezado">
        <br><br><br>
        <h1 id="saludo_usuario">BIENVENIDO <?php echo $usuario; ?></h1>
        <p class="pEntrada">Puede modificar sus datos sí así lo desea y consultar detalles de los pedidos que ha realizado.</p><br>
        <img src="img/cheems_perfil.jpg" id="perfil">
        <br><br><hr><br>
        <h1>DATOS PERSONALES</h1>
        <div class="formulario" id="vista_datos">
        <!--<form action="Construccion.html" method="POST" onsubmit="return validar3();">-->
            <?php
            include("conexion.php");
            $link=conexion();

            $datos_usuario = mysqli_query($link, "SELECT id_cliente, Telefono, Correo, Contra FROM `cliente` WHERE Nick = '$usuario'");
            $cargar_usuario = mysqli_fetch_array($datos_usuario);
            $cel = $cargar_usuario['Telefono'];
            $correo = $cargar_usuario['Correo'];
            $pass = $cargar_usuario['Contra'];
            ?>

            <div class="row">
                <div class="col-25">
                    <label>Usuario:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="duser" value="<?php echo $usuario; ?>" disabled><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Correo:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="duser" value="<?php echo $correo; ?>" disabled><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Contraseña:</label>
                </div>
                <div class="col-75">
                    <input type="password" class="duser" value="<?php echo $pass; ?>" disabled><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Teléfono:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="duser" value="<?php echo $cel; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="formulario">
            <div class="intro" id="modificar">
                <br><input type="button" value="Modificar Datos" onclick="mostrar()"> 
            </div>
            <div class="intro" id="indicacion">
                <p class="pMedio">Seleccione el dato a modificar</p>
            </div>

            <div id="op_modificar1">
                <div class="intro">
                    <br><input type="button" name="op1" class="datos" value="Modificar Correo" onclick="mostrar_mod1()">
                </div>
            </div>
            <div id="modificar_correo">
                <form action="Usuario_modificacion1.php" method="POST" onsubmit="return validar5();">
                    <div class="intro">
                        <p class="pMedio">Modificar Correo</p><br>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Correo actual:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="actual_correo" id="actual_correo" class="cambio_correo duser" value="<?php echo $correo; ?>" disabled><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Correo nuevo:</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="newcorreo" id="newcorreo" class="cambio_correo" onkeyup="valida_nuevo_correo();" placeholder="Ingresa un correo electrónico..."><span id="ver_nuevo_email"><br>
                        </div>
                    </div>
                    <div class="intro">
                        <br><input type="submit" value="Enviar" id="Enviar_newcorreo"> 
                    </div>
                </form>
            </div> 

            <div id="op_modificar2">
                <div class="intro">
                    <br><input type="button" name="op2" class="datos" value="Modificar Contraseña" onclick="mostrar_mod2()">
                </div>
            </div>
            <div id="modificar_contra">
                <form action="Usuario_modificacion2.php" method="POST" onsubmit="return validar6();">
                    <div class="intro">
                        <p class="pMedio">Modificar Contraseña</p><br>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Contraseña actual:</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="actual_contra" id="actual_contra" class="cambio_contra duser" value="<?php echo $pass; ?>" disabled><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Contraseña nuevo:</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="newcontra" id="newcontra" class="cambio_contra" onkeyup="num_nueva_contra();" placeholder="Ingresa una contraseña..."><span id="ver_nueva_contra"></span><br>
                        </div>
                    </div>
                    <div class="intro">
                        <br><input type="submit" value="Enviar" id="Enviar_newcontra"> 
                    </div>
                </form>
            </div>

            <div id="op_modificar3">
                <div class="intro">
                    <br><input type="button" name="op3" class="datos" value="Modificar Teléfono" onclick="mostrar_mod3()">
                </div>
            </div>
            <div id="modificar_cel">
                <form action="Usuario_modificacion3.php" method="POST" onsubmit="return validar7();">
                    <div class="intro">
                        <p class="pMedio">Modificar Teléfono</p><br>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Teléfono actual:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="actual_cel" id="actual_cel" class="cambio_cel duser" value="<?php echo $cel; ?>" disabled><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Teléfono nuevo:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="newcelular" id="newcelular" class="cambio_cel" onkeypress="return soloNumeros(event)" maxlength="10" placeholder="Ingresa un número celular..."><br>
                        </div>
                    </div>
                    <div class="intro">
                        <br><input type="submit" value="Enviar" id="Enviar"> 
                    </div>
                </form>
            </div> 
            <div class="intro" id="cancelar">
                <br><input type="button" value="Cancelar" onclick="ocultar()"> 
            </div>
        </div>
        

        <br><hr><br><br>
        <h1>DETALLES DE PEDIDOS</h1>
        <?php
            /*include("conexion.php");
            $link=conexion();*/

            $buscar_usuario = mysqli_query($link, "SELECT id_cliente FROM `cliente` WHERE Nick = '$usuario'");
            $cargar_usuario = mysqli_fetch_array($buscar_usuario);
            $id = $cargar_usuario['id_cliente'];
            /*echo $id;*/

            $buscar_pedidos = mysqli_query($link, "SELECT id_producto, fecha_pedido, cantidad, precio_total, codigo FROM `pedido` WHERE id_cliente = '$id'");

            $contar = mysqli_num_rows($buscar_pedidos);
            /*echo $contar;*/

            if ($contar == 0){
        ?>
        
        <p class="pEntrada">¡Oh no! Parece que no ha realizado ninguna compra, visite el apartado de Productos que tenemos actualmente y disfrute de nuestros increbles precios.</p><br>
        <img class="envio" src="img/cheems_sin_pedido.png">
        
        <?php
            } else {
                
        ?>

        <p class="pEntrada">En el siguiente apartado se encuentran detalles de los pedidos que ha realizado. ¡Siga disfrutando de nuestros productos!</p><br>
        <table id="detalles_pedidos" class="enmarcar">
            <tr>
                <th class="enmarcar">Código</th>
                <th class="enmarcar">Producto</th>
                <th class="enmarcar">Cantidad</th>
                <th class="enmarcar">Total</th>
                <th class="enmarcar">Fecha</th>
            </tr>
            
            <?php
            /*$cargar_pedido = mysqli_fetch_array($buscar_pedidos);
            $id_p = $cargar_pedido['id_producto'];
            $fecha = $cargar_pedido['fecha_pedido'];
            $cantidad = $cargar_pedido['cantidad'];
            $total = $cargar_pedido['precio_total'];
            $num_codigo = $cargar_pedido['codigo'];
            echo 'id '.$id_p.'fecha '.$fecha.' cantidad '.$cantidad.' total '.$total.' codigo '.$num_codigo.' .';*/

            /*$buscar_producto = mysqli_query($link, "SELECT Nombre FROM `producto` WHERE id_producto = '$id_p'");
            $cargar_producto = mysqli_fetch_array($buscar_producto);
            $producto = $cargar_producto['Nombre'];
            echo $producto;*/
            while($cargar_pedido = mysqli_fetch_array($buscar_pedidos)){
            ?>

            <tr>
                <td class="enmarcar"><?php echo $cargar_pedido['codigo']  ?></td>
                <td class="enmarcar"><?php 
                    $id_p = $cargar_pedido['id_producto'];
                    $buscar_producto = mysqli_query($link, "SELECT Nombre FROM `producto` WHERE id_producto = '$id_p'");
                    $cargar_producto = mysqli_fetch_array($buscar_producto);
                    $producto = $cargar_producto['Nombre'];
                    echo $producto;
                ?></td>
                <td class="enmarcar"><?php 
                    $cantidad = $cargar_pedido['cantidad'];
                    if($cantidad == 1){
                            echo $cantidad.' Pieza';
                        } else {
                            echo $cantidad.' Piezas';
                        }
                ?></td>
                <td class="enmarcar">$<?php echo $cargar_pedido['precio_total']  ?> MXN</td>
                <td class="enmarcar"><?php echo $cargar_pedido['fecha_pedido'] ?></td>
            </tr>

            <?php
            }
            ?>
        </table>
        <img class="envio" src="img/cheems_con_pedido.png">

        <?php
        }
        mysqli_close($link);
        ?>

    </div> 
    
    <div class="footer">
        <img class="logoFooter" src="img/Logo iHelp.jpeg">
        <h2>Con la Mejor Relacion Calidad-Precio</h2>
        <h2>Copyright © Todos los derechos reservados.</h2>
    </div>
</body>
</html>