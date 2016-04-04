<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->    
    <link href="css/cssadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/cssadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="css/cssadmin/style.css" rel="stylesheet">
    <link href="css/cssadmin/style-responsive.css" rel="stylesheet" />
    <link href="css/cssadmin/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
        <header class="header dark-bg">
              <div class="toggle-nav">
                  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
              </div>
              <!--logo start-->
              <a href="index.html" class="logo">ADMINISTRACION rotary cumana</a>
              <!--logo end-->
              <div class="nav search-row" id="top_menu">
                  <!--  search form start -->
                  <ul class="nav top-menu">                    
                      <li>
                          <form class="navbar-form">
                              
                          </form>
                      </li>                    
                  </ul>
                  <!--  search form end -->                
              </div>
              <div class="top-nav notification-row">                
                  <!-- notificatoin dropdown start-->
                  <ul class="nav pull-right top-menu">
                      <!-- task notificatoin start -->
                      <!-- task notificatoin end -->
                      <!-- inbox notificatoin start-->
                      <!-- inbox notificatoin end -->
                      <!-- alert notification start-->
                      <!-- alert notification end-->
                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
                              <span class="username">Jenifer Smith</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li>
                                  <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                              </li>
                              <li>
                                  <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                              </li>
                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
                  <!-- notificatoin dropdown end-->
              </div>
        </header>      
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">                
                  <li class="active">
                        <a class="" href="admin.php">
                            <i class="icon_house_alt"></i>
                            <span>INICIO</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_document_alt"></i>
                            <span>Noticias</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="" id="reciente">Recientes</a></li>                          
                            <li><a class="" href="" id="proxima">Proximas</a></li>
                        </ul>
                  </li>       
                  <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Secciones</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="form_component.html">Sobre Nosotros</a></li>
                            <li><a class="" href="form_component.html">Sobre Rotary</a></li>
                            <li><a class="" href="form_component.html">Consultas externas</a></li>
                            <li><a class="" href="form_component.html">Sala de Rehabilitacion</a></li>
                            <li><a class="" href="form_component.html">Fabricacion de protesis</a></li>
                            <li><a class="" href="form_component.html">Directiva</a></li>
                        </ul>
                  </li>
                  <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Usuarios</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                        <li><a class="" href="" id="usuario">Ver/Editar los usuarios</a></li>
                  </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">

        </section>
        <!--main content end-->
    </section>
    <!-- container section start -->
    <!-- javascripts -->
    <script src="js/jsadmin/jquery.js"></script>
    <script src="js/jsadmin/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jsadmin/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jsadmin/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/admin_dinamico.js"></script>
    <!-- bootstrap -->
    <script src="js/jsadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="js/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/jsadmin/scripts.js"></script>
  	<script src="js/jsadmin/jquery.slimscroll.min.js"></script>
    <script>
          //knob
         /* $(function() {
            $(".knob").knob({
              'draw' : function () { 
                $(this.i).val(this.cv + '%')
              }
            })
          });
          //carousel
          $(document).ready(function() {
            $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true
            });
          });
          //custom select box
          $(function(){
            $('select.styled').customSelect();
          });
          // ---------- Map ---------- //
          $(function(){
            $('#map').vectorMap({
              map: 'world_mill_en',
              series: {
              regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
              }]
              },
              backgroundColor: '#eef3f7',
              onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
              }
            });
          });
          */
    </script>
  </body>
</html>
