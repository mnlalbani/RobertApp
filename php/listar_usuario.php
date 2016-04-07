<?php
	include("connection.php");
	$sql = "SELECT * FROM usuario ORDER BY codigo DESC LIMIT 8";
	$result = $mysqli->query($sql);
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo 	"<td>". $row['nombre']." ".$row['apellido']."</td>";
		echo 	"<td>". date('d-m-Y', strtotime($row['fechaRegistro'])). "</td>";
		echo 	"<td>". $row['correo']. "</td>";
		echo 	"<td>". $row['ciudad']. "</td>";
		echo 	"<td>"."0".$row['telefono']. "</td>";
		echo 	"<td>";
		echo 		"<div class='btn-group'>";
		echo  			"<a class='btn btn-success' href=''><i class='icon_check_alt2'></i></a>";
		echo  			"<a class='btn btn-danger eliminar' titulo='". $row['nombre']." ".$row['apellido']."' value='".$row['codigo']."' tipo='usuario' href=''><i class='icon_close_alt2'></i></a>";
		echo 		"</div>";
		echo 	"</td>";
		echo "</tr>";

	};
	
	$mysqli->close();
?>