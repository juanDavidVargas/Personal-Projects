<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba CRUD</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row-fluid">
      <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 align="center">Registro</h1>
          <hr>
          <a href="Listado.php" class="btn btn-info">Ir a listado</a>
          <hr>
          <form class="form-horizontal" action="../Logica/guardar.php" method="post">
            <div class="form-group">
              <label for="nombre">nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingresar el nombre">
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="number" name="precio" class="form-control" placeholder="Ingresar el precio">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <textarea name="descripcion" class="form-control" placeholder="Ingresar la descripción" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="btn-guardar" class="btn btn-success" value="Guardar">
            </div>
          </form>
          <?php if (isset($_POST['alert']) && $_POST['alert'] == "success"): ?>
            <div class="alert alert-success" role="alert"><strong>Enhorabuena!</strong> Los datos fuerón guardados correctamente</div>
          <?php endif; ?>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
