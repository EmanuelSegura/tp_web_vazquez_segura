<?php
/* Smarty version 3.1.30, created on 2016-10-20 04:34:18
  from "C:\xampp\htdocs\proyectos\WEB2\bb\templates\modificarCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58082d2af420c6_42905578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '493d2fff5d9105426d1a3102144ea0f6025c1bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\bb\\templates\\modificarCategoria.tpl',
      1 => 1476930849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082d2af420c6_42905578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
  <title>Breaking Bad</title>
</head>
<body>

  <h2>Modificar Categoria</h2>

  <form class="form-horizontal" action="index.php?action=editarCategoria" method="POST">
    <div class="form-group">
      <br>
      <label for="inputNombreCat" class="control-label col-xs-2 col-md-2">Titulo</label>
      <div class="col-xs-12 col-md-6">
        <input type="hidden" name="id_categoria" value="<?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
">
        <input type="text" class="form-control"  name="inputNombreCat">
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-6">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </form>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="js/comportamiento.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/pRender.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/editar.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
