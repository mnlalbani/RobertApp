<?php 
	session_start();
	include_once("connection.php");
  $errors = array();
  $data = array();
  	//var_dump($_POST);
    $sql = "SELECT * from `usuario` where `usuario`= '$_POST[usuario]' AND `password` = '$_POST[password]'";
    $result = $mysqli->query($sql);
    //echo $sql;
    $a = mysqli_num_rows($result);
    //var_dump($a);
     if ($a == 0) {
          $errors['invalido'] = "Usuaio o contraseña invalidos";
          $data['success'] = false;
          $data['errors'] = $errors;
          echo json_encode($data);
    }
    if ($a > 0) {
      $data['success'] = true;
      echo json_encode($data);
      while($a = mysqli_fetch_assoc($result)){
        $_SESSION['nombre'] = $a['nombre'];
        $_SESSION['apellido'] = $a['apellido'];
        $_SESSION['usuario'] = $a['usuario'];
        $_SESSION['tipo'] = $a['tipo'];
      }
    }
 ?>