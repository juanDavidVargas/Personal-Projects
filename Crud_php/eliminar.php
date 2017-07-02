<?php
  require_once("CONEXION/conexion.php");

  $cedula = $_POST['Cedula'];

  $sql = mysql_query("DELETE FROM datos_personales WHERE Cedula = $cedula");

  echo "Persona eliminada correctamente";

 ?>
