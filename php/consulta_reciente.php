<?php 

	include_once("connection.php");
	$sql = "SELECT * FROM reciente ORDER BY codigo DESC LIMIT 3";
	$result = $mysqli->query($sql);

	while($row = mysqli_fetch_array($result)) {
	    echo "<div class='elemento'>";
		echo	"<div class='text1'>";
		echo	"<h1>". $row['fecha'] ."</h1>";
		echo	"<h2>". substr($row['titulo'], 0 , 65) ."</h2>";
		echo	"<p>".  substr($row['contenido'], 0 , 160) ."</p>";
		echo	"<button type='button' class='boton-news' value='". $row['codigo'] ."'>VER MAS</button> ";
		echo	"</div>";
		echo "<div class='img1'>";
		echo "<img src=''>";
		echo "</div>";
		echo "</div>";
		};
	
	$mysqli->close();

 ?>