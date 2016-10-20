<?php
/* Smarty version 3.1.30, created on 2016-10-20 04:45:35
  from "C:\xampp\htdocs\proyectos\WEB2\bb\templates\homeContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58082fcf6e97b8_74535293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba88576f6ea2cf6a2d867bba5367966ad9d8efdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\bb\\templates\\homeContent.tpl',
      1 => 1476931531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082fcf6e97b8_74535293 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="thumbnail">
  <section>
    <article>
      <h2>Agrega tu noticia</h2>

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

        <div class="control-label col-xs-2 col-md-2">
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

    </article>

    <article>
      <h2>Agregar categoria</h2>

      <form class="form-horizontal" action="index.php?action=agregarCategoria" method="POST">
        <div class="form-group">
          <br>
          <label for="inputNombreCat" class="control-label col-xs-2 col-md-2">Nombre</label>
          <div class="col-xs-12 col-md-6">
            <input type="text" class="form-control"  name="inputNombreCat" placeholder="Nombre de la categoria">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-2 col-xs-6">
            <button type="submit" class="btn btn-primary">Agregar Categoria</button>
          </div>
        </div>
      </form>

      <h2>Borrar categoria</h2>

      <form class="form-horizontal" action="index.php?action=borrarCategoria" method="POST">
        <div class="form-group  col-xs-offset-2 col-xs-6">
          <label for="sel1">Categorias:</label>
          <select name="id_categoria" class="form-control">
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
            <button type="submit" class="btn btn-primary">Borrar Categoria</button>
          </div>
        </div>
      </form>

  <h2>Editar categoria</h2>

      <form class="form-horizontal" action="index.php?action=mostrarEditarCategoria" method="POST">
        <div class="form-group col-xs-offset-3 col-xs-6">
          <label for="sel1">Categorias:</label>
          <select name="id_categoria" class="form-control">
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
            <button type="submit" href="index.php?action=mostrarEditarCategoria&id_categoria=´<?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
" class="btn btn-primary">Editar Categoria</button>
          </div>
        </div>
      </form>

    </article>
  </section>
</div>


<form class="navbar-form navbar-right" role="search" id="btnCategorias">
  <div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Filtro <span class="caret"></span> </button>
    <ul class="dropdown-menu" aria-labelledby="btnCategorias">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <li><a href="index.php?action=ordenarPorCategoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a></li>
      <a class="glyphicon glyphicon-remove" href="index.php?action=borrar_categoria&id_cat=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"></a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
  </div>

</form>
<div class="thumbnail">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
  <?php if ($_smarty_tpl->tpl_vars['noticia']->value['id_categoria'] == $_smarty_tpl->tpl_vars['categoria']->value['id_categoria']) {?>
  <div class="caption">
    <section>
      <article>
        <header>

          <h2><a  href="#"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</a></h2>
          <h3>categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</h3>
        </header>
        <img src="images/ep1.jpg" class="img-responsive" alt="Walt y Jessie hablan con Mike">
        <br>
        <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</p>
        <br>
        <button  href="#" class="btn btn-primary sharp">Leer Más</button>
        <a href="index.php?action=borrarNoticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">borrar</a>
        <a href="index.php?action=mostrarEditarNoticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
&titulo=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
&descripcion=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
&id_categoria=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_categoria'];?>
" class="editar" aria-hidden="true"> editar </a>
      </article>
    </section>
  </div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<?php echo '<script'; ?>
 src="js/editar.js"><?php echo '</script'; ?>
>
<?php }
}
