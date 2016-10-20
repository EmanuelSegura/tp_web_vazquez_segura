$(document).ready(function(){

  function Cargar(accion) {
    var data = {
      action : accion
    };
    $.ajax({
      method: "POST",
      url: "index.php",
      data: data,
      success: function(dataDevuelta){
        $('#ajaxContent').html(dataDevuelta);
      },
      error: function() {
        alert('Error');
      }
    })

    //ev.preventDefault();
  }

  //Carga el home al iniciar.
  Cargar('traerNoticias');

  $('#btnTraerNoticias').on("click",function(ev){
    Cargar('traerNoticias');
    ev.preventDefault();
  });

  $('#btnCargarReparto').on("click",function(ev){
    Cargar('mostrarReparto');
    ev.preventDefault();
  });

  $('#btnCargarTemporadas').on("click",function(ev){
    Cargar('mostrarTemporadas');
    ev.preventDefault();
  });

  $('#btnCargarJuego').on("click",function(ev){
    Cargar('mostrarGame');
    ev.preventDefault();
  });

  $('#btnCargarContacto').on("click",function(ev){
    Cargar('mostrarContacto');
    ev.preventDefault();
  });

});
