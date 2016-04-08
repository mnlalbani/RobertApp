<?php 
	include_once("connection.php");
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

		$sql = "INSERT INTO reciente (titulo, fecha,lugar,contenido)
			VALUES ('{$mysqli->real_escape_string($_POST['titulo'])}',
			'{$mysqli->real_escape_string($_POST['fecha'])}',
			'{$mysqli->real_escape_string($_POST['lugar'])}',
			'{$mysqli->real_escape_string($_POST['contenido'])}')";
		$insert = $mysqli->query($sql);
		if (! $insert) {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		};
		$mysqli->close();
		echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Noticia Registrada</p>" ;
	}

?>