<?php 
	include_once("connection.php");
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
		$data['success'] = true;
		$data['message'] = 'success!';

		var_dump($_FILES);
		var_dump($_POST);
		var_dump($_GET);

		$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
		$max_file_size = 2000*2000; //100 kb
		$path = 'C:\wamp\www\rotary\img\\'; // Upload directory
		$count = 0;

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
			// Loop $_FILES to exeicute all files
			foreach ($_FILES['files']['name'] as $f => $name) {     
			    if ($_FILES['files']['error'][$f] == 4) {
			        continue; // Skip file if any error found
			    }	       
			    if ($_FILES['files']['error'][$f] == 0) {	           
			        if ($_FILES['files']['size'][$f] > $max_file_size) {
			            $message[] = "$name is too large!.";
			            continue; // Skip large files
			        }
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message[] = "$name is not a valid format";
						continue; // Skip invalid file formats
					}
			        else{ // No error found! Move uploaded files 
			            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)){
			            	$imagen[$count];
			            	$count++; // Number of successfully uploaded file	
			            }
			        }
			    }
			}
		}
		$sql = "INSERT INTO reciente (titulo, fecha,lugar,contenido,imagen1,imagen2,imagen3,imagen4,imagen5,imagen6,imagen7,imagen8,imagen9,imagen10)
			VALUES ('{$mysqli->real_escape_string($_POST['titulo'])}',
			'{$mysqli->real_escape_string($_POST['fecha'])}',
			'{$mysqli->real_escape_string($_POST['lugar'])}',
			'{$mysqli->real_escape_string($_POST['contenido'])}',
			'{$mysqli->real_escape_string($_POST['imagen1'])}',
			'{$mysqli->real_escape_string($_POST['imagen2'])}',
			'{$mysqli->real_escape_string($_POST['imagen3'])}',
			'{$mysqli->real_escape_string($_POST['imagen4'])}',
			'{$mysqli->real_escape_string($_POST['imagen5'])}',
			'{$mysqli->real_escape_string($_POST['imagen6'])}',
			'{$mysqli->real_escape_string($_POST['imagen7'])}',
			'{$mysqli->real_escape_string($_POST['imagen8'])}',
			'{$mysqli->real_escape_string($_POST['imagen9'])}',
			'{$mysqli->real_escape_string($_POST['imagen10'])}')";
		$insert = $mysqli->query($sql);
		if (! $insert) {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		};
		$mysqli->close();
		echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Noticia Registrada</p>" ;
	}

?>