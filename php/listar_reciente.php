<?php 
	include("connection.php");
	$sql = "SELECT * FROM reciente ORDER BY codigo DESC limit 8";
	$result = $mysqli->query($sql);
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo 	"<td class='titulo' >". $row['titulo']. "</td>";
		echo 	"<td>". $row['fecha']."</td>";
		echo 	"<td>". $row['lugar']."</td>";
		echo 	"<td>";
		echo 		"<div class='btn-group'>";
		echo  			"<a class='btn btn-success' href='' value='". $row['codigo']."'><i class='icon_check_alt2'></i></a>";
		echo  			"<a class='btn btn-danger eliminar'  href='' titulo='". $row['titulo']. "'value='".$row['codigo']."'><i class='icon_close_alt2'></i></a>";
		echo 		"</div>";
		echo 	"</td>";
		echo "</tr>";

	};
	
	//$mysqli->close();
?>