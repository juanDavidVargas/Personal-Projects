<?php
    require_once 'Conexion/conexion.php';


    if(isset($_POST['btn-guardar']) && $_POST['btn-guardar'] != "")
    {
      $nombre = utf8_decode($_POST['nombre']);
      $precio = $_POST['precio'];
      $descripcion = utf8_decode($_POST['descripcion']);

      mysqli_query($conexion, "INSERT INTO productos (id, nombre, descripcion, precio) VALUES (null, '$nombre', '$descripcion', '$precio')")
      or die("Error insertando los datos " . mysqli_error($conexion));

      cerrarConexion();

      header('location: index.php?alert=success');
    }
    else
    {
        header('location: index.php');
    }
 ?>
