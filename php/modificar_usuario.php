<?php 
	if (isset($_POST['consulta'])) {
		include_once('connection.php');
		$sql = "SELECT * FROM `usuario` WHERE `codigo` = $_POST[codigo]";
		$result = $mysqli->query($sql);
		while($row = mysqli_fetch_array($result)) {
			echo "<section class='wrapper' id='vista_subir_noticias_recientes'>
	                <div class='row'>
	                  <div class='col-lg-12'>
	                    <h3 class='page-header'><i class='fa fa-file-text-o'></i> USUARIOS</h3>
	                      <ol class='breadcrumb'>
	                        <li><i class='fa fa-home'></i><a href='index.php'>Inicio</a></li>
	                        <li><i class='icon_document_alt'></i>Ver Usuarios</li>
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
	                      <form class='form-horizontal ' method='post' id='formulario_modificar_u' action='' codigo='".$row['codigo']."'>
	                      	<input type='text' value='".$row['codigo']."' hidden name='codigo'>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Nombre:</label>
	                        <div class='col-sm-10'>
	                          <input type='text' class='form-control' placeholder='Nombre del usuario..' id='nombre' name='nombre' value='".$row['nombre']."'>
	                        </div>
	                        </div>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Apellido:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Apellido del usuario..' id='apellido' name='apellido' value='".$row['apellido']."'>
	                          </div>
	                        </div>
	                        <div class='form-group'>
	                          <label class='col-sm-2 control-label'>Lugar:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Ciudad del usuario..' id='ciudad' name='ciudad' value='".$row['ciudad']."'>
	                          </div>
	                        </div>
	          				<div class='form-group'>
	                          <label class='col-sm-2 control-label'>Correo:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Correo del usuario..' id='correo' name='correo' value='".$row['correo']."'>
	                          </div>
	                        </div>
	                       	<div class='form-group'>
	                          <label class='col-sm-2 control-label'>Teléfono:</label>
	                          <div class='col-sm-10'>
	                            <input type='text' class='form-control' placeholder='Telefono del usuario..' id='telefono' name='telefono' value='".$row['telefono']."' maxlength='11'>
	                          </div>
	                        </div>
	                        <button  name='submit' class='boton-login btn-block' type='submit'>
	                          MODIFICAR USUARIO
	                        </button>
	                      </form>
	                      <div id='response'></div>
	                    </div>
	                    </section>
	                  </div>
	                </div>
	    	</section>";

		};
		$mysqli->close();
	}else{
		include_once('connection.php');
		$errors = array();
		$data = array();
		if (empty($_POST['nombre'])) {
			$errors['nombre'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL NOMBRE DEL USUARIO</p>";
		}
		if (empty($_POST['apellido'])) {
			$errors['apellido'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL APELLIDO DEL USUARIO</p>";
		}
		if (empty($_POST['ciudad'])) {
			$errors['ciudad'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE LA CIUDAD DEL USUARIO</p>";
		}
		if (empty($_POST['correo'])) {
			$errors['correo'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CORREO DEL USUARIO</p>";
		}
		if (empty($_POST['telefono'])) {
			$errors['telefono'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL TELEFONO DEL USUARIO</p>";
		}
		if (! empty($errors)) {
			
			$data['success'] = false;
			$data['errors'] = $errors;

			//echo json_encode($data);
		} else{
			$data['success'] = true;
			$data['message'] = 'success!';

			$sql ="UPDATE `usuario`
		          SET `nombre` = '".$_POST['nombre']."', `apellido` = '".$_POST['apellido']."', `ciudad` = '".$_POST['ciudad']."',`correo` = '".$_POST['correo']."',`telefono` = '".$_POST['telefono']."' WHERE `codigo` = '".$_POST['codigo']."'";
      		var_dump($_POST);
      		$result = $mysqli->query($sql);
			if (! $result) {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			};
			$mysqli->close();
			echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Usuario Modificado</p>
			 <a class='' href='' id='lista_mod_usuario'> Volver a la lista de Usuarios </a>";
		}

	}


 ?>