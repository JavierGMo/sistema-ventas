$(function(){
    $("#btn-registro").on("click",function(){
     event.preventDefault();
     var nombres = $("#nombres").val();
     var apellidos = $("#apellidos").val();
     var email = $("#email").val();
     var telefono = $("#telefono").val();
     var contrasenia = $("#contrasenia").val();
     var gridCheck = $("#gridCheck").val();
    //  EXPRECIONES REGULARES
     var exEmail = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
     var exContrasenia = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;
     var exTelefono = /^[0-9-()+]{3,20}/;
     var exletras = /^[a-zA-Z0-9ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_ \s]+$/;
    //  var excodigo_postal = /^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/;

    //  SE VALIDA QUE LOS CAMPOS NO ESTEN VACION Y QUE SU CONTENIDO SEA APROPIADO CON EXPRECIONES REGULARES
     if(nombres === ""){
      $("#group-nombres").addClass('error-input');
      $("#error-nombres").html('Este campo no puede estar vacio.').fadeIn();
     }else{
      $("#group-nombres").removeClass('error-input');
      $("#error-nombres").html('').fadeOut();
      if(!exletras.test(nombres)){
        $("#group-nombres").addClass('error-input');
        $("#error-nombres").html('En este campo solo se permiten letras.').fadeIn();
      }else{
        $("#group-nombres").removeClass('error-input');
        $("#error-nombres").html('').fadeOut();
        // validando que no exeda los caracteres
      if(nombres.length>20){
        $("#group-nombres").addClass('error-input');
        $("#error-nombres").html('No puede exeder los 20 caracteres').fadeIn();
      }else{
        // quitamos el aviso de error
        $("#group-nombres").removeClass('error-input');
        $("#error-nombres").html('').fadeIn();
        // validamos el apellido
        if(apellidos === ""){
          $("#group-apellidos").addClass('error-input');
          $("#error-apellidos").html('Este campo no puede estar vacio.').fadeIn();
         }else{
          $("#group-apellidos").removeClass('error-input');
          $("#error-apellidos").html('').fadeOut();
          if(!exletras.test(apellidos)){
            $("#group-apellidos").addClass('error-input');
            $("#error-apellidos").html('En este campo solo se permiten letras.').fadeIn();
          }else{
            $("#group-apellidos").removeClass('error-input');
            $("#error-apellidos").html('').fadeOut();
            // validando que no exeda los caracteres
          if(apellidos.length>20){
            $("#group-apellidos").addClass('error-input');
            $("#error-apellidos").html('No puede exeder los 20 caracteres').fadeIn();
          }else{
            // quitamos el aviso de error
            $("#group-apellidos").removeClass('error-input');
            $("#error-apellidos").html('').fadeIn();
            // aqui validamos el email
            if(email === ""){
              $("#group-email").addClass('error-input');
              $("#error-email").html('Este campo no puede estar vacio.').fadeIn();
             }else{
              $("#group-email").removeClass('error-input');
              $("#error-email").html('').fadeOut();
              if(!exEmail.test(email)){
                $("#group-email").addClass('error-input');
                $("#error-email").html('En este campo solo se permiten letras.').fadeIn();
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
                // aqui validamos el telefono
                if(telefono === ""){
                  $("#group-telefono").addClass('error-input');
                  $("#error-telefono").html('Este campo no puede estar vacio.').fadeIn();
                 }else{
                  $("#group-telefono").removeClass('error-input');
                  $("#error-telefono").html('').fadeOut();
                  if(!exTelefono.test(telefono)){
                    $("#group-telefono").addClass('error-input');
                    $("#error-telefono").html('En este campo solo se permiten letras.').fadeIn();
                  }else{
                    $("#group-telefono").removeClass('error-input');
                    $("#error-telefono").html('').fadeOut();
                    // validando que no exeda los caracteres
                  if(telefono.length>20){
                    $("#group-telefono").addClass('error-input');
                    $("#error-telefono").html('No puede exeder los 20 caracteres').fadeIn();
                  }else{
                    // quitamos el aviso de error
                    $("#group-nombres").removeClass('error-input');
                    $("#error-nombres").html('').fadeIn();
                    // aqui validamos la contrasenia
                    if(contrasenia === ""){
                      $("#group-contrasenia").addClass('error-input');
                      $("#error-contrasenia").html('Este campo no puede estar vacio.').fadeIn();
                     }else{
                      $("#group-contrasenia").removeClass('error-input');
                      $("#error-contrasenia").html('').fadeOut();
                      if(!exContrasenia.test(contrasenia)){
                        $("#group-contrasenia").addClass('error-input');
                        $("#error-contrasenia").html('Verifique que tenga letras y numeros').fadeIn();
                      }else{
                        $("#group-contrasenia").removeClass('error-input');
                        $("#error-contrasenia").html('').fadeOut();
                        // validando que no exeda los caracteres
                      if(contrasenia.length>20 || contrasenia.length<8){
                        $("#group-contrasenia").addClass('error-input');
                        $("#error-contrasenia").html('No puede exeder los 20 caracteres y minimo 8').fadeIn();
                      }else{
                        // quitamos el aviso de error
                        $("#group-contrasenia").removeClass('error-input');
                        $("#error-contrasenia").html('').fadeOut();
                        alert (nombres + apellidos + email + telefono + contrasenia + gridCheck);
                      //   $.ajax({
                      //     url: '../inicio/datos.php',
                      //     type: 'post',
                      //     data: $("#formulario").serialize(),
                      //     success: function (data) {
                      //         alert(data);
                      //     }
                      // });
                      }
                      }
                    }
                  }
                  }
                }
              }
              }
            }
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