<?php 
	include_once("connection.php");
	$errors = array();
	$data = array();

	if (empty($_POST['nombre'])) {
		$errors['nombre'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'> INGRESE EL TITULO DE LA NOTICIA</p>";
	}
	if (empty($_POST['usuario'])) {
		$errors['usuario'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE LA FECHA DE LA NOTICIA</p>";
	}
	if (empty($_POST['password'])) {
		$errors['password'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL LUGAR DE LA ACTIVIDAD</p>";
	}
	if (empty($_POST['apellido'])) {
		$errors['apellido'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
	}if (empty($_POST['correo'])) {
		$errors['correo'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
	}if (empty($_POST['ciudad'])) {
		$errors['ciudad'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
	}if (empty($_POST['telefono'])) {
		$errors['telefono'] = "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #ff2d55;' class='alert alert-danger'> <i class='fa fa-times'></i> INGRESE EL CONTENIDO DE LA NOTICIA</p>";
	}if(!empty($_POST['usuario'])){
		$sql = "SELECT * FROM `usuario` WHERE usuario = '$_POST[usuario]'";
		$result = $mysqli->query($sql);
		    $a = mysqli_num_rows($result);
		    if ($a > 0) {
		    	$errors['usuario'] = "El usuario ya se encuentra registrado";
		    }
	}
	if (!empty($errors)) {
		$data['success'] = false;
		$data['errors'] = $errors;
		echo json_encode($data);
	}else{
		$data['success'] = true;
		$data['message'] = 'success!';
	$sql = "INSERT INTO `usuario` (nombre, usuario, password, tipo, apellido, correo, ciudad, telefono) VALUES ('{$mysqli->real_escape_string($_POST['nombre'])}',
	'{$mysqli->real_escape_string($_POST['usuario'])}',
	'{$mysqli->real_escape_string($_POST['password'])}',
	'{$mysqli->real_escape_string($_POST['tipo'])}',
			'{$mysqli->real_escape_string($_POST['apellido'])}',
			'{$mysqli->real_escape_string($_POST['correo'])}',
			'{$mysqli->real_escape_string($_POST['ciudad'])}',
			'{$mysqli->real_escape_string($_POST['telefono'])}')";
	$insert = $mysqli->query($sql);	
	$mysqli->close();

	//var_dump($_SERVER);
	//var_dump($_POST);
	//var_dump($_GET);
	//echo $sql;
	//echo $insert;
	echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Usuario Registrado</p>" ;

}
 ?>