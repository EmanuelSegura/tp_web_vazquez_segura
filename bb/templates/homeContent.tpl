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
            {foreach $categorias as $categoria}
            <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
            {/foreach}
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
            {foreach $categorias as $categoria}
            <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
            {/foreach}
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
        <div class="form-group col-xs-offset-2 col-xs-6">
          <label for="sel1">Categorias:</label>
          <select name="id_categoria" class="form-control">
            {foreach $categorias as $categoria}
            <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
            {/foreach}
          </select>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-2 col-xs-6">
            <button type="submit" href="index.php?action=mostrarEditarCategoria&id_categoria=´{$id_categoria}" class="btn btn-primary">Editar Categoria</button>
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
      {foreach $categorias as $categoria}
      <li><a href="index.php?action=ordenarPorCategoria&id_categoria={$categoria['id_categoria']}">{$categoria['nombre']}</a></li>
      <a class="glyphicon glyphicon-remove" href="index.php?action=borrar_categoria&id_cat={$categoria['id_categoria']}"></a>
      {/foreach}

    </ul>
  </div>

</form>
<div class="thumbnail">
  {foreach $categorias as $categoria}
  {foreach $noticias as $noticia}
  {if $noticia['id_categoria'] == $categoria['id_categoria']}
  <div class="caption">
    <section>
      <article>
        <header>

          <h2><a  href="#">{$noticia['titulo']}</a></h2>
          <h3>categoria: {$categoria['nombre']}</h3>
        </header>
        <img src="images/ep1.jpg" class="img-responsive" alt="Walt y Jessie hablan con Mike">
        <br>
        <p>{$noticia['descripcion']}</p>
        <br>
        <button  href="#" class="btn btn-primary sharp">Leer Más</button>
        <a href="index.php?action=borrarNoticia&id_noticia={$noticia['id_noticia']}">borrar</a>
        <a href="index.php?action=mostrarEditarNoticia&id_noticia={$noticia['id_noticia']}&titulo={$noticia['titulo']}&descripcion={$noticia['descripcion']}&id_categoria={$noticia['id_categoria']}" class="editar" aria-hidden="true"> editar </a>
      </article>
    </section>
  </div>
  {/if}
  {/foreach}
  {/foreach}
</div>

<script src="js/editar.js"></script>
