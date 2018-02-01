<?php

require '../Config/config.php';
require '../Library/DataBase.php';
require '../Model/Productos.php';

$productos = new Productos();

if (isset($_POST['btn-guardar']))
{
  $productos->setNombre($_POST['name']);
  $productos->setPrecio($_POST['price']);
  $productos->setDescripcion($_POST['desc']);

  try
  {
    if($productos->guardar())
    {
      header('location: indexController.php?alert=success');
      exit();
    }

  }
  catch (Exception $e)
  {
    echo $e->getMessage();
  }
}

else
{
  header('location: indexController.php');
  exit();
}
 ?>
