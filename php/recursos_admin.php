<!--//////////////////////////////Vista Inicial vacía//////////////////////////////-->
              <section class="wrapper" id="vista_inicial">            
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa-laptop"></i> INICIO</h3>
                        <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
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
                        <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                        <li><i class="icon_document_alt"></i>Noticias</li>
                        <li><i class="fa fa-file-text-o"></i>Noticias recientes</li>
                      </ol>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Formulario noticias recientes
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
                        <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                        <li><i class="icon_document_alt"></i>Noticias</li>
                        <li><i class="fa fa-file-text-o"></i>Noticias Proximas</li>
                      </ol>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Formulario noticias proximas
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
                          <label class="col-sm-2 control-label">Contenido:</label>
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
                  <li><i class="fa fa-file-text-o"></i>Noticias Proximas</li>
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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Noticias Recientes</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Ver o Editar Noticias</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                       <div class="col-md.12">
                          <section class="panel">
                            <header class="panel-heading">
                                Todas las Noticias recientes
                            </header> 
                            <table class="table table-striped table-advance table-hover">
                             <tbody>
                                <tr>
                                   <th><i class="icon_profile"></i> TITULO</th>
                                   <th><i class="icon_calendar"></i> FECHA</th>
                                   <th><i class="icon_pin_alt"></i> LUGAR</th>
                                   <th><i class="icon_cogs"></i> ACCION</th>
                                </tr>
                                <?php include_once("listar_reciente.php"); ?>
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
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Próximas Noticias</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Ver o Editar Próximas Próximas</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                       <div class="col-md.12">
                          <section class="panel">
                            <header class="panel-heading">
                                Todas las noticias proximas
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
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
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
                                   <th><i class="icon_profile"></i> NOMBRE</th>
                                   <th><i class="icon_calendar"></i> FECHA</th>
                                   <th><i class="icon_mail_alt"></i> CORREO</th>
                                   <th><i class="icon_pin_alt"></i> CIUDAD</th>
                                   <th><i class="icon_mobile"></i> TELEFONO</th>
                                   <th><i class="icon_cogs"></i> ACCION</th>
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
            <section class="wrapper" id="vista_subir_usuarios">
                <div class='row'>
                    <div class='col-lg-12'>
                      <h3 class='page-header'><i class='fa fa-file-text-o'></i> USUARIOS</h3>
                        <ol class='breadcrumb'>
                          <li><i class='fa fa-home'></i><a href='admin.php'>Inicio</a></li>
                          <li><i class='icon_document_alt'></i>Registrar Usuarios</li>
                        </ol>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-lg-12'>
                      <section class='panel'>
                        <header class='panel-heading'>
                          Registrar Usuarios
                        </header>
                      <div class='panel-body'>
                        <form class='form-horizontal' id="formulario_subir_usuarios" method='post'  action='' codigo=''>
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Nombre:</label>
                          <div class='col-sm-10'>
                            <input type='text' class='form-control' placeholder='Nombre del usuario..' id='nombre' name='nombre' >
                          </div>
                          </div>
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Apellido:</label>
                            <div class='col-sm-10'>
                              <input type='text' class='form-control' placeholder='Apellido del usuario..' id='apellido' name='apellido' >
                            </div>
                          </div>
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Usuario:</label>
                            <div class='col-sm-10'>
                              <input type='text' class='form-control' placeholder='Usuario del usuario..' id='usuario' name='usuario' >
                            </div>
                          </div>
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Contraseña:</label>
                            <div class='col-sm-10'>
                              <input type='password' class='form-control' placeholder='Contraseña del usuario..' id='password' name='password' >
                            </div>
                          </div>
                          <input type="text" name="tipo" value="2" hidden id="tipo">
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Lugar:</label>
                            <div class='col-sm-10'>
                              <input type='text' class='form-control' placeholder='Ciudad del usuario..' id='ciudad' name='ciudad' >
                            </div>
                          </div>
                    <div class='form-group'>
                            <label class='col-sm-2 control-label'>Correo:</label>
                            <div class='col-sm-10'>
                              <input type='text' class='form-control' placeholder='Correo del usuario..' id='correo' name='correo' >
                            </div>
                          </div>
                          <div class='form-group'>
                            <label class='col-sm-2 control-label'>Teléfono:</label>
                            <div class='col-sm-10'>
                              <input type='text' class='form-control' placeholder='Telefono del usuario..' id='telefono' name='telefono'  maxlength='11'>
                            </div>
                          </div>
                          <button  name='submit' class='boton-login btn-block' type='submit'>
                            REGISTRAR USUARIO
                          </button>
                        </form>
                        <div id='response'></div>
                      </div>
                      </section>
                    </div>
                  </div>
            </section>
<!--//////////////////////////////Vista Portada Usuarios//////////////////////////////-->
          <section class="wrapper" id="vista_portada_usuarios">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i>USUARIOS</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="admin.php">Inicio</a></li>
                  <li><i class="icon_document_alt"></i>Usuarios</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="" id="subir_usuarios">
                <div class="info-box blue-bg">
                  <i class="fa fa-pencil"></i>
                  <div class="title">Registrar Usuarios</div>           
                </div>
                </a>   
              </div>
              <div class="col-md-6">
                <a href="" id="lista_mod_usuario">
                <div class="info-box brown-bg">
                  <i class="fa fa-cogs"></i>
                  <div class="title">Editar Usuarios</div>            
                </div><!--/.info-box--> 
                </a>    
              </div><!--/.col-->  
            </div><!--/.row-->
          </section>            