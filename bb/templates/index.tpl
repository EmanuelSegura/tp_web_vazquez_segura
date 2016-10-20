<!DOCTYPE html>
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
  <header class="mainHeader">
    <img src="images/logo_bb.png" class="img-responsive" alt="Logo de Breaking Bad" />
  </header>
  <nav class="navbar navbar-default">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="btnTraerNoticias" class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li id="btnCargarTemporadas"><a href="#">Temporadas</a></li>
        <li id="btnCargarReparto"><a href="#">Reparto</a></li>
        <li id="btnCargarJuego"><a href="#">Meth Game</a></li>
        <li id="btnCargarContacto"><a href="#">Contacto</a></li>
      </ul>


    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
    <div class="row">
    <div class="col-sm-9" id="ajaxContent">
      <!--Contenido Ajax -->



    </div>
  <div class="col-sm-3">
    <aside class="social">
 			<ul>
 				<li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-youtube"></span></a></li>
        <li><a href="#"><span class="icon-share"></span></a></li>
 			</ul>
 		</aside>

    <aside class="thumbnail">
      <article>
    		<h2>Más visitados</h2>
  			<ol>
  				<li><a href="#">Miedo en un puñado de polvo (Breaking Bad, 5.13.)</a></li>
          <br>
  				<li><a href="#">Alrededor de las ruinas de ese colosal naufragio (Breaking Bad, 5.14.)</a></li>
          <br>
          <li><a href="#">Hello, Carol (Breaking Bad,5.9.)</a></li>
          <br>
          <li><a href="#">Miedo en un puñado de polvo (Breaking Bad, 5.13.)</a></li>
          <br>
          <li><a href="#">La hora de Skyler (Breaking Bad, 5.18.)</a></li>
          <br>
          <li><a href="#">Simplemente llevame a casa (Breaking Bad, 5.13.)</a></li>
          <br>
          <li><a href="#">Problem dog. ¿El fin de Jessie?</a></li>
          <br>
  			</ol>
   		</article>
    </aside>
  </div>
  </div>
  </div>
    <div class="col-sm-12">
      <footer class="mainFooter">
        <p class="text-center">
            Copyright © 2008-2016 AMC Network Entertainment LLC. All rights reserved.
        </p>
      </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/comportamiento.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/pRender.js"></script>

  </body>
</html>
