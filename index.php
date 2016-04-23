<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ////////////////////////// CSS /////////////////////////// -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/secciones.css">
	<link rel="stylesheet" href="css/768px.css">
	<link rel="stylesheet" href="css/1200px.css">
	<link href="css/scrolling-nav.css" rel="stylesheet">
	<link rel="stylesheet" href="css/vistamovil.css">
	<!-- ////////////////////////// js /////////////////////////// -->

	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="js/modal.function.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/function.smothscrolling.js"></script>
	<script type="text/javascript" src="js/function.googlemaps.js"></script>
	<script type="text/javascript" src="js/photo-gallery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- ////////////////////////// NAV /////////////////////////// -->
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid container-arre">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                	<img class="logo-lg visible-lg visible-md hidden-xs" src="img/logonuevoa.png" alt="">
                	<img class="logo-xs visible-xs hidden-lg hidden-md" src="img/logo.png" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                	<li>
                        <a class="page-scroll" href="#inicio">INICIO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#somos">NOSOTROS</a>
                    </li>
                    <li>
                        <a class="page-scroll visible-md hidden-lg" href="#rotary">ROTARY</a>
                        <a class="page-scroll visible-lg visible-xs hidden-md" href="#rotary">¿QUE ES  ROTARY?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#news">ACTIVIDADES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#medical">SALUD</a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="#contactos">CONTACTOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


	<!-- ////////////////////////// INICIO /////////////////////////// -->
		
	<section id="inicio">
		<div id="slider-inicio" class="carousel slide">
			<div class="carousel-inner" >
	        	<div class="overlay-slider"></div>
		        <div class="item active">
		        	<div class="fill" style="background-image:url('img/slider1.jpg');"></div>
		            	<div class="col-md-12">
			            	<div class="carousel-caption">
			                	
			                </div>
		            	</div>
		        </div>
		        <div class="item">
		        	<div class="fill" style="background-image:url('img/slider2.jpg');"></div>
		            	<div class="col-md-12">
			            	<div class="carousel-caption">
			                	
			                </div>
		            	</div>
		        </div>
		        <div class="item">
		        	<div class="fill" style="background-image:url('img/cumana.jpg');"></div>
		            	<div class="col-md-12">
			            	<div class="carousel-caption">
			                	
			                </div>
		            	</div>
		        </div>


		        
		       
		    </div>
		<a class="left carousel-control" href="#slider-inicio" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#slider-inicio" data-slide="next">
            <span class="icon-next"></span></a>
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
	
	<!-- /////////////////// NOSOTROS  /////////////////// -->
	
	<section id="nosotros">
		<div class="row">
			<div class="container">
				<div class="col-md-4 text-center">
				<a href="nosotros.php">
					<img src="img/icon.png" alt="">
					<h2>sobre nosotros</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sit porro atque dolor adipisci nobis </p>
				</a>		
				</div>
				<div class="col-md-4  text-center">
				<a href="historia.php">	
					<img src="img/clock.png" alt="">
					<h2>Nuestra historia</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sit porro atque dolor adipisci nobis </p>
				</a>		
				</div>
				<div class="col-md-4  text-center">
				<a href="directiva.php">
					<img src="img/user.png" alt="">
					<h2>nuestra directiva</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sit porro atque dolor adipisci nobis </p>
				</a>		
				</div>
			</div>
		</div>	
	</section>
	
	<!-- /////////////////// ROTARY  /////////////////// -->

	<section id="rotary">
		<div class="slider-rot">
			<div class="content-slider"></div>	
		</div>
		<div class="content-rot">
			
			<div class="text-rotary">
				<h2>conoce a <br> rotary <br>internacional</h2>
				<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, adipisicing elit. Ratione, adipisicing elit. Ratione, </p>
				<a href="rotary.php"><button  name="submit" value="Acceder" id = "acceder"class="boton-rotary " type="submit">
                    CONOCE MAS</button></a>
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

	<section id="medical" class="centro-medico">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>centro rotario de salud</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab velit laudantium dignissimos ipsa molestiae inventore aliquam exercitationem ipsum, temporibus sapiente consequuntur, quas ad, magnam perspiciatis tenetur maxime tempore! Natus.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 padding-med">
				<a href="consultas.php">
				<img src="img/med1.jpg" alt="">
				

				<div class="text-consul">
					<h2>CONSULTAS EXTERNAS</h2>
					<p>Conoce todas las consultas externas que ofrecemos en nuestro centro de salud.</p>
				</div>
				</a>

		</div>
			<div class="col-md-4 padding-med">
				<a href="rehabilitacion.php">
				<img src="img/med2.jpg" alt="">
				<div class="text-consul">
					<h2 style="font-size:24px;">SALA DE FISIATRIA Y REHABILITACION</h2>
					<p>Conoce una de las salas de Rehabilitacion mas novedosas de todo el estado. </p>
				
				</div>
				</a>
			</div>

			<div class="col-md-4 padding-med">
				<a href="protesis.php">
				<img src="img/med3.jpg" alt="">
				<div class="text-consul">
					<h2 style="font-size:24px;">SALA DE FABRICACION DE PROTESIS</h2>
					<p>Conoce nuestro taller de protesis pionero en ayuda a los discapacitados.</p>
				
				</div>
				</a>
			</div>
		</div>
		</div>
	</section>

	<!-- /////////////////// MAPA GOOGLE /////////////////// -->
	
	<section id="contactos">
		<div class="contenido-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
	<div class="titulo-direccion">
		<h2>Visitanos o <br>dejanos un mensaje</h2>
	</div>
	<div class="direccion-form">
		
		<h2><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur </h2>
		<h2><i class="fa fa-phone"></i> 0424-822-9068</h2>
		<h2><i class="fa fa-envelope-o"></i> rotarycumana@gmail.com </h2>
		
	</div>
	</div>
				<div class="col-md-6">
				<div class="form-wall">
					<form id="contact-form" method="POST">
					  <div class="form-group">
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="escriba su nombre..." name="nombre">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="escriba su correo electronico..." name="correo">
					  </div>
					  <div class="form-group">
					    <textarea style=" height: 200px;"  class="form-control" type="text" id="mensaje" name="mensaje" placeholder="escriba su mensaje..." name="mensaje"></textarea>
					  </div>
					  
					  
					  <button  name="submit" value="Acceder" id = "acceder"class="boton-contacts " type="submit">
					                    ENVIAR</button>
					
					</form>
					<div class="responde"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section class="contacts">
		<div id="gmap"></div>
	</section>

	<!-- /////////////////// FOOTER /////////////////// -->
	
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
	<script>
    $('.carousel').carousel({
        interval: 50000 //changes the speed
    })
    </script>
</body>
</html>