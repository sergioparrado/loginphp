<?php

if (!empty($_POST["btningresar"])) {
 if (empty($_POST["usuario"]) and empty($_POST["password"])) {
  echo '<div id="popup">Los campos están vacíos!</div>';
 } else {
  $usuario = $_POST["usuario"];
  $password = $_POST["password"];
  $sql = $conexion->query("select * from user where usuario='$usuario' and password='$password'");
  if ($datos = $sql->fetch_object()) {
   header("location:inicio.php");
  } else {
   echo '<div id="popup">Acceso denegado!</div>';

  }
 }

}

