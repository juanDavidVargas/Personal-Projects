<?php


if (isset($_GET['id']) && $_GET['id'] != "")
{
  require_once 'Conexion/conexion.php';

    $id = $_GET['id'];

    $datos = mysqli_query($conexion, "SELECT * FROM productos WHERE id = '$id'")
             or die("Error seleccionando los datos " . mysqli_error($conexion));

    $row = mysqli_fetch_assoc($datos);
?>

<?php
  require_once 'Conexion/conexion.php';
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Editar</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
   <body>
      <div align="center">
        <h2>Actualizar</h2>
      </div>
      <div class="row-fluid">
        <div class="container">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <hr>
            <a href="listar.php"><button type="button" name="button" class="btn btn-info">Ir a listado </button></a>
            <hr>
            <form class="form-horizontal" action="actualizar.php" method="post">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?= utf8_encode($row['nombre']); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" value="<?= $row['precio'] ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" placeholder="Ingrese la descripción" class="form-control" rows="5"><?= utf8_encode($row['descripcion']); ?></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="btn-actualizar" class="btn btn-success" value="Actualizar">
              </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
   </body>
 </html>

<?php
cerrarConexion();
}
else
{
  header('location: listar.php');
}

?>
