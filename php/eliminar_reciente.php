<?php 
include("connection.php");
	$codigo = $_POST['codigo'];
	var_dump($_SERVER);
	var_dump($_GET);
	var_dump($_POST);
	$sql = "DELETE FROM `reciente` WHERE `codigo` = $codigo";
	echo $sql;
	$result = $mysqli->query($sql);
	$mysqli->close();
	echo "<p>Noticia eliminada</p>";
?>