<?php
	if (isset($_GET['salir'])) {
		session_unset();
		session_destroy();
	}
	if ($_SESSION != null) {
		echo "<a href='admin.php'><i class='fa fa-user' style='color:#17458F; margin:0 0px 0 10px; font-size:20px;'></i></a>";	
	}
	elseif ($_SESSION == null) {
		echo "<a href='login.php'><i style='font-size:20px; color:#17458F; margin:0 0px 0 10px;'class='fa fa-unlock-alt' ></i></a>";	
	}
	if ($_SESSION != null) {
		echo "<a href='index.php?salir=true'><i class='fa fa-unlock' style='font-size:20px;margin:0 0px 0 10px;color:#17458F;'></i></a>";
	}
	
	
 ?>