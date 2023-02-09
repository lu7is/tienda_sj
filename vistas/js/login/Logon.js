$(document).ready( function(){
    
});







$('.frmLogin').submit(function(e){
    e.preventDefault();

    var login = $('#login').val();
    var password = $('#password').val();

    var form=$(this);
    var accion=form.attr('action');
    var metodo=form.attr('method');
    var respuesta=form.children('.RespuestaAjax');
    var msjError="<script>Swal.fire ('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
    var formdata = new FormData(this);

    if(login == "" || password == ""){
        Swal.fire({
            icon: 'error',
            title: 'Debes completar los campos!!',
            timer: 2000,
            showConfirmButton: false
          });
    }else if(login.length < 3 ){
        Swal.fire({
            icon: 'error',
            title: 'El tamaño del Login no es Correcto',
            timer: 2000,
            showConfirmButton: false
          })
    }else if(password.length < 1){
        Swal.fire({
            icon: 'error',
            title: 'El tamaño de la Contraseña no es Correcta',
            timer: 2000,
            showConfirmButton: false
          })
    }else{

            $.ajax({
                type: metodo,
                url: accion,
                data: formdata ? formdata : form.serialize(),
                async:true,
                cache: false,
                contentType: false,
                processData: false,
               
                success: function (data) {
                    respuesta.html(data);
                },
                error: function() {
                    respuesta.html(msjError);
                }
            });
            return false;
  
    
        }


});


