<?php

require '../Conexion/conexion.php';

if(isset($_POST['btn-guardar']))
{
  // mysqli_escape_string()
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];

  mysqli_query($conexion, "INSERT INTO productos (id, nombre, precio, descripcion) VALUES (null, '$nombre', '$precio', '$descripcion')")
  or die("Error insertando los datos " . mysqli_error($conexion));
  cerrarConexion();

  header('location: ../Views/index.php?alert=success');
}

else
{
  header('location: ../Views/index.php');
}




 ?>
