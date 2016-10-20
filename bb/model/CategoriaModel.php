<?php
class CategoriaModel{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=breakingbad;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$this->tareas = ['Tarea 11','Tarea 21','Tarea 31'];
  }

  function agregarCategoria($nombre){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($nombre));
  }

  function borrarCategoria($id_categoria){
    $request= $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
    $request->execute(array($id_categoria));
  }


  function editarCategoria($id_categoria, $nombre){
    $request= $this->db->prepare('UPDATE categoria SET nombre=? WHERE id_categoria=?');
    $request->execute(array($nombre, $id_categoria));
  }
}
 ?>
