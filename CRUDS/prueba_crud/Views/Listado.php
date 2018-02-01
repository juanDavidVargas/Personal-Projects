
<?php

require '../Conexion/conexion.php';

$registro = mysqli_query($conexion, "SELECT * FROM productos");
cerrarConexion();
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
    <div class="row-fluid">
      <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 align="center">Listado</h1>
          <hr>
          <a href="index.php" class="btn btn-info">Registrar</a>
          <hr>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($registro)):?>
              <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td>
                  <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar</a>
                </td>
                <td>
                  <a href="../Logica/eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
            <?php endwhile; ?>
            </tbody>
          </table>
          <?php if (isset($_POST['alert2']) && $_POST['alert2'] == "success"): ?>
            <div class="alert alert-success" role="alert"><strong>Enhorabuena!</strong> Los datos fuerón actualizados correctamente</div>
          <?php endif; ?>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
