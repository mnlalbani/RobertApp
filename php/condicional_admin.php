<?php 
	if ($_SESSION['tipo'] != 2) {
		echo "href='' id='usuario'";
	}
	else
		echo "id='notAllowed'";
 ?>