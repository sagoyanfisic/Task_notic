<?php 
  session_start();
  if (isset($_SESSION['nombre'])) {
    session_unset($_SESSION['nombre']);
  }
?>
<!Doctype html>
<html lang="es">
<head>
     <title>:::Empresa de Gestión && Consultoria  </title>
     <meta charset="UTF-8">
     <link href="estilos/css/bootstrap.css" rel="stylesheet">
     <link href="estilos/css/main.css" rel="stylesheet">
     <script src="estilos/css/jquery.js"></script>
     <script src="estilos/js/bootstrap.js"></script>
</head>
<body>

<div class="container" style="padding-top: 1em;" >
  <nav class="navbar navbar-default" role="navigation"  >
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Management && Consulting</a>
    </div>
  
    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">


      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Documentos</a></li>
        <li><a href="#">Tramites</a></li> 
      </ul>
  
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input value="" placeholder="Busqueda de datos " class="form-control" placeholder="Buscar" type="text">
        </div>
        <button type="submit" class="btn btn-default">Consultar</button>
      </form>

      <ul class="nav navbar-nav"> 
        <li><a href="login.html">Iniciar sesión</a></li>
        <li><a href="registrar.html">Crear usario</a></li>
      </ul>
    </div>
  </nav>
</div>


<section class="intro">
        <div class='overlay'></div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item">
              <img alt="First slide" src="imagen/cons1.jpg">
            </div>
            <div class="item">
              <img alt="Second slide" src="imagen/cons2.jpg">
            </div>
            <div class="item active">
              <img alt="Third slide" src="imagen/cons3.jpg">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <div class="clock"></div>
       <ul>
       </ul>
       
    </section>
<footer>

</footer>
    
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js'></script>
    <script src='js/app/app.js'></script>
    <link rel="stylesheet" type="text/css" href="estilos/css/ionMediaQuery.css">

</body>



</html> 