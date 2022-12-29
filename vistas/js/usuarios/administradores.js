
$(document).ready(function(){
$('#Cedula','#Telefono').validCampoFranz('0123456789'); 
$('#Nombre','#Apellido1','#Apellido2',).validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

});

$('#frmAdministradores').submit(function(e){
   alert('ehh')
    e.preventDefault();
    var Cedula = $('#Cedula').val();
    var Nombre = $('#Nombre').val();
    var Apellido1 = $('#Apellido1').val();
    var Apellido2 = $('#Apellido2').val();
    var Telefono = $('#Telefono').val();

    if(Cedula == "" || Nombre  == "" || Apellido1 == "" || Apellido2 == "" || Telefono == "" ){
        Swal.fire({
            icon: 'error',
            title: 'Debes completar los campos!!',
            timer: 2000,
            showConfirmButton: false
          })
    }else{
        Cedula <= 8 || Nombre <= 3 || Apellido1 <= 3 || Apellido2 <= 3 || Telefono <= 10 
        Swal.fire({
            icon: 'error',
            title: 'El tamaño de los campos no coinciden',
            timer: 2000,
            showConfirmButton: false
          })
    }


});
