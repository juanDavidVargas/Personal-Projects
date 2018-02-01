
<?php

require '../Config/config.php';
require '../Library/DataBase.php';
require '../Model/Productos.php';

$productos = new Productos();

if(isset($_GET['id'])){
  $productos->setId($_GET['id']);

  try
  {
    if ($productos->eliminar())
    {
        header('location: listController.php');
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
  header('location: listController.php');
  exit();
}
