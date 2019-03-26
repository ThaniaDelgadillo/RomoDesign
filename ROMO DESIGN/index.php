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
    <script src="js/jquery.validate.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $('#preloader').fadeOut('slow');
  $('body').css({'overflow':'visible'});
})
</script>

</head>
<body>
<div id="preloader">
    <div id="loader">&nbsp;</div>
</div>
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
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Estampados</a></li>
        <li><a href="#">Diseño Gráfico</a></li>
        <li><a href="#">Impresión Digital</a></li>
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
        <img src="IMG/romo5.jpg" width="50%" height="50%" alt="Image>
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
  <h2>Lo que hacemos</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="IMG/marke.jpg" class="img-responsive"  style="width:100%" alt="Image">
      <b><h3>Marketing</h3>
        <h5> Te ayudaremos a crear la diferencia a nivel profesional lo cual te asegurará más clientes </h5>
    </div>
    <div class="col-sm-4"> 
      <img src="IMG/camisas.jpg" class="img-responsive" style="width:100%" alt="Image">
      <h3>Estampados</h3>  
      <h5> Podremos ayudarte a plasmar los diseños que tengas en mente en casi cualquier textura </h5>
    </div>
    <div class="col-sm-4">
      <img src="IMG/grafico.jpg"  class="img-responsive" style="width:100%" alt="Image">
      <h3>Diseño Gráfico</h3>
      <h5> Crearemos para ti herramientas que te den a conocer profesionalmente con diseños de calidad </h5>
    </div>
    <div class="col-sm-4">
      <img src="IMG/digital.jpg"  class="img-responsive" style="width:100%" alt="Image">
      <h3>Diseño Digital</h3></b>
      <h5> Haremos de tus ideas una realidad, haciendo uso de la tecnología para poderte abrir a un mayor mercado. </h5>
    </div>
  <!--columanas de mas

    <div class="col-sm-4">
      <div class="well">
       <p>Contamos con excelentes precios para ti.</p>
      </div>
      <div class="well">
       <p>Ver más..</p>
      </div>
    </div>
  </div>
</div> -->
 <!-- se hara el script para validar el formulario 
 todos los form son del mismo nombre de el form principal 
 -->
<!--<script>
  $("#formRegistro").validate({
    rules: { 
      formNombre: {
        required: true,
      },
      formEmail: {
        required: true
      }
    }
  })
</script>  -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Registro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="#" method="get" onsubmit="validarForm()">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
                                     required>

                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                          </div>
                          <div class="form-group">
                              <label for="tel">Tel</label>
                              <input type="tel" class="form-control" id="tel"
                                     placeholder="Mobile" required onkeypress="solonumeros(event);">
                          </div>
                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                     required>
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                          <div id="displayError">

                          </div>


                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>


</body>
</html>
