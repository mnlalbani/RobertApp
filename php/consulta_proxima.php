<?php 

	include_once("connection.php");
	$sql = "SELECT * FROM proxima ORDER BY codigo DESC LIMIT 4";
	$result = $mysqli->query($sql);

	while($row = mysqli_fetch_array($result)) {
	    	
		echo	"<div class='cont-prox-1'>";
		echo	"<h1>". $row['fecha'] ."</h1>";
		echo	"<h2>". $row['titulo'] ."</h2>";
		echo	"<p>".  substr($row['contenido'], 0 , 99) ."</p>";
		echo	"<button type='button' class='boton-prox' value='".$row['codigo']."'>VER MAS</button> ";
		echo	"</div>";
		};
	
	$mysqli->close();

 ?>