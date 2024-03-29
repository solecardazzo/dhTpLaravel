window.onload = function() {

  if(window.location.pathname !== "/product" && window.location.pathname !== "/edit/4" && window.location.pathname !== "/profile" && window.location.pathname !== "/login" && window.location.pathname !== "/cart/add" && window.location.pathname !== "/register" /* && window.location.pathname.split('/').length => 2 */ ) {
    setInterval(function(){
      // Esto es lo que va a pasar terminado el tiempo determinado
      Swal.fire({
        title: '¿Querés colaborar con nosotros?',
        type: 'question',
        html:
        `
        <h6 class="eltitulo">Tu compromiso solidario hace posible <br>
        que ayudemos a tantos niños de la Argentina.</h6>
        `,
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: `Quiero donar ahora`,
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: 'Mas tarde',
        cancelButtonAriaLabel: 'Thumbs down',
        confirmButtonClass: 'botonQuieroDonar'
      })

      let botonQuieroDonar = document.querySelector('.botonQuieroDonar');
      botonQuieroDonar.addEventListener('click', function() {
        window.location = "/product";
      });

    }, 90000 /* -> Este es el tiempo expresado en milisegundos */);
  }

}
