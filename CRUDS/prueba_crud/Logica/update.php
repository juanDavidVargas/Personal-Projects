<?php

require_once '../Conexion/conexion.php';

if (isset($_POST['btn-actualizar']))
{
  $id = $_POST['id'];
  $name = utf8_decode($_POST['nombre']);
  $price = $_POST['precio'];
  $desc = utf8_decode($_POST['descripcion']);

  mysqli_query($conexion, "UPDATE productos SET nombre = '$name', descripcion = '$desc',  precio = '$price' WHERE id = '$id'")
  or die("Error actualizando los datos " . mysqli_error($conexion));

  cerrarConexion();

  header('location: ../Views/Listado.php?alert2=success');
}

 else
 {
   header('location: ../Views/Listado.php');
 }


 ?>
