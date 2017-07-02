<?php
require_once("CNX/conexion.php");

$pconsulta = $_REQUEST['pconsulta'];


if ($pconsulta == "consulta") {
  echo insertar_datos();
}elseif ($pconsulta = "mostrar_mensajes") {
  echo cargar_datos();
}

function insertar_datos(){
  $mmensaje = $_REQUEST['mmensaje'];
  $nnombre = $_REQUEST['nnombre'];

  $sql = "INSERT INTO  chat(mensaje, nombre) VALUES('$mmensaje', '$nnombre')";
  mysql_query($sql);
}

function cargar_datos(){
  $sql = "SELECT nombre, mensaje FROM chat ORDER BY id ASC";
  $r = mysql_query($sql);
  while ($res = mysql_fetch_array($r)) {
    $nom = $res["nombre"];
    $men = $res["mensaje"];

    echo "<strong>".$nom.":</strong> ".$men."<br>";
  }
}


 ?>
