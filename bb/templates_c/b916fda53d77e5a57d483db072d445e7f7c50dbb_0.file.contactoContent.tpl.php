<?php
/* Smarty version 3.1.30, created on 2016-10-11 00:15:57
  from "C:\xampp\htdocs\proyectos\WEB2\Sitio Web - Segura Emanuel - Vazquez Rodrigo\templates\contactoContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fc131d9a2794_57182250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b916fda53d77e5a57d483db072d445e7f7c50dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\Sitio Web - Segura Emanuel - Vazquez Rodrigo\\templates\\contactoContent.tpl',
      1 => 1476137743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fc131d9a2794_57182250 (Smarty_Internal_Template $_smarty_tpl) {
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
