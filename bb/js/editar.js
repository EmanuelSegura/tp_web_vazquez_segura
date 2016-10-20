$(".editar").click(function(event){
    event.preventDefault();
    var url=$(this).attr("href");
    window.open(url,"Modificar","width=800,height=600,menubar=no")
  });
