"use strict";

$(document).ready(function() {

  obtieneDatos();
  $("#botonIngreso").on('click', function(event){

    event.preventDefault();
    var grupo = 29;
    var datos = {"episodio": $("#episodio").val(),
    "director": $("#director").val(),
    "anio": $("#anio").val()};

    var informacion = {
      group: grupo,
      thing: datos
    };


    $.ajax({
      type: "POST",
      dataType: 'JSON',
      data: JSON.stringify(informacion),
      contentType: "application/json; charset=utf-8",
      url: "http://web-unicen.herokuapp.com/api/create",
      success: function(data){
        alert("Los datos fueron cargados correctamente");
        console.log(data);
      },
      error:function(data){
        alert("Error con el servidor");
        console.log(data);
      }
    });

  });

  function obtieneDatos() {

      event.preventDefault();
      var grupo = 29;
      $.ajax(
        {
          type: "GET",
          dataType: "JSON",
          url:"http://web-unicen.herokuapp.com/api/group/"+grupo+"?",
          success: function(data){
            console.log(data);

            var infohtml = "";
            for (var i = 0 ; i < data.information.length; i++) {
              console.log("thing");
              var numID = data.information[i]._id;
              infohtml = infohtml + "<tr>"

              infohtml = infohtml + "<td>" + data.information[i].thing.episodio + "</td>";
              infohtml = infohtml + "<td>" + data.information[i].thing.director + "</td>";
              infohtml = infohtml + "<td>" + data.information[i].thing.anio + "</td>";
              infohtml = infohtml + "<td> <button type=\"submit\" idElimina=\""+numID+"\" class=\"btn btn-default botonEliminar\"> Borrar </button> </td>";
            }

            //carga la info y fuera de la llave cerramos la fila

            infohtml = infohtml + "</tr>";
            $("#infoCampos").html(infohtml);
          },
          error: function(jqxml, status, errorThrown){
            console.log(errorThrown);
          }
        });

      }

      $("#botonCompletaInfo").on("click",obtieneDatos); //Refresca tabla

        function borraFila (id) {

        event.preventDefault();
        $.ajax({
          method: "DELETE",
          contentType: "application/json; charset=utf-8",
          url: "http://web-unicen.herokuapp.com/api/delete/"+id,
          success: function(){
            obtieneDatos();
          },
          error:function(jqxml, status, errorThrown){
            console.log(errorThrown);
          }
        });
      }

      $(".tablaTemporada").on('click','.botonEliminar', function () {
          var id = $(this).attr("idElimina");
          borraFila(id);
        });




  } );
