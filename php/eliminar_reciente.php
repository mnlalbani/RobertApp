<?php 
include("connection.php");
	$titulo = $_POST['titulo'];
	var_dump($_SERVER);
	$sql = "DELETE * FROM reciente WHERE titulo = '$titulo'";
	$result = $mysqli->query($sql);
	$mysqli->close();
	echo "<p>Noticia eliminada</p>";
?>