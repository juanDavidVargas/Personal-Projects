
<?php

require '../Config/config.php';
require '../Library/DataBase.php';
require '../Model/Productos.php';

if (isset($_GET['id']))
{
  include '../Views/editar.php';
}
else
{
  header('location: listController.php');
}
