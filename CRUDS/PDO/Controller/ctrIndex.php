<?php

require '../Config/Config.php';
require '../Library/DataBase.php';
require '../Model/Persona.php';

$persona = new Persona();

if(isset($_POST['btnguardar']))
{
  $persona->setCedula($_POST['txtcedula']);
  $persona->setNombre($_POST['txtnombre']);
  $persona->setEmail($_POST['txtemail']);
  $persona->setTelefono($_POST['txttelefono']);


try{
  if ($persona->Guardar())
  {
    echo "<script>alert('Guardado Exitoso')</script>";
  }else {
      echo "<script>alert('Error guardando los datos')</script>";
  }
}catch(Exception $e){
  echo $e->getMessage();
}
}

else if(isset($_POST['btnmodificar']))
{
  $persona->setCedula($_POST['txtcedula']);
  $persona->setNombre($_POST['txtnombre']);
  $persona->setEmail($_POST['txtemail']);
  $persona->setTelefono($_POST['txttelefono']);

  if ($persona->Modificar())
  {
      echo "<script>alert('Modificación Exitosa')</script>";
  }else {
      echo "<script>alert('Error Modificando los datos')</script>";
  }
}

if(isset($_GET['txtcedula'])){
$persona->setCedula($_GET['txtcedula']);

if ($persona->Eliminar())
{
    echo "<script>alert('Eliminación Exitosa')</script>";
}else {
    echo "<script>alert('Error en la eliminación de los datos')</script>";
  }
}

$tabla = "";
foreach ($persona->Listar() as $value) {
  $tabla .= "<tr>";
  $tabla .= "<td>". $value['Cedula'] ."</td>";
  $tabla .= "<td>". $value['Nombres'] ."</td>";
  $tabla .= "<td>". $value['Email'] ."</td>";
  $tabla .= "<td>". $value['Telefono'] ."</td>";
  $tabla .= "<td><a href='ctrIndex.php?txtcedula=".$value['Cedula']."'>Eliminar</a></td>";
  $tabla .= "</tr>";
}

include '../View/Index.php';
 ?>
