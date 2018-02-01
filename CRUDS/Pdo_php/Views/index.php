<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1 align="center">Registro</h1>
    </div>
    <div class="row-fluid">
      <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <hr>
            <a href="listController.php" class="btn btn-info">Listado</a>
          <hr>
          <form class="form-horizontal" action="registerController.php" method="post">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" placeholder="Ingresar el nombre" class="form-control">
            </div>
            <div class="form-group">
              <label for="price">Precio</label>
              <input type="number" name="price" placeholder="Ingresar el precio" class="form-control">
            </div>
            <div class="form-group">
              <label for="desc">Descripción</label>
              <textarea name="desc" placeholder="Ingresar la descripción" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="btn-guardar" class="btn btn-success" value="Guardar">
            </div>
          </form>

          <?php if(isset($_GET['alert']) && $_GET['alert'] == "success"): ?>
              <div class="alert alert-success" role="alert"><strong>Enhorabuena! los datos fuerón guardados correctamente</strong></div>
          <?php endif; ?>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
