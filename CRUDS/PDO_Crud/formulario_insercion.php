<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD PDO POO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="Assets/Js/jquery-3-2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row-fluid">
      <div class="container">
        <h1 align="center">Registro</h1>
        <br>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form class="form-horizontal" action="insertar.php" method="post">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre">
            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="number" name="precio" class="form-control" placeholder="Ingresar precio">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <textarea name="descripcion" class="form-control" placeholder="Ingresar descripción" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="btn-guardar" value="Guardar" class="btn btn-success">
            </div>
          </form>
          <?php if(isset($_GET['msj']))
            {
              echo $_GET['msj'];
            }
           ?>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
