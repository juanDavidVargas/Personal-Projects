<?php

require '../Config/config.php';
require '../Library/DataBase.php';
require '../Model/Productos.php';

$productos = new Productos();

if (isset($_POST['btn-actualizar']))
{
  $productos->setId($_POST['id']);
  $productos->setNombre($_POST['name']);
  $productos->setPrecio($_POST['price']);
  $productos->setDescripcion($_POST['desc']);

  try
  {
    if($productos->modificar())
    {
      header('location: listController.php?alert2=success');
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
