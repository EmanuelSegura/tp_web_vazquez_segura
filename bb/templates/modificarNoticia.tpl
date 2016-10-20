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

  <form class="form-horizontal" action="index.php?action=modificarNoticia&id_noticia={$id_noticia}" method="POST">
    <div class="form-group">
      <br>
      <label for="inputTitulo" class="control-label col-xs-2 col-md-2">Titulo</label>
      <div class="col-xs-12 col-md-6">
        <input type="text" class="form-control"  name="inputTitulo" placeholder="{$titulo}">
      </div>
    </div>
    <div class="form-group">
      <label for="imagesToUpload" class="control-label col-xs-2 col-md-2">Imagenes</label>
      <input type="file" name="imagen" id="imagen" multiple/>

    </div>
    <div class="form-group">
      <label for="inputDescripcion" class="control-label col-xs-2 col-md-2" >Descripcion</label>
      <div class="col-xs-12 col-md-6">
        <input type="text" class="form-control" placeholder="{$descripcion}" name="inputDescripcion">
      </div>
    </div>

    <div class="form-group col-xs-12 col-md-6">
      <label for="sel1">Categorias:</label>
      <select name="inputCategoria" class="form-control" id="idCategoria">
        {foreach $categorias as $categoria}
        <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
        {/foreach}
      </select>
    </div>

    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-6">
        <button type="submit" id="btnModificarNoticia" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </form>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/comportamiento.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/pRender.js"></script>
  <script src="js/editar.js"></script>
</body>
</html>
