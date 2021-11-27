<?php 
	function conexion()
	{
		if (!($link=mysqli_connect("localhost","root","","bd_ihelp"))){
			echo "Error conectando a la base de datos";
			exit();
		}
		return $link;
	}
 ?>