<?php 
header("Location:localhost/actividades.html");
	include_once("connection.php");
	$codigo = $_GET['codigo'];
	$sql = "SELECT * FROM reciente WHERE codigo = '$codigo'";
	$result = $mysqli->query($sql);
	while($row = mysqli_fetch_array($result)) {
		
		echo "<div class='container padding-con'>"
		echo "<div class='row'>"
		echo "<div class='col-md-12'>"
		echo "<div class='text-act'>"
		echo "<h2>".$row['titulo']."</h2>"
		echo "</div>"
		echo "</div>"
		echo "</div>"
		echo "<div class='row'>"
	    echo "<div class='col-md-12'>"
	    echo " <div class='text-acth1'>"
	    echo "<h1>" .$row['fecha']."</h1>"
	    echo "h2>".$row['lugar']."</h2>"
	   	echo " </div>"
	    echo "</div>"
	  	echo "</div>"
	    echo "<div class='row'>"
	    echo "<div class='col-md-12'>"
	    echo "<div class='text-actp'>  "
	    echo " <p>" . $row['contenido']."</p>"
	    echo "</div>"
	    echo "</div>"
	    echo "</div>"
		echo "</div>"

		};
	
	$mysqli->close();
 ?>