<?php
    header("Content-Type: application/ms-word");
    header("Content-Disposition: attachment;filename=Reporte_Personal_Usuarios.doc");

    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db("ejemplo_pdf", $conexion);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
    <title>Reporte en EXCEL</title>
  </head>
  <body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th colspan="6" bgcolor="skyblue"><center>REPORTE TABLA USUARIOS</center></th>
      </tr>
      <tr bgcolor="red">
        <th>CÓDIGO</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>PAÍS</th>
        <th>EDAD</th>
        <th>DNI</th>
      </tr>

      <?php

        $sql = mysql_query("SELECT * FROM usuarios");
        while ($res = mysql_fetch_array($sql)) {
          $codigo = $res['codigo'];
          $nombre = $res['nombre'];
          $apellido = $res['apellido'];
          $pais = $res['pais'];
          $edad = $res['edad'];
          $dni = $res['dni'];
       ?>

       <tr>
         <td><?php echo $codigo; ?></td>
         <td><?php echo $nombre; ?></td>
         <td><?php echo $apellido; ?></td>
         <td><?php echo $pais; ?></td>
         <td><?php echo $edad; ?></td>
         <td><?php echo $dni; ?></td>
       </tr>

       <?php
          }
        ?>
    </table>
  </body>
</html>
