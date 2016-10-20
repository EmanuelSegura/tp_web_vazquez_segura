<?php
/* Smarty version 3.1.30, created on 2016-10-20 01:05:37
  from "C:\xampp\htdocs\proyectos\WEB2\bb\templates\modificar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807fc41ce30a2_28025730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a1fc57c2aa0e79404881508fbdca62727825b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\bb\\templates\\modificar.tpl',
      1 => 1476918321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807fc41ce30a2_28025730 (Smarty_Internal_Template $_smarty_tpl) {
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

  <h2>Modificar Noticia</h2>

  <form class="form-horizontal" action="index.php?action=agregarNoticia" method="POST">
    <div class="form-group">
      <br>
      <label for="inputTitulo" class="control-label col-xs-2 col-md-2">Titulo</label>
      <div class="col-xs-12 col-md-6">
        <input type="text" class="form-control"  name="inputTitulo" placeholder="Titulo">
      </div>
    </div>
    <div class="form-group">
      <label for="imagesToUpload" class="control-label col-xs-2 col-md-2">Imagenes</label>
      <input type="file" name="imagen" id="imagen" multiple/>

    </div>
    <div class="form-group">
      <label for="inputDescripcion" class="control-label col-xs-2 col-md-2" >Descripcion</label>
      <div class="col-xs-12 col-md-6">
        <input type="text" class="form-control" placeholder="Descripcion" name="inputDescripcion">
      </div>
    </div>

    <div class="form-group col-xs-12 col-md-6">
      <label for="sel1">Categorias:</label>
      <select name="inputCategoria" class="form-control" id="idCategoria">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </select>
    </div>

    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-6">
        <button type="submit" id="enviarFormBtn" class="btn btn-primary">Enviar</button>
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

</body>
</html>
<?php }
}
