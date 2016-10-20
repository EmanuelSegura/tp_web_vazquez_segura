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
        <input type="hidden" name="id_categoria" value="{$id_categoria}">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/comportamiento.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/pRender.js"></script>
  <script src="js/editar.js"></script>
</body>
</html>
