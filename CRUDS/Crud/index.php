<?php
  require_once 'Conexion/conexion.php';
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Crud con PHP Nativo sin Frameworks</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
   <body>
      <div align="center">
        <h2>Registro</h2>
      </div>
      <div class="row-fluid">
        <div class="container">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <hr>
            <a href="listar.php"><button type="button" name="button" class="btn btn-info">Ir a listado </button></a>
            <hr>
            <form class="form-horizontal" action="guardar.php" method="post">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese el nombre del producto" class="form-control">
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" placeholder="Ingrese el precio del producto" class="form-control">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" placeholder="Ingrese la descripción" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="btn-guardar" class="btn btn-success" value="Guardar">
              </div>
            </form>
            <?php if(isset($_GET['alert']) && $_GET['alert'] == "success"): ?>
              <div class="alert alert-success" role="alert"><strong>Enhorabuena! datos guardados correctamente</strong></div>
            <?php endif;  ?>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
   </body>
 </html>
