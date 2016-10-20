<?php
class ContactoModel {

  private $noticias;
  private $db;

  function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=breakingbad;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function traerMails(){
    $request = $this->db->prepare("SELECT * FROM contacto");
    $request->execute();
    return $request->fetchAll();
  }

  function enviarFormulario($nombre, $email, $asunto, $mensaje) {
      $datosUsuario = $this->db->prepare('INSERT INTO contacto(nombre_contacto,email_contacto,asunto_contacto, mensaje_contacto) VALUES(?,?,?,?)');
      $datosUsuario->execute(array($nombre, $email, $asunto, $mensaje));
  }

}
?>
