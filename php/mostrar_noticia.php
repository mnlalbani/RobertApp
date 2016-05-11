<?php 
	include_once("connection.php");
	//echo $_GET['codido'];
	//var_dump($_SERVER['QUERY_STRING']);
	//var_dump($_SERVER);
	//var_dump($_GET);
	//var_dump($_POST);
	

	if ($_GET['tipo'] == 'proxima') {
		$sql = "SELECT * FROM proxima WHERE codigo = '$_GET[codigo]' ";
	$result = $mysqli->query($sql);
	while($row = mysqli_fetch_array($result)) {
		
		echo "<div class='container padding-con'>";
		echo "<div class='row'>";
		echo "<div class='col-md-12'>";
		echo "<div class='text-act'>";
		echo "<h2>". $row['titulo'] ."</h2>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='row'>";
	    echo "<div class='col-md-12'>";
	    echo " <div class='text-acth1'>";
	    echo "<h1>" .$row['fecha']."</h1>";
	    echo "<h2>" .$row['lugar']. "</h2>";
	   	echo " </div>";
	    echo "</div>";
	  	echo "</div>";
	    echo "<div class='row'>";
	    echo "<div class='col-md-12'>";
	    echo "<div class='text-actp'> ";
	    echo "</div>";
	    echo "</div>";
	    echo "</div>";
		echo "</div>";

		};
	
	$mysqli->close();	
	}
	else{
		$sql = "SELECT * FROM reciente WHERE codigo = '$_GET[codigo]' ";
		$result = $mysqli->query($sql);
		while($row = mysqli_fetch_array($result)) {
			
			echo "<div class='container padding-con'>";
			echo "<div class='row'>";
			echo "<div class='col-md-12'>";
			echo "<div class='text-act'>";
			echo "<h2>". $row['titulo'] ."</h2>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<div class='row'>";
		    echo "<div class='col-md-12'>";
		    echo " <div class='text-acth1'>";
		    echo "<h1>" .$row['fecha']."</h1>";
		    echo "<h2>" .$row['lugar']. "</h2>";
		   	echo " </div>";
		    echo "</div>";
		  	echo "</div>";
		    echo "<div class='row'>";
		    echo "<div class='col-md-12'>";
		    echo "<div class='text-actp'> ";
		    echo " <p>". $row['contenido']."</p>";
		    echo "</div>";
		    echo "</div>";
		    echo "</div>";
			echo "</div>";
			echo "<section id='photos'>";
			echo "<ul class='row caption-style-1'>";
        	echo "<li class='col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act'>";
          	echo "<img class='img-responsive' src=". $row['imagen1']. ">";
            echo "<div class='caption'>";
            echo "<div class='blur'><h2>+</h2></div>";
            echo "<div class='caption-text'>";
            echo "</div>";
            echo "</li>";
            echo "<li class='col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-act'>";
          	echo "<img class='img-responsive' src=". $row['imagen2']. ">";
            echo "<div class='caption'>";
            echo "<div class='blur'><h2>+</h2></div>";
            echo "<div class='caption-text'>";
            echo "</div>";
            echo "</li>";
            echo "</ul>";
			};
		
		$mysqli->close();
	}
 ?>