<?php
  require('libs/Smarty.class.php');

  class WebView {
    private $smarty;

    function __construct (){
      $this->smarty = new Smarty(); // Crea el objeto smarty
    }

    function mostrar_index(){
      $this->smarty->display('index.tpl');
    }

    function mostrarNoticias($noticias, $categorias){
      $this->smarty->assign('noticias', $noticias);
      $this->smarty->assign('categorias', $categorias);
      $this->smarty->display('homeContent.tpl');
    }

    function mostrarPorCat($noticias, $categorias){
      //$this->smarty->assign('errores', $this->errores);
      $this->smarty->assign('noticias', $noticias);
      $this->smarty->assign('categorias', $categorias);
      $this->smarty->display('homeContent.tpl');
    }

    function mostrar_listaPjs(){
      $this->smarty->display('repartoContent.tpl');
    }

    function mostrar_temporadas(){
      $this->smarty->display('temporadasContent.tpl');
    }

    function mostrar_game(){
      $this->smarty->display('gameContent.tpl');
    }

    function mostrar_contacto($mails){
      $this->smarty->assign('mails', $mails);
      $this->smarty->display('contactoContent.tpl');
    }

    function mostrar_modificar($id_noticia,$titulo,$descripcion,$id_categoria, $categorias){
      $this->smarty->assign('id_noticia',$id_noticia);
      $this->smarty->assign('titulo',$titulo);
      $this->smarty->assign('descripcion',$descripcion);
      $this->smarty->assign('id_categoria',$id_categoria);
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('modificarNoticia.tpl');
    }

    function mostrar_modificar_categoria($id_categoria){
      $this->smarty->assign('id_categoria',$id_categoria);
      $this->smarty->display('modificarCategoria.tpl');
    }

  }
?>
