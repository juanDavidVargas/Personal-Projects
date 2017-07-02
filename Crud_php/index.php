<?php
  require_once("CONEXION/conexion.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="JS/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="JS/dataTables.min.js" type="text/javascript"></script>
    <script src="JS/i18n/es.js" type="text/javascript"></script>
    <link rel="stylesheet" href="CSS/dataTables.min.css" type="text/css">
    <script type="text/javascript">
        var procedimiento = "nuevo";
      $(document).ready(function(){
          $("#loader").hide();
          $("#formularioRegistrar").hide();
          $("#example").dataTable();

            $("#btnProcesar").click(function(){
                $("#loader").show();
                var datos = $("#frmRegistrar").serialize();
                  if(procedimiento == "nuevo"){
                    $.ajax({
                      url : "guardar.php",
                      type : "POST",
                      data : datos,
                      success : function(r){
                        alert(r);
                        $("#loader").hide();
                        window.location.reload();
                      }
                    });
                  }else if(procedimiento == "editar"){
                    $.ajax({
                      url : "editar.php",
                      type : "POST",
                      data : datos,
                      success : function(r){
                        alert(r);
                        $("#loader").hide();
                        window.location.reload();
                      }
                    });
                  }
          });
      });

      function eliminar(cedula){
        if(confirm("¿Esta seguro de eliminar este registro?")){
          var ced = "Cedula=" + cedula;
          $.ajax({
            url : "eliminar.php",
            data : ced,
            type : "POST",
            success : function(respuesta){
              alert(respuesta);
              window.location.reload();
            }
          })
        }
      }

      function mostrarForm(){
          $("#formularioRegistrar").show();
          $("#leyenda").text("Nuevo Registro");
      }

      function cancelarRegistro(){
          $("#formularioRegistrar").hide();
      }

      function editar(cedula){
        $("#leyenda").text("Actualizar Datos");
        procedimiento = "editar";
          var ced = "Cedula=" + cedula;
          $.ajax({
            url : "buscar.php",
            data : ced,
            type : "POST",
            dataType : "json",
            success : function(respuesta){
                  $("#formularioRegistrar").show();
                  $("#txtcedula").val(respuesta.Cedula);
                  $("#txtnombres").val(respuesta.Nombres);
                  $("#txtapellidos").val(respuesta.Apellidos);
                  $("#txtfecha").val(respuesta.Fecha_Nacimiento);
                  $("#txtdireccion").val(respuesta.Direccion);
                  $("#txttelefono").val(respuesta.Telefono);
            }
          })
      }
    </script>
    <title></title>
  </head>
  <body>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Cédula</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Fecha Nacimiento</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sql = mysql_query("SELECT Cedula, Nombres, Apellidos, Fecha_Nacimiento, Direccion, Telefono FROM datos_personales ORDER BY Nombres");
         ?>
        <?php
        while ($datos = mysql_fetch_array($sql)) {

         ?>
        <tr class="odd gradeX">
          <td><?php echo $datos['Cedula']; ?></td>
          <td><?php echo $datos['Nombres']; ?></td>
          <td><?php echo $datos['Apellidos']; ?></td>
          <td><?php echo $datos['Fecha_Nacimiento']; ?></td>
          <td><?php echo $datos['Direccion']; ?></td>
          <td><?php echo $datos['Telefono']; ?></td>
          <td>
            <img src="IMG/register.png" alt="No se puede cargar la imagen" width="25" height="25" title="Registrar" style="cursor: pointer" id="nuevo" name="nuevo" onclick="mostrarForm()">
            <img src="IMG/modify.jpg" alt="No se puede cargar la imagen" width="25" height="25" title="Modificar" style="cursor: pointer" onclick="editar(<?php echo $datos['Cedula']; ?>)">
            <img src="IMG/delete.jpg" alt="No se puede cargar la imagen" width="25" height="25" title="Eliminar" style="cursor: pointer" onclick="eliminar(<?php echo $datos['Cedula']; ?>)">
          </td>
        </tr>
        <?php
          }
         ?>
      </tbody>
    </table>
    <div id="formularioRegistrar" align="center" style="margin-top: 100px">
      <div id="procedimiento"></div>
      <fieldset style="display: inline">
        <legend><h2 id="leyenda"></h2></legend>
      <form name="frmRegistrar" id="frmRegistrar" action="#" method="post">
          <table>
            <tr>
              <td>Cédula: </td>
              <td><input type="text" name="txtcedula" id="txtcedula"></td>
            </tr>
            <tr>
              <td>Nombres: </td>
              <td><input type="text" name="txtnombres" id="txtnombres"></td>
            </tr>
            <tr>
              <td>Apellidos: </td>
              <td><input type="text" name="txtapellidos" id="txtapellidos"></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento</td>
              <td><input type="text" name="txtfecha" id="txtfecha" placeholder="YY-mm-dd"></td>
            </tr>
            <tr>
              <td>Dirección: </td>
              <td><input type="text" name="txtdireccion" id="txtdireccion"></td>
            </tr>
            <tr>
              <td>Teléfono: </td>
              <td><input type="text" name="txttelefono" id="txttelefono"></td>
            </tr>
            <tr>
              <td><button type="button" name="btnProcesar" id="btnProcesar">Procesar Datos</button></td>
              <td><input type="reset" name="btnBorrar" id="btnBorrar" value="Borrar"></td>
              <td><input type="button" name="btnCancelar" id="btnCancelar" value="Cancelar" onclick="cancelarRegistro()"></td>
            </tr>
            <tr>
              <td colspan="3" align="center">
                <div id="loader">
                  <img src="IMG/47.gif" alt="No se puede cargar la imagen">
                </div>
              </td>
            </tr>
          </table>
      </form>
      </fieldset>
    </div>
  </body>
</html>
