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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/768px.css">
  <link rel="stylesheet" href="css/1200px.css">
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
                            <?php include("php/session_admin.php"); ?>
                              <li>
                                 
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
                  <!--<li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Usuarios</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub"> -->
                        <li class="sub-menu">
                          <a <?php include("php/condicional_admin.php") ?>><i class="icon_desktop"></i>Usuarios</a>
                        </li>
                  <!--</li>-->
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
    <div class="ascrail2000">
      
    </div>
    
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/admin_dinamico.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    
  </body>
</html>
