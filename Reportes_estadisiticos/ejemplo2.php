<?php
	require_once("Conexion/conexion.php");
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Ejemplo 2</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {

    Highcharts.chart('container', {
        chart: {
            type: 'pyramid',
            marginRight: 150
        },
        title: {
            text: 'Deudores 2016',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Unique users',
            data: [
              <?php
                $sql =mysql_query("SELECT * FROM deudas ORDER BY monto ASC");
                while ($res = mysql_fetch_array($sql)) {

              ?>
                ['<?php echo $res["nombre"]. " ".$res["apellido"]; ?>', <?php echo $res["monto"];?>],

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
<script src="https://code.highcharts.com/modules/funnel.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 410px; max-width: 600px; height: 400px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo3.php">Ver ejemplo 3</a></center>
<br><br>
<center><a href="index.php">Volver</a></center>
	</body>
</html>
