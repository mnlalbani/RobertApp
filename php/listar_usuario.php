<?php 
	include_once("connection.php");
	$sql = "SELECT * FROM usuario ORDER BY codigo DESC LIMIT 8";
	$result = $mysqli->query($sql);

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo 	"<td>". $row['nombre']. "</td>";
		echo 	"<td>". $row['fecha']."</td>";
		echo 	"<td>". $row['correo']."</td>";
		echo 	"<td>". $row['lugar']."</td>";
		echo 	"<td>". $row['telefono']."</td>";
		echo 	"<td>";
		echo 		"<div class='btn-group'>";
		echo  			"<a class='btn btn-primary' href=''><i class='icon_plus_alt2'></i></a>";
		echo  			"<a class='btn btn-success' href=''><i class='icon_check_alt2'></i></a>";
		echo  			"<a class='btn btn-danger' href=''><i class='icon_close_alt2'></i></a>";
		echo 		"</div>";
		echo 	"</td>";
		echo "</tr>";

	};
	
	$mysqli->close();
?>