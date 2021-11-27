Swal.fire({
	title: 'Error',
	html: 'Debe iniciar sesión para poder encargar productos.<br><br><br><a href="javascript: history.go(-1)" class="alerta">Regresar</a> &nbsp; <a href="Iniciar Sesion.php" class="alerta">Iniciar Sesión</a>',
	showConfirmButton: false,
	//confirmButtonText: 'Aceptar',
	//confirmButtonColor: 'black',
	//icon: 'error',
	//closeButtonHtml: '<a href="Registro.html">Clic </a>'
	width: '50%',
	padding: '1.5rem',
	allowOutsideClick: false,
	imageUrl: 'img/cheems_error.png',
	imageWidth:'70%'

});