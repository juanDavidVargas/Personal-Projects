<?php
    require_once("CONEXION/conexion.php");

    $cedula = $_POST['Cedula'];

    $sql = mysql_query("SELECT Cedula, Nombres, Apellidos, Fecha_Nacimiento, Direccion, Telefono FROM datos_personales WHERE Cedula = '$cedula'");
    $info = array();
    while ($datos = mysql_fetch_array($sql)) {
      $nombre = $datos['Nombres'];
      $apellido = $datos['Apellidos'];
      $fecha = $datos['Fecha_Nacimiento'];
      $direccion = $datos['Direccion'];
      $telefono = $datos['Telefono'];
    }

    $info['Cedula'] = $cedula;
    $info['Nombres'] = $nombre;
    $info['Apellidos'] = $apellido;
    $info['Fecha_Nacimiento'] = $fecha;
    $info['Direccion'] = $direccion;
    $info['Telefono'] = $telefono;

    echo json_encode($info);
 ?>
