<?php session_start(); ?>
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
	<!-- ////////////////////////// NAV-XS /////////////////////////// -->

	<nav class="navbar navbar-default navbar-fixed-top hidden-lg visible-xs">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<!-- ////////////////////////// NAV-LG /////////////////////////// -->

	<header class="navbar-index hidden-xs">
	    <div class="container-fluid container-fluidnav clearfix">
	        <div id="logo">
	            <img src="img/logonuevo.png" alt="">
	        </div>
	        <nav>
	            <a href="admin/login.html">INICIO</a>
	            <a href="">NOSOTROS</a>
	            <a href="">QUE ES ROTARY?</a>
	            <a href="">CENTRO MEDICO</a>
	            <a href="">ACTIVIDADES</a>
	            <a href="">CONTACTOS</a>
	        </nav>
	    </div>
	</header>
	

	<!-- ////////////////////////// INICIO /////////////////////////// -->
		
	<section id="inicio">
		<div id="slider-inicio" class="carousel slide">
			<div class="carousel-inner" >
	        	<div class="overlay-slider"></div>
		        <div class="item active">
		        	<div class="fill"></div>
		            	<div class="col-md-12">
			            	<div class="carousel-caption">
			                	<h2>BIENVENIDOS A <br> ROTARY CUMANÁ <br> </h2>
			                	<button href="" type="button" class="boton-slider ">CONOCENOS</button>
			                </div>
		            	</div>
		        </div>


		        
		       
		    </div>
		
	</section>	


	<!-- /////////////////// SOMOS ROTARY /////////////////// -->

	<section id="somos">
		<div class="row">
			<div class="container">
				<h2>Somos Rotary Cumana</h2>
				<p>Somos una organizaciòn que brindamos servicios humanitarios a travès de proyectos orientados a beneficiardd a las comunidades y a la gente de escasos recursos de la ciudad de Cumanà y sectores   cercanos,  y  nos  alienta, como todos los clubes rotarios, elevadas normas de ética en todas las ocupaciones que ayudan a crear buena voluntad y paz en el mundo.
</p>
			</div>
		</div>
	</section>
	
	<!-- /////////////////// SOBRE  /////////////////// -->
	
	<section id="nosotros">
		<div class="row">
			<div class="container">
				<div class="col-md-4 text-center">
					<img src="img/icon.png" alt="">
					<h2>sobre nosotros</h2>
					<p>Conoce todo sobre nuestro club y la labor que realizamos en toda la comunidad. </p>
					<button href="nosotros.html" type="button" class="boton-nosotros">CONOCENOS</button>
				</div>
				<div class="col-md-4  text-center">
					<img src="img/clock.png" alt="">
					<h2>Nuestra historia</h2>
					<p>Repasa todos los hechos importantes a lo largo de nuestra historia.</p>
					<button href="historia.html" type="button" class="boton-nosotros">CONOCENOS</button>	
				</div>
				<div class="col-md-4  text-center">
					<img src="img/user.png" alt="">
					<h2>nuestra directiva</h2>
					<p>Conoce a toda nuestra junta directiva y como  esta </p>
					<button href="directiva.html" type="button" class="boton-nosotros">CONOCENOS</button>
				</div>
			</div>
		</div>	
	</section>
	
	<!-- /////////////////// NOTICIAS /////////////////// -->

	<section id="news">
		<div class="row">
			<div class="recientes">
			</div>
		
			<div class="titulo-prox">
					 <h2>proximas actividades</h2>
			</div>
			<div class="prox">

			</div>
		</div>
	</section>
	
	

	<!-- /////////////////// CENTRO MEDICO /////////////////// -->

	<section class="centro-medico">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>centro rotario de salud</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab velit laudantium dignissimos ipsa molestiae inventore aliquam exercitationem ipsum, temporibus sapiente consequuntur, quas ad, magnam perspiciatis tenetur maxime tempore! Natus.</p>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 padding-med">
				<img src="img/med1.jpg" alt="">
				<div class="text-consul">
					<h2>CONSULTAS EXTERNAS</h2>
					<p>Conoce todas las consultas externas que ofrecemos en nuestro centro de salud.</p>
				<button href="consultasexternas.html" type="button" class="boton-slider">CONOCENOS</button>
				</div>
				

			</div>
			
			<div class="col-md-4 padding-med">
				<img src="img/med2.jpg" alt="">
				<div class="text-consul">
					<h2 style="font-size:24px;">SALA DE FISIATRIA Y REHABILITACION</h2>
					<p>Conoce una de las salas de Rehabilitacion mas novedosas de todo el estado. </p>
				<button href="rehabilitacion.html" type="button" class="boton-slider">CONOCENOS</button>
				</div>
			</div>

			<div class="col-md-4 padding-med">
				<img src="img/med3.jpg" alt="">
				<div class="text-consul">
					<h2 style="font-size:24px;">SALA DE FABRICACION DE PROTESIS</h2>
					<p>Conoce nuestro taller de protesis pionero en ayuda a los discapacitados.</p>
				<button href="protesis.html" type="button" class="boton-slider">CONOCENOS</button>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- /////////////////// MAPA GOOGLE /////////////////// -->

	<section class="contacts">
		<div id="gmap"></div>
	</section>

	<!-- /////////////////// FOOTER /////////////////// -->
	
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
					<?php include("php/enlace_admin.php"); ?>
					<?php include_once('php/connection.php');?>
				</div>
			</div>
		</div>
	</section>
</body>
</html>