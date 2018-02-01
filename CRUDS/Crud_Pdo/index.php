<?php

require 'Class/Database.php';

$data = new Database();

$sth = $data->prepare("SELECT * FROM productos");
$sth->execute();
$result = $sth->fetchAll();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row-fluid">
      <div class="container">
        <h2 align="center">Listado</h2>
        <br>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php

              if ($result):

                foreach ($result as $value): ?>
                    <tr>

                      <td><?php echo $value['nombre']; ?></td>
                      <td><?php echo "$ " . number_format($value['precio'], 2, ",", "."); ?></td>
                      <td><?php echo utf8_encode($value['descripcion']); ?></td>
                      <td>
                        <a href="modificar.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Editar</a>
                      </td>
                      <td>
                        <a href="eliminar.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Eliminar</a>
                      </td>
                    </tr>
              <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6"><div align="center">No hay datos disponibles</div></td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <hr>
          <a href="nuevo.php"><button type="button" name="button" class="btn btn-info">Registrar Nuevo</button></a>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </body>
</html>
