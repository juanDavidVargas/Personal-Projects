<?php
  use Dompdf\Dompdf;

  require_once('dompdf/autoload.inc.php');
  ob_start();
  $conexion = mysql_connect("localhost", "root", "");
  mysql_select_db("ejemplo_pdf", $conexion);

  $codigoHTML ='
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Reportes</title>
   </head>
   <body>
     <table width="100%" border="1" cellspacing="0" cellpadding="0">
       <tr>
         <td colspan="6" bgcolor="skyblue"><center><strong>REPORTE DE LA TABLA USUARIOS</strong></center></td>
       </tr>
       <tr bgcolor="red">
         <th>CÓDIGO</th>
         <th>NOMBRE</th>
         <th>APELLIDO</th>
         <th>PAÍS</th>
         <th>EDAD</th>
         <th>DNI</th>
       </tr>';

         $sql = mysql_query("SELECT * FROM usuarios");
         while ($res = mysql_fetch_array($sql)) {
           $codigoHTML .='
           <tr>
           <td>'.$res['codigo'].'</td>
           <td>'.$res['nombre'].'</td>
           <td>'.$res['apellido'].'</td>
           <td>'.$res['pais'].'</td>
           <td>'.$res['edad'].'</td>
           <td>'.$res['dni'].'</td>
           </tr>';
         }

      $codigoHTML .= '
     </table>
   </body>
 </html>';

 $codigoHTML = utf8_encode($codigoHTML);
 $codigoHTML = utf8_decode($codigoHTML);
 $dompdf = new Dompdf();
 $dompdf->loadHtml($codigoHTML);
 ini_set("memory_limit", "128M");
 $dompdf->render();
 $dompdf->stream("Reporte_tabla_usuarios.pdf");

 ?>
