<?php 
	include_once("connection.php");
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

	var_dump($_SERVER);
	var_dump($_POST);
	var_dump($_GET);
	echo $sql;
	echo $insert;
	echo "<p style='margin:10px 0 0 0; text-transform:uppercase; font-size:20px; font-weight:bold; border:2px solid #4cd964;' class='alert alert-success'> <i class='fa fa-check'></i> Usuario Registrado</p>" ;
 ?>