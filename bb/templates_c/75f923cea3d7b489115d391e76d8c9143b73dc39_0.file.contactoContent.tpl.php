<?php
/* Smarty version 3.1.30, created on 2016-10-17 19:17:09
  from "/var/www/html/bb/templates/contactoContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58054de5b296e3_61215584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f923cea3d7b489115d391e76d8c9143b73dc39' => 
    array (
      0 => '/var/www/html/bb/templates/contactoContent.tpl',
      1 => 1476137744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58054de5b296e3_61215584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <article class="thumbnail">
    <form class="form-horizontal" action="index.php?action=enviarFormulario" method="POST">
          <div class="form-group">
            <label for="inputName" class="control-label col-xs-2 col-md-2" name="inputNombre">Nombre</label>
            <div class="col-xs-12 col-md-6">
              <input type="name" class="form-control" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2 col-md-2" name="inputEmail" >Email</label>
            <div class="col-xs-12 col-md-6">
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAsunto" class="control-label col-xs-2 col-md-2" name="inputAsunto">Asunto</label>
            <div class="col-xs-12 col-md-6">
              <input type="name" class="form-control" placeholder="Asunto">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2 col-md-2" name="inputMensaje" >Mensaje</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control" placeholder="Ingrese un mensaje">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-6">
              <button type="submit" name="enviarFormBtn" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </article>
</section>
<?php }
}
