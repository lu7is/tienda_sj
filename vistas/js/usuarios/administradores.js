

$('.frmAdministradores').submit(function(e){
    e.preventDefault();

    var form=$(this);
    var tipo=form.attr('data-form');
    var accion=form.attr('action');
    var metodo=form.attr('method');
    var respuesta=form.children('.RespuestaAjax');
    var msjError="<script>Swal.fire ('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
    var formdata = new FormData(this);

    var textoAlerta;

    if(tipo==="save"){
        textoAlerta="Los datos que enviaras quedaran almacenados en el sistema";
    }else if(tipo==="delete"){
        textoAlerta="Los datos serán eliminados completamente del sistema";
    }else if(tipo==="update"){
        textoAlerta="Los datos del sistema serán actualizados";
    }else{
        textoAlerta="Quieres realizar la operación solicitada";
    }

    var Cedula = $('#Cedula').val();
    var Nombre = $('#Nombre').val();
    var Apellido = $('#Apellido').val();
    var Email = $('#Email').val();
    var Usuario = $('#Usuario').val();
    var Password1 = $('#Password1').val();
    var Password = $('#Password').val();
    var Direccion = $('#Direccion').val();
    var Telefono = $('#Telefono').val();
    var Fecha = $('#Fecha').val();
   
    
    if(Cedula == "" || Nombre  == "" || Apellido == "" || Email == "" || Usuario == ""|| Password1 == "" || Password == "" || Direccion == "" || Telefono == "" || Fecha == ""){
        Swal.fire({
            icon: 'error',
            title: 'Debes completar los campos!!',
            timer: 2000,
            showConfirmButton: false
          })
    }else if ( Cedula < 8 || Nombre < 3 || Apellido < 3 || Usuario < 3 || Password1 < 8 || Password < 8 || Direccion < 4 || Telefono < 10 ){
         Swal.fire({
            icon: 'error',
            title: 'El tamaño de los campos no coinciden',
            timer: 2000,
            showConfirmButton: false
          })
    }else{

    Swal.fire({
        title: "¿Estás seguro?",   
        text: textoAlerta,   
        icon: "question",   
        showCancelButton: true,     
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function () {
        $.ajax({
            type: metodo,
            url: accion,
            data: formdata ? formdata : form.serialize(),
            async:true,
            cache: false,
            contentType: false,
            processData: false,
            xhr: function(){
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                  if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    if(percentComplete<100){
                        respuesta.html('<p class="text-center">Procesado... ('+percentComplete+'%)</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: '+percentComplete+'%;"></div></div>');
                      }else{
                          respuesta.html('<p class="text-center"></p>');
                      }
                  }
                }, false);
                return xhr;
            },
            success: function (data) {
                respuesta.html(data);
                console.log("Cedula");
            },
            error: function() {
                respuesta.html(msjError);
            }
        });
        return false;
    });

    }
});




$('.frmclientes').submit(function(e){
    e.preventDefault();

    var form=$(this);
    var tipo=form.attr('data-form');
    var accion=form.attr('action');
    var metodo=form.attr('method');
    var respuesta=form.children('.RespuestaAjax');
    var msjError="<script>Swal.fire ('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
    var formdata = new FormData(this);

    var textoAlerta;

    if(tipo==="save"){
        textoAlerta="Los datos que enviaras quedaran almacenados en el sistema";
    }else if(tipo==="delete"){
        textoAlerta="Los datos serán eliminados completamente del sistema";
    }else if(tipo==="update"){
        textoAlerta="Los datos del sistema serán actualizados";
    }else{
        textoAlerta="Quieres realizar la operación solicitada";
    }

    var CedulaC = $('#CedulaC').val();
    var NombreC = $('#NombreC').val();
    var ApellidoC = $('#ApellidoC').val();
    var EmailC = $('#EmailC').val();
    var UsuarioC = $('#UsuarioC').val();
    var Password1C = $('#Password1C').val();
    var PasswordC = $('#PasswordC').val();
    var DireccionC = $('#DireccionC').val();
    var TelefonoC = $('#TelefonoC').val();
    var FechaC = $('#FechaC').val();
    var action = 'registrar';
    
    if(CedulaC == "" || NombreC  == "" || ApellidoC == "" || EmailC == "" || UsuarioC == ""|| Password1C == "" || PasswordC == "" || DireccionC == "" || TelefonoC == "" || FechaC == ""){
        Swal.fire({
            icon: 'error',
            title: 'Debes completar los campos!!',
            timer: 2000,
            showConfirmButton: false
          })
    }else if ( CedulaC < 8 || NombreC < 3 || ApellidoC < 3 || UsuarioC < 3 || Password1C < 8 || PasswordC < 8 || DireccionC < 4 || TelefonoC < 10 ){
         Swal.fire({
            icon: 'error',
            title: 'El tamaño de los campos no coinciden',
            timer: 2000,
            showConfirmButton: false
          })
    }else{

    Swal.fire({
        title: "¿Estás seguro?",   
        text: textoAlerta,   
        icon: "question",   
        showCancelButton: true,     
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function () {
        $.ajax({
            type: metodo,
            url: accion,
            data: formdata ? formdata : form.serialize(),
            async:true,
            cache: false,
            contentType: false,
            processData: false,
            xhr: function(){
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                  if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    if(percentComplete<100){
                        respuesta.html('<p class="text-center">Procesado... ('+percentComplete+'%)</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: '+percentComplete+'%;"></div></div>');
                      }else{
                          respuesta.html('<p class="text-center"></p>');
                      }
                  }
                }, false);
                return xhr;
            },
            success: function (data) {
                respuesta.html(data);
            },
            error: function() {
                respuesta.html(msjError);
            }
        });
        return false;
    });

    }
});