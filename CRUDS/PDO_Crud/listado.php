<?php

require_once 'Conexion/conexion.php';

$listado = new Producto("mysql:dbname=crud;host=localhost", "root", "");
$listado->conexion();

$cols = "nombre,precio,descripcion";
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="Assets/Js/jquery-3-2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row-fluid">
      <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h1 align="center">Listado</h1>
          <hr>
          <a href="formulario_insercion.php" class="btn btn-info">Registrar Nuevo</a>
          <hr>
          <table class="table table-hover">
            <thead>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripción</th>
            </thead>
            <?php $listado->listado($cols, "productos"); ?>
          </table>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </body>
</html>
