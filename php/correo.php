<?php 
	var_dump($_POST);
	$from = $_POST['correo'];
	$nombre = $_POST['nombre'];
	$message = $_POST['mensaje'];
	$subject = "";
	$to = "";
	mail($from,$to,$subject,$message);
 ?>