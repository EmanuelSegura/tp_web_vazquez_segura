
/* Variables */
var valor=0;
var resultado=0;


/*Funcion que calcula si el usuario llega al monto pedido en el juego.  */
function  getmoney(valor){
  if (resultado < 3000000){
  document.getElementById("crack_meth").play(); /*Sonido rotura de vidrio  */
  resultado=resultado+valor;
  document.getElementById("resultado").innerHTML ="Dinero: US$ "+resultado; /*Inserta resultado  */
} else {
  document.getElementById("resultado").innerHTML= "Walter, ya tienes demasiado dinero como para llevarle a tu familia. Quiero creer que estas siendo transparente en este negocio. Mejor vete a casa. Atte. Gustavo Fring" /*Mensaje al llegar al monto  */
}
}
