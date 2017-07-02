<?php
	require_once("Conexion/conexion.php");
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Ejemplo 3</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Deudores 2016'
        },
        subtitle: {
            text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
        },
        xAxis: {
            categories: [

              <?php
                $sql =mysql_query("SELECT * FROM deudas ORDER BY monto ASC");
                while ($res = mysql_fetch_array($sql)) {

              ?>

              ['<?php echo $res['nombre']. " ". $res["apellido"] ?>'],

              <?php
                }
               ?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 2016',
            data: [
              <?php
                $sql =mysql_query("SELECT * FROM deudas ORDER BY monto DESC");
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
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo4.php">Ver ejemplo 4</a></center>
<br><br>
<center><a href="index.php">Volver</a></center>
	</body>
</html>
