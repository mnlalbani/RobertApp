<?php 
	session_start();
		if(isset($_SESSION['nombre'])){
			echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
            echo '<span class="username"><i class="fa fa-user" style="margin-right:10px;"></i>'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</span>';
            echo '<b class="caret"></b>';
            echo '</a>';
            echo '<ul class="dropdown-menu extended logout">';
            echo '<div class="log-arrow-up"></div>';
            echo '<li>';
            echo '<a class="cerrar"href="index.php"><i class="fa fa-home" style="color:blue;" ></i></i> volver a rotary</a>';
            echo '</li>';

            echo '<li>';
          	echo '<a class="cerrar"href="login.php?salir=true"><i class="fa fa-times" style="color:red;" ></i></i> cerrar sesion</a>';
            echo '</li>';
            
        }else {
        	header("location: login.php");
        }


 ?>