$(function(){
   $("#btn-login").on("click",function(){
    event.preventDefault();
    var email = $("#email").val();
    var contrasenia = $("#contrasenia").val();
    var exEmail = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
    var exContrasenia = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;
   //  SE VALIDA QUE LOS CAMPOS NO ESTEN VACION Y QUE SU CONTENIDO SEA APROPIADO CON EXPRECIONES REGULARES
   if(email === ""){
    $("#group-email").addClass('error-input');
    $("#error-email").html('Este campo no puede estar vacio.').fadeIn();
   }else{
    $("#group-email").removeClass('error-input');
    $("#error-email").html('').fadeOut();
    if(!exEmail.test(email)){
      $("#group-email").addClass('error-input');
      $("#error-email").html('Verifique que el email sea valido.').fadeIn();
    }else{
      $("#group-email").removeClass('error-input');
      $("#error-email").html('').fadeOut();
      // validando que no exeda los caracteres
    if(email.length>70){
      $("#group-email").addClass('error-input');
      $("#error-email").html('No puede exeder los 20 caracteres').fadeIn();
    }else{
      // quitamos el aviso de error
      $("#group-email").removeClass('error-input');
      $("#error-email").html('').fadeIn();
    //   validamos la contraseña
    if(contrasenia === ""){
        $("#group-contrasenia").addClass('error-input');
        $("#error-contrasenia").html('Este campo no puede estar vacio.').fadeIn();
       }else{
        $("#group-contrasenia").removeClass('error-input');
        $("#error-contrasenia").html('').fadeOut();
        if(!exContrasenia.test(contrasenia)){
          $("#group-contrasenia").addClass('error-input');
          $("#error-contrasenia").html('Verifique que el contrasenia sea valido. ej: textoNumero, numeroTexto').fadeIn();
        }else{
          $("#group-contrasenia").removeClass('error-input');
          $("#error-contrasenia").html('').fadeOut();
          // validando que no exeda los caracteres
        if(contrasenia.length>70){
          $("#group-contrasenia").addClass('error-input');
          $("#error-contrasenia").html('No puede exeder los 20 caracteres').fadeIn();
        }else{
          // quitamos el aviso de error
          $("#group-contrasenia").removeClass('error-input');
          $("#error-contrasenia").html('').fadeIn();
        alert (email + contrasenia);
        
           }
         }
       }
       }
     }
   }

   });

    //   con este codigo lo tenemos de plantilla para mostrar alertas 
    function MostrarAlerta( tittle, text, tipo){
        Swal.fire(
            tittle,
            text,
            tipo
          );
    }

});