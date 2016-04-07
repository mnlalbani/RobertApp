<?php 
	if (isset($_POST['consulta'])) {
		include_once('connection.php');
		$data = array();
		$sql = "SELECT * FROM `reciente` WHERE `codigo` = $_POST[codigo]";
		$result = $mysqli->query($sql);
		while($row = mysqli_fetch_array($result)) {
			echo "<section class='wrapper' id='vista_subir_noticias_recientes'>
	                <div class='row'>
	                  <div class='col-lg-12'>
	                    <h3 class='page-header'><i class='fa fa-file-text-o'></i> NOTICIAS RECIENTES</h3>
	                      <ol class='breadcrumb'>
	                        <li><i class='fa fa-home'></i><a href='index.php'>Inicio</a></li>
	                        <li><i class='icon_document_alt'></i>Noticias</li>
	                        <li><i class='fa fa-file-text-o'></i>Noticias recientes</li>
	                      </ol>
	                  </div>
	                </div>
	                <div class='row'>
	                  <div class='col-lg-12'>
	                    <section class='panel'>
	                      <header class='panel-heading'>
	                        Form Elements
	                      </header>
	                    <div class='panel-body'>
	                      <form class='form-horizontal ' method='post' id='formulario_modificar' action='' codigo='".$row['codigo']."'>
	                      	<input type='text' value='".$row['codigo']."' hidden name='codigo'>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Titulo:</label>
	                        <div class='col-sm-10'>
	                          <input type='text' class='form-control' placeholder='Titulo de la noticia..' id='titulo' name='titulo' value='".$row['titulo']."'>
	                        </div>
	                        </div>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Fecha:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Fecha de la noticia..' id='fecha' name='fecha' value='".$row['fecha']."'>
	                          </div>
	                        </div>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Lugar:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Lugar de la noticia..' id='lugar' name='lugar' value='".$row['lugar']."'>
	                          </div>
	                        </div>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Contenido:</label>
	                          <div class='col-sm-10'>
	                            <textarea class='form-control' id='contenido' name='contenido' placeholder='Ingrese el contenido de la noticia'>".$row['contenido']."</textarea>
	                          </div>
	                        </div>
	                    <!--
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label' for='exampleInputFile'>Imagenes:</label>
	                          <input type='file' id='exampleInputFile'>
	                          <p class='col-sm-2 control-label'>Ejemplo: imagen.jpg</p>
	                        </div>
	                     -->
	                        <button  name='submit' class='boton-login btn-block' type='submit'>
	                          MODIFICAR NOTICIA
	                        </button>
	                      </form>
	                      <div id='response'></div>
	                    </div>
	                    </section>
	                  </div>
	                </div>
	    	</section>";
		    $data['titulo'] = $row['titulo'];
		    $data['fecha'] = $row['fecha'];
		    $data['lugar'] = $row['lugar'];
		    $data['contenido'] = $row['contenido'];
			};
		$mysqli->close();	
	}
	else {
		include_once('connection.php');
		$errors = array();
		$data = array();
		if (empty($_POST['titulo'])) {
			$errors['titulo'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL TITULO DE LA NOTICIA</p>";
		}
		if (empty($_POST['fecha'])) {
			$errors['fecha'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE LA FECHA DE LA NOTICIA</p>";
		}
		if (empty($_POST['lugar'])) {
			$errors['lugar'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL LUGAR DE LA ACTIVIDAD</p>";
		}
		if (empty($_POST['contenido'])) {
			$errors['contenido'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
		}
		if (! empty($errors)) {
			
			$data['success'] = false;
			$data['errors'] = $errors;

			echo json_encode($data);
		} else{
			$data['success'] = true;
			$data['message'] = 'success!';

			$sql ="UPDATE `reciente`
		          SET `titulo` = '".$_POST['titulo']."', `fecha` = '".$_POST['fecha']."', `lugar` = '".$_POST['lugar']."',`contenido` = '".$_POST['contenido']."' WHERE `codigo` = '".$_POST['codigo']."'";
      		//echo $sql;
      		$result = $mysqli->query($sql);
			if (! $result) {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			};
			$mysqli->close();
			echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Noticia Modificada</p>
			<a class='' href='' id='editar_noticia_reciente'> Volver a la listaRecientes</a>";
		}
	}
 ?>