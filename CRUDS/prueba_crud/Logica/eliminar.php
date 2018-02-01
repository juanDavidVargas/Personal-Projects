<?php

require '../Conexion/conexion.php';

if(isset($_GET['id']))
{

  $id = $_GET['id'];

  mysqli_query($conexion, "DELETE FROM productos WHERE id = '$id'")
  or die("Error eliminando los datos " . mysqli_error($conexion));
  cerrarConexion();

  header('location: ../Views/Listado.php');
}

else
{
  header('location: ../Views/Listado.php');
}

 ?>
