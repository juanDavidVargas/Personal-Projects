<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD CON PDO</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="txtcedula">Cédula</label>
      <input type="text" name="txtcedula">
      <label for="txtnombre">Nombres</label>
      <input type="text" name="txtnombre">
      <label for="txtemail">Email</label>
      <input type="text" name="txtemail">
      <label for="txttelefono">Telefono</label>
      <input type="text" name="txttelefono">
      <button type="submit" name="btnguardar">Guardar</button>
      <button type="submit" name="btnmodificar">Modificar</button>
    </form>
    <br>
    <table>
      <thead>
        <tr>
          <th>Cédula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?= $tabla; ?>
      </tbody>
    </table>
  </body>
</html>
