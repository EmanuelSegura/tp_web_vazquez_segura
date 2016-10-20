<?php
class NoticiasModel {

  private $noticias;
  private $db;

  function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=breakingbad;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function traerNoticias(){
    $request = $this->db->prepare("SELECT * FROM noticia");
    $request->execute();
    return $request->fetchAll();
  }

  function traerCategorias(){
    $request = $this->db->prepare("SELECT * FROM categoria");
    $request->execute();
    return $request->fetchAll();
  }

  function agregarNoticia($titulo,$descripcion,$categoria){
    $consulta = $this->db->prepare('INSERT INTO noticia(titulo,descripcion,id_categoria) VALUES(?,?,?)');
    $consulta->execute(array($titulo,$descripcion,$categoria));
  }

  function borrarNoticia($id_noticia){
    $request= $this->db->prepare('DELETE FROM noticia WHERE id_noticia=?');
    $request->execute(array($id_noticia));
  }

  function modificarNoticia($id_noticia, $titulo, $descripcion, $id_categoria){
    $request= $this->db->prepare('UPDATE noticia SET titulo=?, descripcion=?, id_categoria=? WHERE id_noticia=?');
    $request->execute(array($titulo, $descripcion, $id_categoria,$id_noticia));
  }

  function traerNoticiasCat($id_categoria){
    $consulta = $this->db->prepare("SELECT * FROM noticia where id_categoria=?");
    $consulta->execute(array($id_categoria));
    return $consulta->fetchAll();
}

}
?>
