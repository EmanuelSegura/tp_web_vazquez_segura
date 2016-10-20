<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:26:53
  from "C:\xampp\htdocs\proyectos\WEB2\bb\templates\contactoContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e51d10fd36_60879783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bedf9576181165e00b0e82275e793d539a99631' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\bb\\templates\\contactoContent.tpl',
      1 => 1476912406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807e51d10fd36_60879783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <article class="thumbnail">
      <h2>Envia un mail </h2>
    <form class="form-horizontal" action="index.php?action=enviarFormulario" method="POST">
          <div class="form-group">
            <label for="inputNombre" class="control-label col-xs-2 col-md-2">Nombre</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control"  name="inputNombre" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2 col-md-2" >Email</label>
            <div class="col-xs-12 col-md-6">
              <input type="email" class="form-control" placeholder="Email" name="inputEmail">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAsunto" class="control-label col-xs-2 col-md-2">Asunto</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control" placeholder="Asunto" name="inputAsunto">
            </div>
          </div>
          <div class="form-group">
            <label for="inputMensaje" class="control-label col-xs-2 col-md-2">Mensaje</label>
            <div class="col-xs-12 col-md-6">
              <input type="text" class="form-control" placeholder="Ingrese un mensaje" name="inputMensaje" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-6">
              <button type="submit" id="enviarFormContacto" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </article>

      <div class="thumbnail">
      <section>
        <article>
          <h2>Mails recibidos </h2>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mails']->value, 'mail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
?>
            <p>
              <?php echo $_smarty_tpl->tpl_vars['mail']->value['nombre_contacto'];?>

              <br>
              <?php echo $_smarty_tpl->tpl_vars['mail']->value['email_contacto'];?>

              <br>
              <?php echo $_smarty_tpl->tpl_vars['mail']->value['asunto_contacto'];?>

              <br>
              <?php echo $_smarty_tpl->tpl_vars['mail']->value['mensaje_contacto'];?>

            </p>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </article>
      </section>
      </div>
</section>
<?php }
}
