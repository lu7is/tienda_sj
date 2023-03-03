<script>
$(document).ready(function(){
$('.cerrar').on('click',function(e){
    e.preventDefault();
    var Token = $(this).attr('href');

    Swal.fire({
        title: 'Deseas Cerrar Sesión?',
        text: "Terminara la Sesón en Seguida!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Salir!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url:'<?php echo SERVERURL; ?>Ajax/loginAjax.php?Token='+Token,
            success:function(data){
              if(data == "true"){
                Swal.fire(
                  'Terminada!',
                  'La Sesion Ha Sido Terminada. Vuelve Pronto',
                  'success'
                )
                window.location.href = "<?php echo SERVERURL; ?>"
              }else{
                console.log(data);
                Swal.fire(
                        'Error!',
                        'La Sesion no Ha Sido Terminada. Vuelve intentalo',
                        'error'
              ) 
              }
            }
          })
        }
      })

});
});

</script>

/*
$(document).ready(function(){
    $('.cerrar').on('click',function(e){
    e.preventDefault();
    var Token = $(this).attr('href');
    Swal.fire({
        title: 'Deseas Cerrar Sesión?',
        text: "Terminara la Sesón en Seguida!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Salir!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            
            success:function(data){
                if(data == "true"){
                    window.location.href = "<?php echo SERVERURL; ?>"
                }else{
                    Swal.fire(
                        'Error!',
                        'La Sesion no Ha Sido Terminada. Vuelve intentalo',
                        'error'
              )
                }
            }
          })
        }
      })
      
});
});

