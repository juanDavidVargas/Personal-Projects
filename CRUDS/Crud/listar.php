<?php

  require_once 'Conexion/conexion.php';

  $registro = mysqli_query($conexion, "SELECT id, nombre, precio, descripcion FROM productos")
              or die("Error seleccionando los datos " . mysqli_error($conexion));

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Listado</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
   <body>
     <div class="container">
       <h2 align="center">Listado</h2>
     </div>
     <div class="row-fluid">
       <div class="container">
         <div class="col-md-2"></div>
         <div class="col-md-8">
           <hr>
           <a href="index.php"><button type="button" name="button" class="btn btn-info">Registrar</button></a>
           <hr>
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Nombre</th>
                 <th>precio</th>
                 <th>Descripción</th>
                 <th colspan="2">Opciones</th>
               </tr>
             </thead>
             <tbody>
              <?php while($row = mysqli_fetch_assoc($registro)): ?>
               <tr>
                 <td><?= utf8_encode($row['nombre']); ?></td>
                 <td><?= "$ " . number_format($row['precio'], 2, ",", "."); ?></td>
                 <td><?= utf8_encode($row['descripcion']); ?></td>
                 <td>
                   <a href="editar.php?id=<?php echo $row['id']; ?>">
                     <button type="button" name="btn-editar" class="btn btn-primary">Editar</button>
                   </a>
                 </td>
                 <td>
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>">
                      <button type="button" name="btn-eliminar"  class="btn btn-danger">Eliminar</button>
                    </a>
                 </td>
               </tr>
             <?php endwhile; cerrarConexion();?>
             </tbody>
           </table>
           <?php if(isset($_GET['alert2']) && $_GET['alert2'] == "success"): ?>
             <div class="alert alert-success" role="alert"><strong>Enhorabuena! datos actualizados correctamente</strong></div>
           <?php endif;  ?>
         </div>
         <div class="col-md-2"></div>
       </div>
     </div>
   </body>
 </html>
