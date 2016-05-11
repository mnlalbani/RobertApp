<?php 
	include_once("connection.php");
	error_reporting(0);
	$errors = array();
	$data = array();
	if (empty($_POST['titulo'])) {
		$errors['titulo'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'> INGRESE EL TITULO DE LA NOTICIA</p>";
	}
	if (empty($_POST['fecha'])) {
		$errors['fecha'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE LA FECHA DE LA NOTICIA</p>";
	}
	if (empty($_POST['lugar'])) {
		$errors['lugar'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL LUGAR DE LA ACTIVIDAD</p>";
	}
	if (empty($_POST['contenido'])) {
		$errors['contenido'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
	}
	if (! empty($errors)) {
		
		$data['success'] = false;
		$data['errors'] = $errors;
		echo json_encode($data);
	} else{
		if($_POST['form_submit'] == 1)
		{
			$images_arr = array();
			$error="";
			foreach($_FILES['images']['name'] as $key=>$val){
				$image_name = $_FILES['images']['name'][$key];
				$tmp_name 	= $_FILES['images']['tmp_name'][$key];
				$size 		= $_FILES['images']['size'][$key];
				$type 		= $_FILES['images']['type'][$key];
				$error 		= $_FILES['images']['error'][$key];
				//checking image type
				$allowed =  array('gif','png','jpg','jpeg','JPEG');
				$filename = $_FILES['images']['name'][$key];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(in_array($ext,$allowed)){
				//move uploaded file to uploads folder
				$target_dir = "../images/noticias_recientes/";
				$target_file = $target_dir.$_FILES['images']['name'][$key];
					if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$target_file)){
						$images_arr[] = $target_file;
					}
				}
				$error="Image type not valid";
			}
		}

		$sql = "INSERT INTO reciente (titulo,fecha,lugar,contenido,imagen1,imagen2,imagen3,imagen4,imagen5,imagen6,imagen7,imagen8,imagen9,imagen10)
			VALUES ('{$mysqli->real_escape_string($_POST['titulo'])}',
			'{$mysqli->real_escape_string($_POST['fecha'])}',
			'{$mysqli->real_escape_string($_POST['lugar'])}',
			'{$mysqli->real_escape_string($_POST['contenido'])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][0])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][1])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][2])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][3])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][4])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][5])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][6])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][7])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][8])}',
			'{$mysqli->real_escape_string("images/noticias_recientes/".$_FILES['images']['name'][9])}')";
		$insert = $mysqli->query($sql);
		if (! $insert) {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		};
		$mysqli->close();
		$data['success'] = true;
		$data['message'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Noticia Registrada</p>" ;
		echo json_encode($data);
	}
?>