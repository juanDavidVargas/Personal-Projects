
<?php

require '../Config/config.php';
require '../Library/DataBase.php';
require '../Model/Productos.php';

$productos = new Productos();

$table = "";

foreach ($productos->listar() as $value)
{
  $table .= "<tr>";
  $table .= "<td>".$value['nombre']."</td>";
  $table .= "<td> $ ".number_format($value['precio'], 2, ",", ".")."</td>";
  $table .= "<td>".$value['descripcion']."</td>";
  $table .= "<td><a href='updateController.php?id=".$value['id']."' class='btn btn-primary'>Editar</a></td>";
  $table .= "<td><a href='deleteController.php?id=".$value['id']."' class='btn btn-danger'>Eliminar</a></td>";
  $table .= "</tr>";
}

include '../Views/listar.php';
