function cambiarClase(){
    let siteNav = document.getElementById('site-nav');
        siteNav.classList.toggle('site-nav-open');
    let menuOpen = document.getElementById('menu-toggle');
        menuOpen.classList.toggle('menu-open');    
}

function displayDate() {
   document.getElementById("fecha").innerHTML = Date();
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function soloNumeros(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toUpperCase();
 letras = "0123456789";
 especiales = "8-37-39-46";
 tecla_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
           tecla_especial = true;
           break;
        }
    }
  if(letras.indexOf(tecla)==-1 &&
     !tecla_especial){
           return false;
       }
}

function soloLetras(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toUpperCase();
 letras = " ÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
 especiales = "8-37-39-46";
 tecla_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
           tecla_especial = true;
           break;
        }
    }
  if(letras.indexOf(tecla)==-1 &&
     !tecla_especial){
           return false;
       }
}

function valida_correo(){
var campo=document.getElementById('correo').value;
var valido = document.getElementById('ver_email');
estado=true;

if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(campo)) 
      {
        valido.innerText = "Incorrecto, ingrese un correo valido";
        estado=false;
        document.getElementById('Enviar').disabled = true;
      }
else{
   valido.innerText = "";
   document.getElementById('Enviar').disabled = false;
 }
return estado;      
}

function valida_nuevo_correo(){
var campo1=document.getElementById('newcorreo').value;
var valido1 = document.getElementById('ver_nuevo_email');
estado=true;

if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(campo1)) 
      {
        valido1.innerText = "Incorrecto, ingrese un correo valido";
        estado1=false;
        document.getElementById('Enviar_newcorreo').disabled = true;
      }
else{
   valido1.innerText = "";
   document.getElementById('Enviar_newcorreo').disabled = false;
 }
return estado1;      
}

function carga_estados(){
  var estados=["Aguascalientes","Baja California",
  "Baja California Sur","Campeche","Chiapas","Chihuahua",
  "Ciudad de México","Coahuila","Colima","Durango",
  "Estado de México","Guanajuato","Guerrero","Hidalgo",
  "Jalisco","Michoacán","Morelos","Nayarit","Nuevo León",
  "Oaxaca","Puebla","Querétaro","Quintana Roo",
  "San Luis Potosí","Sinaloa","Sonora","Tabasco","Tamaulipas",
  "Tlaxcala","Veracruz","Yucatán","Zacatecas"];
  estados.sort();
 for(var i in estados)
  {
   	document.getElementById("estado").innerHTML +=
   "<option value='"+estados[i]+"'>"+estados[i]+
   "</option>";
  }
}

function removeOptions(selectbox)
{
    var i;
    for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
      selectbox.remove(i);
}


