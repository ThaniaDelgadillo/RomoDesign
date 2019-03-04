<?php 


include("formularios.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ROMO DESIGN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link href="CSS/style.css" rel="stylesheet">
   <link href="CSS/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div class="icon-bar">
  <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/?lang=es" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.gmail.com/" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.whatsapp.com/" class="whats"><i class="fa fa-whatsapp"></i></a>
  <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <a class="navbar-brand " align= "right" href="index.php"><img src="IMG/logo.png"  width="100" height="100"></a>                
      </button>
     
    </div>


    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">¿Quienes somos?</a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"  data-toggle="modal" data-target="#iniciarsesion"><span class="glyphicon glyphicon-log-in"></span>Iniciar sesión</a></li>
        <li><a href="#"  data-toggle="modal" data-target="#registro"><span class=""></span> Registrarse</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- IIDNICADORES-->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- CARRUSEL -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="IMG/romo2.jpg" width="50%" height="50%" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="IMG/romo1.jpg" width="500%" height="500%"alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>



  
<div class="container text-center">    
  <h3>Lo que hacemos</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="IMG/marke.jpg" class="img-responsive"  style="width:100%" alt="Image">
      <b><p>Marketing</p>
    </div>
    <div class="col-sm-4"> 
      <img src="IMG/estampado.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Estampados</p>    
    </div>
    <div class="col-sm-4">
      <img src="IMG/grafico.jpg"  class="img-responsive" style="width:100%" alt="Image">
      <p>Diseño Gráfico</p>
    </div>
    <div class="col-sm-4">
      <img src="IMG/digital.jpg"  class="img-responsive" style="width:100%" alt="Image">
      <p>Diseño Digital</p></b>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Ver más..</p>
      </div>
      <div class="well">
       <p>Ver más..</p>
      </div>
    </div>
  </div>
</div>








<div class="footer">
      <p><font color="#aab8c2" face="Segoe UI" size="2"> Empresa 100% Mexicana, con productos personalizados.</p>
  </div> 


</body>
</html>
