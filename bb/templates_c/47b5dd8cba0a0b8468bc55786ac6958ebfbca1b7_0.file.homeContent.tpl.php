<?php
/* Smarty version 3.1.30, created on 2016-10-17 20:03:49
  from "/var/www/html/bb/templates/homeContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580558d5ca1dc5_79903903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b5dd8cba0a0b8468bc55786ac6958ebfbca1b7' => 
    array (
      0 => '/var/www/html/bb/templates/homeContent.tpl',
      1 => 1476745375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580558d5ca1dc5_79903903 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="thumbnail">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
  <div class="caption">
    <section>
    <article>
    <header>
        <h2><a  href="#"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</a></h2>
      </header>
     <img src="images/ep1.jpg" class="img-responsive" alt="Walt y Jessie hablan con Mike">
     <br>
     <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</p>
       <br>
       <button  href="#" class="btn btn-primary sharp">Leer Más</button>
       <a class="glyphicon glyphicon-trash" href="index.php?action=borrarNoticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a>
       </article>
       </section>
     </div>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>
<?php }
}
