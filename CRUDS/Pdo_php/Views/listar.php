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
        <h2 align="center">Listado</h2>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-hover">
              <tr>
                <thead>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Descripcion</th>
                  <th>Opciones</th>
                </thead>
                <tbody>
                  <?php echo $table; ?>
                </tbody>
              </tr>
            </table>
            <?php if(isset($_GET['alert2']) && $_GET['alert2'] == "success"): ?>
                <div class="alert alert-success" role="alert"><strong>Enhorabuena! los datos fuerón actualizados correctamente</strong></div>
            <?php endif; ?>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

  </body>
</html>
