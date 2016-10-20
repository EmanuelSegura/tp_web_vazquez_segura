<?php
  require('view/WebView.php');
  require('model/CategoriaModel.php');
  require('model/ContactoModel.php');
  require('model/NoticiasModel.php');

  class WebController {
    private $vista;
    private $modeloCategoria;
    private $modeloContacto;
    private $modeloNoticia;

    function __construct()
    {
      $this->vista = new WebView();
      $this->modeloCategoria = new CategoriaModel();
      $this->modeloContacto = new ContactoModel();
      $this->modeloNoticia = new NoticiasModel();
    }

    function mostrarIndex(){
      $this->vista->mostrar_index();
    }

    function mostrarHome(){
      $this->vista->mostrar_home();
    }

    function mostrarReparto(){
      $this->vista->mostrar_listaPjs();
    }

    function mostrarTemporadas(){
      $this->vista->mostrar_temporadas();
    }

    function mostrarGame(){
      $this->vista->mostrar_game();
    }

    function mostrarContacto(){
      $this->vista->mostrar_contacto($this->modeloContacto->traerMails());
    }

    function enviarFormulario(){
      if(($_REQUEST['inputNombre'] != "" ) && ($_REQUEST['inputEmail'] != "" ) && ($_REQUEST['inputAsunto'] != "" ) && ($_REQUEST['inputMensaje'] != "" )){
        $this->modeloContacto->enviarFormulario($_REQUEST['inputNombre'],$_REQUEST['inputEmail'],$_REQUEST['inputAsunto'],$_REQUEST['inputMensaje']);
        $this->mostrarIndex();
      }
      else{
        echo "falto un dato";
      }
    }

    function traerNoticias(){
      $this->vista->mostrarNoticias($this->modeloNoticia->traerNoticias(), $this->modeloNoticia->traerCategorias());
    }

    function agregarNoticia(){
      $this->modeloNoticia->agregarNoticia($_REQUEST['inputTitulo'],$_REQUEST['inputDescripcion'],$_REQUEST['inputCategoria']);
      $this->mostrarIndex();
    }

    function borrarNoticia(){
      if(isset($_REQUEST['id_noticia'])){
        $this->modeloNoticia->borrarNoticia($_REQUEST['id_noticia']);
        $this->mostrarIndex();
      }else{
        // Display the Form and the Submit Button
      }
    }

    function mostrarEditarNoticia(){
      $this->vista->mostrar_modificar($_REQUEST['id_noticia'],$_REQUEST['titulo'],$_REQUEST['descripcion'],$_REQUEST['id_categoria'],$this->modeloNoticia->traerCategorias());

    }

    function modificarNoticia(){
      $this->modeloNoticia->modificarNoticia($_REQUEST['id_noticia'],$_REQUEST['inputTitulo'],$_REQUEST['inputDescripcion'],$_REQUEST['inputCategoria']);
    }

    function ordenarPorCategoria(){
      $this->vista->mostrarPorCat($this->modeloNoticia->traerNoticiasCat($_REQUEST['id_categoria']),$this->modeloNoticia->traerCategorias());
      //$this->mostrarIndex();
    }

    function agregarCategoria(){
      $this->modeloCategoria->agregarCategoria($_REQUEST['inputNombreCat']);
      $this->mostrarIndex();
    }

    function borrarCategoria(){
        $this->modeloCategoria->borrarCategoria($_REQUEST['id_categoria']);
        $this->mostrarIndex();
    }

    function mostrarEditarCategoria(){
      $this->vista->mostrar_modificar_categoria($_REQUEST['id_categoria']);
    }

    function editarCategoria(){
      $this->modeloCategoria->editarCategoria($_REQUEST['id_categoria'],$_REQUEST['inputNombreCat']);
      $this->mostrarIndex();
    }

  }
 ?>
