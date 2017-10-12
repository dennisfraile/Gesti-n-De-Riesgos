<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Gestion de Riesgos::@yield('title')::</title>

    <!-- Bootstrap -->

    
  </head>
  <body>
     <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" href="#"> <img src="img/logo.png" alt=""/> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Principal</a></li>
            <li><a href="tratamientoriesgo">Tratamiento de Riesgos</a></li>
            <li><a href="tipotratamiento">Tipos de Tratamiento</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">
      @yield('content')


    </div> <!-- /container -->
    </body>
</html>