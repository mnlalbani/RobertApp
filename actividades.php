
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <!-- ////////////////////////// Fonts Google /////////////////////////// -->

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  
  
  <!-- ////////////////////////// CSS /////////////////////////// -->
  
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/secciones.css">
  <link rel="stylesheet" href="css/768px.css">
  <link rel="stylesheet" href="css/1200px.css">
  
  <!-- ////////////////////////// js /////////////////////////// -->

  <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="js/modal.function.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="js/function.smothscrolling.js"></script>
  <script type="text/javascript" src="js/function.googlemaps.js"></script>
  <script type="text/javascript" src="js/photo-gallery.js"></script>
  <script src="js/flipclock.min.js"></script>
  <script src="js/window.js"></script>
  <script src="js/shrink.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body data-spy="scroll" data-target="#navegacion">
	
	<!-- ////////////////////////// Nav /////////////////////////// -->
	
	<header class="navbar-index">
      <div class="container-fluid container-fluidnav clearfix">
          <div id="logo">
              <img src="img/logonuevo.png" alt="">
          </div>
          <nav>
              <a href="">INICIO</a>
              <a href="">NOSOTROS</a>
              <a href="">QUE ES ROTARY?</a>
              <a href="">CENTRO MEDICO</a>
              <a href="">ACTIVIDADES</a>
              <a href="">CONTACTOS</a>
          </nav>
      </div>
  </header>
  
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
        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti1.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>

        </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti2.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti3.jpg">
            <div class="caption">
              <div class="blur"<h2>+</h2></div>
                <div class="caption-text">
                </div>
                </li>
        
        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti4.jpg">
            <div class="caption">
              <div class="blur"><h2>+</h2></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
            <img class="img-responsive" src="img/noti5.jpg">
              <div class="caption">
                <div class="blur"></div>
                  <div class="caption-text">    
                  </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti6.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>
        
          <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti7.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
          </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti8.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>
      
        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
          <img class="img-responsive" src="img/noti9.jpg">
            <div class="caption">
              <div class="blur"></div>
                <div class="caption-text">
                </div>
        </li>

        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-act">
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
    <div class="row">
      <div class="col-md-12">
        <div class="icon center-block">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-instagram"></i>
        </div>
        <hr>
        <div class="text-footer">
          <h2>Todos los derechos reservados. Rotary Cumaná</h2>
        </div>
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