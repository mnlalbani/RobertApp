<?php 
	session_start();
		if(isset($_SESSION['nombre'])){
			echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
            echo '<span class="username">'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</span>';
            echo '<b class="caret"></b>';
            echo '</a>';
            echo '<ul class="dropdown-menu extended logout">';
            echo '<div class="log-arrow-up"></div>';
            echo '<li>';
          	echo '<a href="index.php?salir=true"><i class="icon_key_alt"></i> Salir</a>';
            echo '</li>';
        }else {
        	header("location: login.php");
        }


 ?>