function carga(){
	document.getElementById('demo').style.fontSize='25px'
	document.getElementById('demo').innerHTML = "Muchas gracias. El formulario se ha enviado con exito."
}


  function validar(){
      var nombre = document.getElementById("nombre").value;
      var apellido1 = document.getElementById("apellido1").value;
      var apellido2 = document.getElementById("apellido2");
      var celular = document.getElementById("celular").value;
      var nick = document.getElementById("nick").value;
      var correo = document.getElementById("correo").value;
      var contra = document.getElementById("contra").value;

      if (nombre==="" || apellido1==="" || apellido2==="" || celular==="" || nick==="" || correo==="" || 
        contra==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            //showConfirmButton: false,
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            //icon: 'error',
            //closeButtonHtml: '<a href="Registro.html">Clic </a>'
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'

          });
          return false;
      }
      else {
        /*if (confirm('⚠️ ¿Estas seguro de enviar los datos de este formulario? ⚠️')){
              alert("💌 Gracias por registrarte 💌");
              document.frm_registro.submit();
              return true;
        }
        else{
              alert("📝 Continua con el registro 📝");
              return false;
        }*/
        return true;
      }
  }

  function num_contra(){
    var valor = document.getElementById('contra');
    var cantidad = valor.value.length;
    var valido2 = document.getElementById('ver_contra');

    if(cantidad  < 8){
        valido2.innerText = "Debes ingresar más de 8 caracteres";
        document.getElementById('Enviar').disabled = true;
    }
    else{
       valido2.innerText = "";
       document.getElementById('Enviar').disabled = false;
    }
  }

  function num_nueva_contra(){
    var valor1 = document.getElementById('newcontra');
    var cantidad1 = valor1.value.length;
    var valido3 = document.getElementById('ver_nueva_contra');

    if(cantidad1  < 8){
        valido3.innerText = "Debes ingresar más de 8 caracteres";
        document.getElementById('Enviar_newcontra').disabled = true;
    }
    else{
       valido3.innerText = "";
       document.getElementById('Enviar_newcontra').disabled = false;
    }
  }

  function validar2(){
      var correo = document.getElementById("username").value;
      var contra = document.getElementById("password").value;
      
      if (correo==="" || contra==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar3(){
      var estado = document.getElementById("estado").value;
      var comentario = document.getElementById("comentario").value;
      
      if (estado==="" || comentario==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar4(){
      var nombre = document.getElementById("nombre").value;
      var apellido1 = document.getElementById("apellido1").value;
      var apellido2 = document.getElementById("apellido2").value;
      var correo = document.getElementById("correo").value;
      var estado = document.getElementById("estado").value;
      var comentario = document.getElementById("comentario").value;
      
      if (nombre==="" || apellido1==="" || apellido2==="" || correo==="" || estado==="" || comentario==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar5(){
      var nuevo_correo = document.getElementById("newcorreo").value;
      
      if (nuevo_correo==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar6(){
      var nueva_contra = document.getElementById("newcontra").value;
      
      if (nueva_contra==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar7(){
      var nuevo_celular = document.getElementById("newcelular").value;
      
      if (nuevo_celular==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar todos los campos',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function nobackbutton(){
     window.location.hash = "no-back-button";
     window.location.hash = "Again-No-back-button";
     window.onhashchange = function(){
      window.location.hash="";
    }   
  }

  function validar_p1(){
      var cantidad1 = document.getElementById("cantidad_p1").value;
      
      if (cantidad1==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p2(){
      var cantidad2 = document.getElementById("cantidad_p2").value;
      
      if (cantidad2==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p3(){
      var cantidad3 = document.getElementById("cantidad_p3").value;
      
      if (cantidad3==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p4(){
      var cantidad4 = document.getElementById("cantidad_p4").value;
      
      if (cantidad4==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p5(){
      var cantidad5 = document.getElementById("cantidad_p5").value;
      
      if (cantidad5==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p6(){
      var cantidad6 = document.getElementById("cantidad_p6").value;
      
      if (cantidad6==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  } 

  function validar_p7(){
      var cantidad7 = document.getElementById("cantidad_p7").value;
      
      if (cantidad7==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  } 

  function validar_p8(){
      var cantidad8 = document.getElementById("cantidad_p8").value;
      
      if (cantidad8==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p9(){
      var cantidad9 = document.getElementById("cantidad_p9").value;
      
      if (cantidad9==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p10(){
      var cantidad10 = document.getElementById("cantidad_p10").value;
      
      if (cantidad10==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p11(){
      var cantidad11 = document.getElementById("cantidad_p11").value;
      
      if (cantidad11==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p12(){
      var cantidad12 = document.getElementById("cantidad_p12").value;
      
      if (cantidad12==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p13(){
      var cantidad13 = document.getElementById("cantidad_p13").value;
      
      if (cantidad13==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p14(){
      var cantidad14 = document.getElementById("cantidad_p14").value;
      
      if (cantidad14==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function validar_p15(){
      var cantidad15 = document.getElementById("cantidad_p15").value;
      
      if (cantidad15==="") {
          Swal.fire({
            title: 'Error',
            html: 'Debe llenar el campo solicitado',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: 'indigo',
            width: '45%',
            allowOutsideClick: false,
            imageUrl: 'img/cheems_error.png',
            imageWidth:'70%'
          });
          return false;
      }
      else {
        return true;
      }
  }

  function mostrar() {
        elementos = document.querySelectorAll(".datos[name=op1], .datos[name=op2], .datos[name=op3]");
        for (var i = 0; i < elementos.length; i++) {
          elementos[i].disabled = false;
          document.getElementById("vista_datos").style.display = "none"
          document.getElementById("op_modificar1").style.display = "block";
          document.getElementById("op_modificar2").style.display = "block";
          document.getElementById("op_modificar3").style.display = "block";
          document.getElementById("indicacion").style.display = "block";
          document.getElementById("cancelar").style.display = "block";
          document.getElementById("modificar").style.display = "none";
        }
  }

  function ocultar() {
        elementos = document.querySelectorAll(".datos[name=op1], .datos[name=op2], .datos[name=op3]");
        for (var i = 0; i < elementos.length; i++) {
          elementos[i].disabled = true;
          document.getElementById("vista_datos").style.display = "block";
          document.getElementById("op_modificar1").style.display = "none";
          document.getElementById("op_modificar2").style.display = "none";
          document.getElementById("op_modificar3").style.display = "none";
          document.getElementById("indicacion").style.display = "none";
          document.getElementById("modificar").style.display = "block";
          document.getElementById("modificar_correo").style.display = "none";
          document.getElementById("modificar_contra").style.display = "none";
          document.getElementById("modificar_cel").style.display = "none";
          document.getElementById("cancelar").style.display = "none";
        }
  }

  function mostrar_mod1() {
        elementos = document.querySelectorAll(".cambio_correo[name=actual_correo], .cambio_correo[name=newcorreo]");
        for (var i = 0; i < elementos.length; i++) {
          elementos[i].disabled = false;
          document.getElementById("modificar_correo").style.display = "block";
          document.getElementById("indicacion").style.display = "none";
          document.getElementById("op_modificar1").style.display = "none";
          document.getElementById("op_modificar2").style.display = "none";
          document.getElementById("op_modificar3").style.display = "none";
        }
  }

  function mostrar_mod2() {
        elementos = document.querySelectorAll(".cambio_contra[name=actual_contra], .cambio_contra[name=newcontra]");
        for (var i = 0; i < elementos.length; i++) {
          elementos[i].disabled = false;
          document.getElementById("modificar_contra").style.display = "block";
          document.getElementById("indicacion").style.display = "none";
          document.getElementById("op_modificar1").style.display = "none";
          document.getElementById("op_modificar2").style.display = "none";
          document.getElementById("op_modificar3").style.display = "none";
        }
  }

  function mostrar_mod3() {
        elementos = document.querySelectorAll(".cambio_cel[name=actual_cel], .cambio_cel[name=newcelular]");
        for (var i = 0; i < elementos.length; i++) {
          elementos[i].disabled = false;
          document.getElementById("modificar_cel").style.display = "block";
          document.getElementById("indicacion").style.display = "none";
          document.getElementById("op_modificar1").style.display = "none";
          document.getElementById("op_modificar2").style.display = "none";
          document.getElementById("op_modificar3").style.display = "none";
        }
  }

