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
                    
                    <li class="dropdown">
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
                    <li>
                        <a class="page-scroll" href="index.php">ACTIVIDADES</a>
                    </li>
                    <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALUD</a>
          <ul class="dropdown-menu">
            <li><a href="consultas.php">CONSULTAS</a></li>
            <li class="active"><a href="rehabilitacion.php" style="font-size: 11px; padding:10px 0 10px 0;">REHABILITACION</a></li>
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
				
				<div class="imagen-top-rehab">
					<div class="overlay-top"><h2>sala de rehabilitacion</h2></div>
				</div>
			</div>
		</div>
	</section>

	<!-- /////////////////// CONTENIDO TEXTO 1 /////////////////// -->

	<section class="rehab-top">
		<div class="row">
			<div class="col-md-12">
				<h2>NUESTRA SALA DE REHABILITACION</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi incidunt repellendus facere dolorem quis rerum, tempore culpa voluptas illum itaque atque temporibus obcaecati consectetur. Voluptates sapiente quo suscipit molestias nobis Lorem ipsum dolor sit amet,	</p>
			</div>
		</div>
	</section>

	<!-- /////////////////// CONTENIDO IMG /////////////////// -->

	<section class="contenido-img-r">
		
		<div class="row">
				<div class="imagen1r">
					
				</div>
				<div class="imagen2r">
					
				</div>
			
				<div class="imagen3r">
					
				</div>
				<div class="imagen4r">
					
				</div>
		</div>
	</section>
	
	<!-- /////////////////// CONTENIDO TEXTO 2 /////////////////// -->

	<section class="contenedor-text2">	
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<hr>
					<p>LPertenece al Distrito 4370. Esta conformado por Socios Rotarios comprometidos con la comunidad, procurando en todo momento ser promotores de valores</p>
				</div>
				<div class="col-md-4">
					<hr>
					<p>LPertenece al Distrito 4370. Esta conformado por Socios Rotarios comprometidos con la comunidad, procurando en todo ,momento ser promotores de valores</p>
				</div>
				<div class="col-md-4">
					<hr>
					<p>LPertenece al Distrito 4370. Esta conformado por Socios Rotarios comprometidos con la comunidad, procurando en todo momento ser promotores de valores</p>
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