<?php


$conexion = mysqli_connect("localhost", "root", "");

if (!$conexion)
{
  die("Error conectando con el servidor " . mysqli_error($conexion));
}

mysqli_select_db($conexion, "crud") or die("Error seleccionando la base de datos " . mysqli_error($conexion));

function cerrarConexion()
{
  mysqli_close($GLOBALS['conexion']);
}


 ?>
