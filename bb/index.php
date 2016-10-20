<?php
include_once 'controller/WebController.php';
include_once 'config/Config.php';

if(!array_key_exists(Config::$ACTION, $_REQUEST) ||
$_REQUEST[Config::$ACTION] == Config::$ACTION_DEFAULT){
  $controller = new WebController();
  $controller->mostrarIndex();
}else{
  switch ($_REQUEST[Config::$ACTION]) {
    case Config::$ACTION_VER_HOME:
    $Controller = new WebController();
    $Controller->traerNoticias();
    break;

    case Config::$ACTION_VER_REPARTO:
    $repartoController = new WebController();
    $repartoController->mostrarReparto();
    break;

    case Config::$ACTION_VER_TEMPORADAS:
    $temporadasController = new WebController();
    $temporadasController->mostrarTemporadas();
    break;

    case Config::$ACTION_VER_JUEGO:
    $juegoController = new WebController();
    $juegoController->mostrarGame();
    break;

    case Config::$ACTION_VER_CONTACTO:
    $contactoController = new WebController();
    $contactoController->mostrarContacto();
    break;

    case Config::$ACTION_ENVIAR_FORMULARIO:
    $enviarFormController = new WebController();
    $enviarFormController->enviarFormulario();
    break;

    case Config::$ACTION_BORRAR_NOTICIAS:
    $borrarNotController = new WebController();
    $borrarNotController->borrarNoticia();
    break;

    case Config::$ACTION_ORDENAR_POR_CATEGORIA:
    $ordenarCatController = new WebController();
    $ordenarCatController->ordenarPorCategoria();
    break;

    case Config::$ACTION_AGREGAR_NOTICIA:
      $NoticiaController = new WebController();
      $NoticiaController->agregarNoticia();
    break;

    case Config::$ACTION_MOSTRAR_EDITAR_NOTICIA:
      $NoticiaController = new WebController();
      $NoticiaController->mostrarEditarNoticia();
    break;

    case Config:: $ACTION_EDITAR_NOTICIA:
      $NoticiaController = new WebController();
      $NoticiaController->modificarNoticia();
    break;

    case Config:: $ACTION_AGREGAR_CATEGORIA:
      $CategoriaController = new WebController();
      $CategoriaController->agregarCategoria();
    break;

    case Config:: $ACTION_BORRAR_CATEGORIA:
      $CategoriaController = new WebController();
      $CategoriaController->borrarCategoria();
    break;

    case Config:: $ACTION_MOSTRAR_EDITAR_CATEGORIA:
      $CategoriaController = new WebController();
      $CategoriaController->mostrarEditarCategoria();
    break;

    case Config:: $ACTION_EDITAR_CATEGORIA:
      $CategoriaController = new WebController();
      $CategoriaController->editarCategoria();
    break;

    default:
    echo 'No se encontró la pagina solicitada';
    break;
  }
}



?>
