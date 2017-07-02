<!DOCTYPE html>
<html>
  <head>
    <script src="JS/jquery-3.1.1.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <title>Efecto Loading</title>
    <style media="screen">
      .boton{
        background-color: blue;
        color: white;
        border-radius: 7px;
        font-size: 25px;
        width: 250px;
      }
    </style>
  </head>
  <body>
    <center><br><span style="color: red; font-size: 40px"><strong>...Efecto Loading Usando Ajax...</span></strong>
    <br><br><input type="submit" name="Listar" id="Listar" value="Listar" class="boton" onclick="listar_tabla()">
    <br>
    <div class="" id="mostrar_loading" style="display: none"></div>
    <br>
    <div class="" id="mostrar_tabla"></div>
    </center>


    <script type="text/javascript">
      function listar_tabla(){
        var parametros ={
          "plistar" : "listado",
        };
        $.ajax({
          data: parametros,
          url : "listar_ajax.php",
          type : "POST",
          beforeSend : function(){
              document.getElementById('mostrar_loading').style.display = "block";
              document.getElementById('mostrar_loading').innerHTML = "<img src='IMG/62152.gif' width='150' height='150'>";
          },
          success : function(response){
            document.getElementById('mostrar_loading').style.display = "none";
            document.getElementById('mostrar_tabla').innerHTML = response;
          }
        });
      }
    </script>
  </body>
</html>
