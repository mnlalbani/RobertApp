<?php 
	session_start();
	include_once("connection.php");
  	var_dump($_POST);
    $sql = "SELECT * from `usuario` where `usuario`= '$_POST[usuario]' AND `password` = '$_POST[password]'";
    $result = $mysqli->query($sql);
    //echo $sql;
    $a = mysqli_num_rows($result);
    if ($a > 0) {
      while($a = mysqli_fetch_assoc($result)){
        $_SESSION['nombre'] = $a['nombre'];
        $_SESSION['apellido'] = $a['apellido'];
        $_SESSION['usuario'] = $a['usuario'];
        $_SESSION['tipo'] = $a['tipo'];
      }      
      header("location: http://localhost/rotary/admin.php");
      exit();
    }
    else{
      header("location: ../login.php");
    }
 ?>