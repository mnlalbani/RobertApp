<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <!-- ////////////////////////// Fonts Google /////////////////////////// -->

  
  <!-- ////////////////////////// CSS /////////////////////////// -->
  
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/secciones.css">
  <link rel="stylesheet" href="css/768px.css">
  <link rel="stylesheet" href="css/1200px.css">
  <link rel="stylesheet" href="css/vistamovil.css">

  <link href="css/scrolling-nav.css" rel="stylesheet">
  
  <!-- ////////////////////////// js /////////////////////////// -->

  <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/modal.function.js"></script>
  <script type="text/javascript" src="js/photo-gallery.js"></script>
  
  <script type="text/javascript" src="js/main.js"></script>
  <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
</head>
<body data-spy="scroll" data-target="#navegacion">
	
	<!-- ////////////////////////// Nav /////////////////////////// -->
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid container-arre">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img class="logo-lg visible-lg visible-md hidden-xs" src="img/logonuevoa.png" alt="">
                  <img class="logo-xs visible-xs hidden-lg hidden-md" src="img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="index.php">INICIO</a>
                    </li>
                    
                    <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS</a>
          <ul class="dropdown-menu">
            <li ><a href="nosotros.php">NOSOTROS</a></li>
            <li ><a href="historia.php">HISTORIA</a></li>
            <li><a href="directiva.php">DIRECTIVA</a></li>
            
          </ul>
        </li>


                    <li>
                        <a class="page-scroll visible-md hidden-lg" href="rotary.php">ROTARY</a>
                        <a class="page-scroll visible-lg visible-xs hidden-md" href="rotary.php">¿QUE ES  ROTARY?</a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="index.php">ACTIVIDADES</a>
                    </li>
                    <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALUD</a>
          <ul class="dropdown-menu">
            <li><a href="consultas.php">CONSULTAS</a></li>
            <li><a href="rehabilitacion.php" style="font-size: 11px; padding:10px 0 10px 0;">REHABILITACION</a></li>
            <li><a href="protesis.php">PROTESIS</a></li>
            
          </ul>
        </li>
                  
                    <li>
                        <a class="page-scroll" href="index.php">CONTACTOS</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  
  <!-- /////////////////// PORTADA /////////////////// -->

  <section class="portada">
    <div class="row">
      <div class="col-md-12">
        
        <div class="imagen-top-noticias">
          <div class="overlay-top"><h2>nuestras actividades</h2></div>
        </div>
      </div>
    </div>
  </section>
  
  
	<!-- ////////////////////////// DESCRIPCION ACTIIVIDAD /////////////////////////// -->

	<section id="caratula">
	  <?php include_once("php/mostrar_noticia.php"); ?>
	</section>
  
  <!-- /////////////////// GALERIA /////////////////// -->

  <section id="photos">
    
    	<ul class="row caption-style-1">
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti1.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>

        </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti2.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti3.jpg">
            <div class="caption">
              <div class="blur"<h2>+</h2></div>
                <div class="caption-text">
                </div>
                </li>
        
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti4.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
            <img class="img-responsive" src="img/noti5.jpg">
              <div class="caption">
                <div class="blur"></div>
                  <div class="caption-text">    
                  </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti6.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>
        
          <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti7.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
          </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti8.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>
      
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti9.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act">
          <img class="img-responsive" src="img/noti10.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>
      </ul>             
    </div> 
  </section>
  <section id="footer"> 
        <div class="container">
        <div class="iconos">
          <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
        <div class="text-center-foot">
          <h2>© 2016 Rotary Cumana</h2>
        </div>
        <div class="text-footer">
          
          <h2><?php include("php/enlace_admin.php"); ?></h2>
          <h2><?php include_once('php/connection.php');?></h2>
        </div>
        </div>
  </section>
  <!-- /////////////////// MODAL GALERIA /////////////////// -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>       
        <div class="modal-body">                
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>

</body>
</html>