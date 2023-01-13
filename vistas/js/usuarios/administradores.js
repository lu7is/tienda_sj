
$(document).ready(function(){
$('#Cedula','#Telefono').validCampoFranz('0123456789'); 
$('#Nombre','#Apellido1','#Apellido2',).validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

if($("#Email").val().indexOf('@', 0) == -1 || $("#Email").val().indexOf('.', 0) == -1) {
    alert('El correo electrónico introducido no es correcto.');
    return false;
}

alert('El email introducido es correcto.');


});

$('#frmAdministradores').submit(function(e){
    e.preventDefault();
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
    var action = 'registrar';

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
        $.ajax({
            url:'././Ajax/administradorAjax.php',
            method:'POST',
            async:true,
            data:{action:action, Cedula:Cedula, Nombre:Nombre, Apellido:Apellido, Email:Email, Usuario:Usuario, Password1:Password1, Password:Password, Direccion:Direccion, Telefono:Telefono, Fecha:Fecha},
            success:function (response){
                Swal.fire({
               
                    icon: 'success',
                    title: 'Registrado Exítosamente!!',
                    showConfirmButton: false,
                    timer: 1500
                    
                  })
                  console.log(response);
                  
            }
        });

    }

        
    
 

});
