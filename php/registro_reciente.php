<?php 

	include_once("connection.php");
	$errors = array();
	$data = array();
	if (empty($_POST['titulo'])) {
		$errors['titulo'] = "Titulo requerido";
	}
	if (empty($_POST['fecha'])) {
		$errors['fecha'] = "Fecha requerida";
	}
	if (empty($_POST['lugar'])) {
		$errors['lugar'] = "Lugar requerido";
	}
	if (empty($_POST['contenido'])) {
		$errors['contenido'] = "Contenido requerido";
	}
	if (! empty($errors)) {
		
		$data['success'] = false;
		$data['errors'] = $errors;

		echo json_encode($data);
	} else{
		$data['success'] = true;
		$data['message'] = 'success!';

		$sql = "INSERT INTO reciente (titulo, fecha,contenido)
			VALUES ('{$mysqli->real_escape_string($_POST['titulo'])}',
			'{$mysqli->real_escape_string($_POST['fecha'])}',
			'{$mysqli->real_escape_string($_POST['contenido'])}')";
		$insert = $mysqli->query($sql);
		if (! $insert) {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		};
		$mysqli->close();
		echo "<p>Noticia Registrada</p>" ;
	}

?>