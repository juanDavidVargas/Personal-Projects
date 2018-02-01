<?php



if (isset($_GET['id']) && $_GET['id'] != "")
{
  require_once 'Conexion/conexion.php';

  mysqli_query($conexion, "DELETE FROM productos WHERE id = '$_GET[id]'")
  or die("Error eliminando los datos " . mysqli_error($conexion));

  cerrarConexion();

  header('location: listar.php');
}

else

{
  header('location: listar.php');
}




 ?>
