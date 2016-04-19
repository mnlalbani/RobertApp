<?php
	if (isset($_GET['salir'])) {
		session_unset();
		session_destroy();
	}
	if ($_SESSION != null) {
		echo "<a href='admin.php'>Aministración</a>";	
	}
	elseif ($_SESSION == null) {
		echo "<a href='login.php'>Aministración</a>";	
	}
	if ($_SESSION != null) {
		echo "<a href='index.php?salir=true'>Cerrar Sesión</a>";
	}
	
	
 ?>