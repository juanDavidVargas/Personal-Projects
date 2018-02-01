<?php

$conexion = mysqli_connect("localhost", "root", "");

if (!$conexion)
{
  die("Error conectando con el servidor " . mysqli_error($conexion));
}

mysqli_select_db($conexion, "prueba_crud");

function cerrarConexion()
{
  mysqli_close($GLOBALS['conexion']);
}
 ?>
