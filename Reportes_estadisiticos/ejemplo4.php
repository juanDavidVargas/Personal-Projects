<?php
	require_once("Conexion/conexion.php");
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Ejemplo 4</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
#container {
    height: 400px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}
		</style>
		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 30,
                depth: 75
            }
        },
        title: {
            text: 'Deudores 2016'
        },
        subtitle: {
            text: 'La gráfica nos muestra las personas que deben'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
              <?php
                $sql =mysql_query("SELECT * FROM deudas ORDER BY monto ASC");
                while ($res = mysql_fetch_array($sql)) {

              ?>
              ['<?php echo $res["nombre"]. " ".$res["apellido"] ?>'],

              <?php
                }
               ?>
            ]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Deudas',
            data: [
              <?php
                $sql =mysql_query("SELECT * FROM deudas ORDER BY monto ASC");
                while ($res = mysql_fetch_array($sql)) {

              ?>
              [<?php echo $res["monto"]; ?>],

              <?php
                }
               ?>
            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
<br><br>
<center><a href="index.php">Volver</a></center>
	</body>
</html>
