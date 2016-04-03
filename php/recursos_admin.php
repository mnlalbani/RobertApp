<!--//////////////////////////////Vista Inicial vacía//////////////////////////////-->
              <section class="wrapper" id="vista_inicial">            
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa-laptop"></i> INICIO</h3>
                        <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
                          <li><i class="fa fa-laptop"></i>Bienvenida</li>						  	
                        </ol>
                    </div>
                  </div>
                  <div class="widget-foot">
                  </div>
              </section> 
<!--//////////////////////////////Vista Subir Noticias//////////////////////////////-->
            <section class="wrapper" id="vista_subir_noticias">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> NOTICIAS RECIENTES</h3>
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
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
                      <form class="form-horizontal " method="post" id="formulario_reciente" action="php/registro_noticia.php">
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
<!--//////////////////////////////Vista Portada Noticias//////////////////////////////-->
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
                <a href="" id="subir_noticia">
                <div class="info-box blue-bg">
                  <i class="fa fa-pencil"></i>
                  <div class="title">Subir Noticias</div>           
                </div>
                </a>   
              </div>
              <div class="col-md-6">
                <a href="" id="editar_noticia">
                <div class="info-box brown-bg">
                  <i class="fa fa-cogs"></i>
                  <div class="title">Editar Noticias</div>            
                </div><!--/.info-box--> 
                </a>    
              </div><!--/.col-->  
            </div><!--/.row-->
          </section>
<!--//////////////////////////////Vista Listar Noticias//////////////////////////////-->
          <section class="wrapper" id="vista_listar_noticias">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Usuarios</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
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
                                <tr>
                                   <td>Angeline Mcclain</td>
                                   <td>2004-07-06</td>
                                   <td>dale@chief.info</td>
                                   <td>Rosser</td>
                                   <td>176-026-5992</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Sung Carlson</td>
                                   <td>2011-01-10</td>
                                   <td>ione.gisela@high.org</td>
                                   <td>Robert Lee</td>
                                   <td>724-639-4784</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Bryon Osborne</td>
                                   <td>2006-10-29</td>
                                   <td>sol.raleigh@language.edu</td>
                                   <td>York</td>
                                   <td>180-456-0056</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Dalia Marquez</td>
                                   <td>2011-12-15</td>
                                   <td>angeline.frieda@thick.com</td>
                                   <td>Alton</td>
                                   <td>690-601-1922</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Selina Fitzgerald</td>
                                   <td>2003-01-06</td>
                                   <td>moshe.mikel@parcelpart.info</td>
                                   <td>Waelder</td>
                                   <td>922-810-0915</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Abraham Avery</td>
                                   <td>2006-07-14</td>
                                   <td>harvey.jared@pullpump.org</td>
                                   <td>Harker Heights</td>
                                   <td>511-175-7115</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Caren Mcdowell</td>
                                   <td>2002-03-29</td>
                                   <td>valeria@hookhope.org</td>
                                   <td>Blackwell</td>
                                   <td>970-147-5550</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Owen Bingham</td>
                                   <td>2013-04-06</td>
                                   <td>thomas.christopher@firstfish.info</td>
                                   <td>Rule</td>
                                   <td>934-118-6046</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Ahmed Dean</td>
                                   <td>2008-03-19</td>
                                   <td>lakesha.geri.allene@recordred.com</td>
                                   <td>Darrouzett</td>
                                   <td>338-081-8817</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Mario Norris</td>
                                   <td>2010-02-08</td>
                                   <td>mildred@hour.info</td>
                                   <td>Amarillo</td>
                                   <td>945-547-5302</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>                              
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
                  <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
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
                              <?php include_once("listar_usuario.php"); ?>
                                <tr>
                                   <th><i class="icon_profile"></i> Full Name</th>
                                   <th><i class="icon_calendar"></i> Date</th>
                                   <th><i class="icon_mail_alt"></i> Email</th>
                                   <th><i class="icon_pin_alt"></i> City</th>
                                   <th><i class="icon_mobile"></i> Mobile</th>
                                   <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <tr>
                                   <td>Angeline Mcclain</td>
                                   <td>2004-07-06</td>
                                   <td>dale@chief.info</td>
                                   <td>Rosser</td>
                                   <td>176-026-5992</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Sung Carlson</td>
                                   <td>2011-01-10</td>
                                   <td>ione.gisela@high.org</td>
                                   <td>Robert Lee</td>
                                   <td>724-639-4784</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Bryon Osborne</td>
                                   <td>2006-10-29</td>
                                   <td>sol.raleigh@language.edu</td>
                                   <td>York</td>
                                   <td>180-456-0056</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Dalia Marquez</td>
                                   <td>2011-12-15</td>
                                   <td>angeline.frieda@thick.com</td>
                                   <td>Alton</td>
                                   <td>690-601-1922</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Selina Fitzgerald</td>
                                   <td>2003-01-06</td>
                                   <td>moshe.mikel@parcelpart.info</td>
                                   <td>Waelder</td>
                                   <td>922-810-0915</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Abraham Avery</td>
                                   <td>2006-07-14</td>
                                   <td>harvey.jared@pullpump.org</td>
                                   <td>Harker Heights</td>
                                   <td>511-175-7115</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Caren Mcdowell</td>
                                   <td>2002-03-29</td>
                                   <td>valeria@hookhope.org</td>
                                   <td>Blackwell</td>
                                   <td>970-147-5550</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Owen Bingham</td>
                                   <td>2013-04-06</td>
                                   <td>thomas.christopher@firstfish.info</td>
                                   <td>Rule</td>
                                   <td>934-118-6046</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Ahmed Dean</td>
                                   <td>2008-03-19</td>
                                   <td>lakesha.geri.allene@recordred.com</td>
                                   <td>Darrouzett</td>
                                   <td>338-081-8817</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>Mario Norris</td>
                                   <td>2010-02-08</td>
                                   <td>mildred@hour.info</td>
                                   <td>Amarillo</td>
                                   <td>945-547-5302</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>                              
                             </tbody>
                            </table>
                          </section>
                        </div>
                    </section>
                </div>
            </div>
          </section>