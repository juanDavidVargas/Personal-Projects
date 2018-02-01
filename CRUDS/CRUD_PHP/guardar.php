<?php
  require_once("CONEXION/conexion.php");

  $cedula = $_POST['txtcedula'];
  $nombre = $_POST['txtnombres'];
  $apellido = $_POST['txtapellidos'];
  $fecha = $_POST['txtfecha'];
  $direccion = $_POST['txtdireccion'];
  $telefono = $_POST['txttelefono'];

  $sql = mysql_query("INSERT INTO datos_personales VALUES('$cedula', '$nombre', '$apellido', '$fecha', '$direccion', '$telefono')");

  if(!$sql){
    echo "Error en el registro!";
  }else{
    echo "Persona registrada correctamente..";
  }

 ?>
