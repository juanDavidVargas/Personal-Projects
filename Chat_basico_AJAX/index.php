<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Con Ajax</title>
    <script src="JS/jquery-3.1.1.js" type="text/javascript"></script>
    <style type="text/css">
      .boton{
        font-size: 15px;
        color: #FFF;
        background-color: #0040FF;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="" id="mostrar_mensaje" style="height: 300px; border: 1px solid #CCCCCC; padding: 12px; width: 600px; border-radius: 5px; overflow-x: hidden"></div>
    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <br><br>
    <label for="mensaje">Mensaje</label>
    <br>
    <textarea name="mensaje" id="mensaje" maxlength="100" cols="87" rows="4"></textarea>
    <br><br>
    <input type="button" name="enviar" value="Enviar" class="boton" onclick="enviar_insert();">

    <script type="text/javascript">
      function enviar_insert(){
        var nombre = document.getElementById('nombre').value;
        var mensaje = document.getElementById('mensaje').value;

        var parametros = {
          "nnombre" : nombre,
          "mmensaje" : mensaje,
          "pconsulta" : "consulta",
        };

        $.ajax({
          data: parametros,
          url:'valida_ajax.php',
          type: 'POST',
        });

        limpiar_datos();
      }

      setInterval("mostrar_enviado()", 500);
      mostrar_enviado();

      function mostrar_enviado(){
        var parametros = {
          "pconsulta" : "mostrar_mensajes",
        }
        $.ajax({
          data : parametros,
          url : "valida_ajax.php",
          type : 'POST',
          beforeSend : function(){

          },
          success: function(response){
            document.getElementById('mostrar_mensaje').innerHTML = response;
            var abajo = $("#mostrar_mensaje").prop("scrollHeight");
            $("#mostrar_mensaje").scrollTop(abajo);
          }
        })
      }

      function limpiar_datos(){
        document.getElementById('mensaje').value = "";
      }
    </script>
  </body>
</html>
