<?php
require_once("conexion.php");

  $plistar = $_POST['plistar'];

if ($plistar == "listado") {
  echo listar_detalle();
}

function listar_detalle(){
  $tmp = "";
  $tmp .= "<center><table border='1'>";
  $tmp .= "<tr bgcolor='skyblue'>";
  $tmp .= "<th>Id</th><th>Nombre</th><th>País</th><th>Ciudad</th>";
  $tmp .= "</tr>";

  $sql = "SELECT Id, nombre, pais, ciudad  FROM usuarios ORDER BY pais";
  $r = mysql_query($sql);
  while ($res = mysql_fetch_array($r)) {
      $tmp .= "<tr>";
      $tmp .= "<td>".$res['Id']."</td>";
      $tmp .= "<td>".$res['nombre']."</td>";
      $tmp .= "<td>".$res['pais']."</td>";
      $tmp .= "<td>".$res['ciudad']."</td>";
      $tmp .= "</tr>";
  }

  $tmp .= "</table></center>";

  echo $tmp;
}




 ?>
