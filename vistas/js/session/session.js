$('#Cerrar').on('click',function(e){
    e.preventDefault();
    
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
          Swal.fire(
            'Terminada!',
            'La Sesion Ha Sido Terminada. Vuelve Pronto',
            'success'
          )
        }
      })

});