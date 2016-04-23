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
	
	
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
</head>

<body >
	
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
                <a href="index.php" class="navbar-brand">
                <img class="logo-lg visible-lg visible-md hidden-xs" src="img/logonuevoa.png" alt="">
                	<img class="logo-xs visible-xs hidden-lg hidden-md" src="img/logo.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="index.php">INICIO</a>
                    </li>
                    
                    <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS</a>
          <ul class="dropdown-menu">
            <li class="active"><a href="nosotros.php">NOSOTROS</a></li>
            <li ><a href="historia.php">HISTORIA</a></li>
            <li><a href="directiva.php">DIRECTIVA</a></li>
            
          </ul>
        </li>


                    <li>
                        <a class="page-scroll visible-md hidden-lg" href="rotary.php">ROTARY</a>
                        <a class="page-scroll visible-lg visible-xs hidden-md" href="rotary.php">¿QUE ES  ROTARY?</a>
                    </li>
                    <li>
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
				
				<div class="imagen-top">
					<div class="overlay-top"><h2>sobre nosotros</h2></div>
				</div>
			</div>
		</div>
	</section>

	<!-- /////////////////// CONTENIDO TEXTO 1 /////////////////// -->

	<section class="contenedor-text1">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="nos-izq">
						<hr align="left">
						<h2>somos una organizacion sin fines de lucro </h2>
					</div>
				</div>
				<div class="col-md-8">
					<div class="nos-de">
						<p> Nuestro club brinda servicios humanitarios a través de proyectos orientados a beneficiar a las comunidades y a la gente de escasos recursos de la ciudad de Cumaná y sectores   cercanos,  y  nos  alienta, como todos los clubes rotarios, elevadas normas de ética en todas las ocupaciones que ayudan a crear buena voluntad y paz en el mundo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- /////////////////// CONTENIDO IMG /////////////////// -->

	<section class="contenido-img">
		
		<div class="row">
				<div class="imagen1">
					
				</div>
				<div class="imagen2">
					
				</div>
			
				<div class="imagen3">
					
				</div>
				<div class="imagen4">
					
				</div>
		</div>
	</section>
	
	<!-- /////////////////// CONTENIDO TEXTO 2 /////////////////// -->

	<section class="contenedor-text2">	
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<hr>
					<p>LPertenece al Distrito 4370. Esta conformado por Socios Rotarios comprometidos con la comunidad, procurando en todo momento ser promotores de valores como la honestidad, el repecto,</p>
				</div>
				<div class="col-md-6">
					<hr>
					<p>LPertenece al Distrito 4370. Esta conformado por Socios Rotarios comprometidos con la comunidad, procurando en todo momento ser promotores de valores como la honestidad, el repecto,</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="contenedor-text1" style="padding: 20px 0 60px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="nos-izq">
						<hr align="left">
						<h2>colabora y haz tu donacion</h2>
					</div>
				</div>
				<div class="col-md-8">
					<div class="nos-de">
						<p> Nuestro club brinda servicios humanitarios a través de proyectos orientados a beneficiar a las comunidades y a la gente de escasos recursos de la ciudad de Cumaná y sectores   cercanos,  y  nos  alienta, como todos los clubes rotarios, elevadas normas de ética en todas las ocupaciones que ayudan a crear buena voluntad y paz en el mundo.</p>
					</div>
				</div>
			</div>
		</div>
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
	
</body>
</html>