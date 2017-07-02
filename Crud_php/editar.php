<?php
require_once("CONEXION/conexion.php");

$cedula = $_POST['txtcedula'];
$nombre = $_POST['txtnombres'];
$apellido = $_POST['txtapellidos'];
$fecha = $_POST['txtfecha'];
$direccion = $_POST['txtdireccion'];
$telefono = $_POST['txttelefono'];

$sql = mysql_query("UPDATE datos_personales SET Nombres = '$nombre', Apellidos = '$apellido',
                    Fecha_Nacimiento = '$fecha', Direccion = '$direccion', Telefono = '$telefono' WHERE Cedula = '$cedula'");

if(!$sql){
  echo "Error en la modificación!";
}else{
  echo "Datos modificados correctamente..";
}




 ?>
