<?php

require 'Class/Database.php';

$data = new Database();

$id = $_GET['id'];

$sth = $data->prepare("SELECT * FROM productos WHERE id = :id");
$sth->bindParam(":id", $id);
$sth->execute();
$result = $sth->fetchAll();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD con PDO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row-fluid">
      <div class="container">
        <h1 align="center">Registro</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form class="form-horizontal" action="modificar_exe.php" name="crud" method="post">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" class="form-control" value="<?php echo utf8_encode($result[0]['nombre']); ?>">
            </div>
            <div class="form-group">
              <label for="desc">Descripción</label>
              <textarea name="desc" class="form-control" rows="5"><?php echo utf8_encode($result[0]['descripcion']); ?></textarea>
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="number" name="precio" class="form-control" value="<?php echo $result[0]['precio']; ?>">
              <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">
            </div>
            <div class="form-group">
              <input type="submit" name="btn-guardar" class="btn btn-success" value="Actualizar">
            </div>
          </form>
            <a href="index.php" class="btn btn-info">Ir a listado</a>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
