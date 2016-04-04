<!--//////////////////////////////Vista Inicial vacía//////////////////////////////-->
              <section class="wrapper" id="vista_inicial">            
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa-laptop"></i> INICIO</h3>
                        <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                          <li><i class="fa fa-laptop"></i>Bienvenida</li>						  	
                        </ol>
                    </div>
                  </div>
                  <div class="widget-foot">
                  </div>
              </section> 
<!--//////////////////////////////Vista Subir Noticias Reciente//////////////////////////////-->
            <section class="wrapper" id="vista_subir_noticias_recientes">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS RECIENTES</h3>
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                        <li><i class="icon_document_alt"></i>Noticias</li>
                        <li><i class="fa fa-file-text-o"></i>Noticias recientes</li>
                      </ol>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Form Elements
                      </header>
                    <div class="panel-body">
                      <form class="form-horizontal " method="post" id="formulario_reciente" action="php/registro_reciente.php">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Titulo:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Titulo de la noticia.." id="titulo" name="titulo">
                        </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Fecha:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Fecha de la noticia.." id="fecha" name="fecha">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Lugar:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Lugar de la noticia.." id="lugar" name="lugar">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Contenido:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="contenido" name="contenido" placeholder="Ingrese el contenido de la noticia">
                              
                            </textarea>
                          </div>
                        </div>
                    <!--
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="exampleInputFile">Imagenes:</label>
                          <input type="file" id="exampleInputFile">
                          <p class="col-sm-2 control-label">Ejemplo: imagen.jpg</p>
                        </div>
                     -->
                        <button  name="submit" class="boton-login btn-block" type="submit">
                          PUBLICAR NOTICIA
                        </button>
                      </form>
                      <div id="response"></div>
                    </div>
                    </section>
                  </div>
                </div>
            </section>
<!--//////////////////////////////Vista Subir Noticias Proxima//////////////////////////////-->
            <section class="wrapper" id="vista_subir_noticias_proximas">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS PROXIMAS</h3>
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                        <li><i class="icon_document_alt"></i>Noticias</li>
                        <li><i class="fa fa-file-text-o"></i>Noticias Proximas</li>
                      </ol>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Form Elements
                      </header>
                    <div class="panel-body">
                      <form class="form-horizontal " method="post" id="formulario_proximo" action="php/registro_noticia.php">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Titulo:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Titulo de la noticia.." id="titulo" name="titulo">
                        </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Fecha:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Fecha de la noticia.." id="fecha" name="fecha">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Lugar:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Lugar de la noticia.." id="lugar" name="lugar">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="" ss="col-sm-2 control-label">Contenido:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="contenido" name="contenido" placeholder="Ingrese el contenido de la noticia"></textarea>
                          </div>
                        </div>
                    <!--
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="exampleInputFile">Imagenes:</label>
                          <input type="file" id="exampleInputFile">
                          <p class="col-sm-2 control-label">Ejemplo: imagen.jpg</p>
                        </div>
                     -->
                        <button  name="submit" class="boton-login btn-block" type="submit">
                          PUBLICAR NOTICIA
                        </button>
                      </form>
                      <div id="response"></div>
                    </div>
                    </section>
                  </div>
                </div>
            </section>
<!--//////////////////////////////Vista Portada Noticias Proxima//////////////////////////////-->
          <section class="wrapper" id="vista_portada_noticias_proxima">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS PROXIMAS</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Noticias</li>
                  <li><i class="fa fa-file-text-o"></i>Noticias recientes</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="" id="subir_noticia_proxima">
                <div class="info-box blue-bg">
                  <i class="fa fa-pencil"></i>
                  <div class="title">Subir Noticias</div>           
                </div>
                </a>   
              </div>
              <div class="col-md-6">
                <a href="" id="editar_noticia_proxima">
                <div class="info-box brown-bg">
                  <i class="fa fa-cogs"></i>
                  <div class="title">Editar Noticias</div>            
                </div><!--/.info-box--> 
                </a>    
              </div><!--/.col-->  
            </div><!--/.row-->
          </section>
<!--//////////////////////////////Vista Portada Noticias Reciente//////////////////////////////-->
          <section class="wrapper" id="vista_portada_noticias">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS RECIENTES</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Noticias</li>
                  <li><i class="fa fa-file-text-o"></i>Noticias recientes</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="" id="subir_noticia_reciente">
                <div class="info-box blue-bg">
                  <i class="fa fa-pencil"></i>
                  <div class="title">Subir Noticias</div>           
                </div>
                </a>   
              </div>
              <div class="col-md-6">
                <a href="" id="editar_noticia_reciente">
                <div class="info-box brown-bg">
                  <i class="fa fa-cogs"></i>
                  <div class="title">Editar Noticias</div>            
                </div><!--/.info-box--> 
                </a>    
              </div><!--/.col-->  
            </div><!--/.row-->
          </section>
<!--//////////////////////////////Vista Listar Noticias Recientes//////////////////////////////-->
          <section class="wrapper" id="vista_listar_noticias_reciente">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Usuarios</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Ver o Editar Usuarios</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                       <div class="col-md.12">
                          <section class="panel">
                            <header class="panel-heading">
                                Todas las Noticias
                            </header> 
                            <table class="table table-striped table-advance table-hover">
                             <tbody>
                                <tr>
                                   <th><i class="icon_profile"></i> Titulo</th>
                                   <th><i class="icon_calendar"></i> Fecha</th>
                                   <th><i class="icon_pin_alt"></i> Lugar</th>
                                   <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <?php include_once("listar_reciente.php");
                                      //include_once("eliminar_reciente.php");
                                 ?>
                             </tbody>
                            </table>
                          </section>
                        </div>
                    </section>
                </div>
            </div>
          </section>
<!--//////////////////////////////Vista Listar Noticias Proxima//////////////////////////////-->
          <section class="wrapper" id="vista_listar_noticias_proximas">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Usuarios</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Ver o Editar Usuarios</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                       <div class="col-md.12">
                          <section class="panel">
                            <header class="panel-heading">
                                Todas las Noticias
                            </header> 
                            <table class="table table-striped table-advance table-hover">
                             <tbody>
                                <tr>
                                   <th><i class="icon_profile"></i> Titulo</th>
                                   <th><i class="icon_calendar"></i> Fecha</th>
                                   <th><i class="icon_pin_alt"></i> Lugar</th>
                                   <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <?php include_once("listar_proxima.php"); ?>
                             </tbody>
                            </table>
                          </section>
                        </div>
                    </section>
                </div>
            </div>
          </section>
<!--//////////////////////////////Vista Listar Usuarios//////////////////////////////-->
          <section class="wrapper" id="vista_listar_usuario">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Usuarios</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Ver o Editar Usuarios</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                       <div class="col-md.12">
                          <section class="panel">
                            <header class="panel-heading">
                                Todos los Usuarios
                            </header> 
                            <table class="table table-striped table-advance table-hover">
                             <tbody>
                                <tr>
                                   <th><i class="icon_profile"></i> Full Name</th>
                                   <th><i class="icon_calendar"></i> Date</th>
                                   <th><i class="icon_mail_alt"></i> Email</th>
                                   <th><i class="icon_pin_alt"></i> City</th>
                                   <th><i class="icon_mobile"></i> Mobile</th>
                                   <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <?php include_once("listar_usuario.php"); ?>
                             </tbody>
                            </table>
                          </section>
                        </div>
                    </section>
                </div>
            </div>
          </section>
<!--//////////////////////////////Vista Subir Usuarios//////////////////////////////-->
            <section class="wrapper" id="vista_subir_noticias_recientes">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS RECIENTES</h3>
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
                        <li><i class="icon_document_alt"></i>Noticias</li>
                        <li><i class="fa fa-file-text-o"></i>Noticias recientes</li>
                      </ol>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Form Elements
                      </header>
                    <div class="panel-body">
                      <form class="form-horizontal " method="post" id="formulario_reciente" action="php/registro_reciente.php">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Titulo:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Titulo de la noticia.." id="titulo" name="titulo">
                        </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Fecha:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Fecha de la noticia.." id="fecha" name="fecha">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Lugar:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Lugar de la noticia.." id="lugar" name="lugar">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Contenido:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="contenido" name="contenido" placeholder="Ingrese el contenido de la noticia">
                              
                            </textarea>
                          </div>
                        </div>
                    <!--
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="exampleInputFile">Imagenes:</label>
                          <input type="file" id="exampleInputFile">
                          <p class="col-sm-2 control-label">Ejemplo: imagen.jpg</p>
                        </div>
                     -->
                        <button  name="submit" class="boton-login btn-block" type="submit">
                          PUBLICAR NOTICIA
                        </button>
                      </form>
                      <div id="response"></div>
                    </div>
                    </section>
                  </div>
                </div>
            </section>