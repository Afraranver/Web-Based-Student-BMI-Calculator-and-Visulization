<?php
$koneksi    = mysqli_connect("localhost", "root", "", "mar");
$Goals   = mysqli_query($koneksi, "SELECT Goals FROM mar_campaign order by ID asc");
$Name      = mysqli_query($koneksi, "SELECT Name FROM mar_campaign order by ID asc");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Batang</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body><br><br>
   <b><h3><p align="center">Individual Performance</h3></b></p>
<table style="width:30%" height="70" align="right">
  
  <tr>
    <td><b>Goals Achieved</b></td>
    <td><b>Goals Not achived</B></td>
  
  </tr>
  <tr>
    <td bgcolor="#800000"></td>
    <td bgcolor="#F07124"></td>
   
  </tr>
</table>
    <div class="container">
        <canvas id="barchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($Name)) { echo '"' . $p['Name'] . '",';}?>],
            datasets: [
            {
              label: "Goals",
              data: [<?php while ($p = mysqli_fetch_array($Goals)) { echo '"' . $p['Goals'] . '",';}?>],
              backgroundColor: [
                '#F07124', //orange
                '#800000', //red 	
                '#F07124',                           
                '#CBE0E3',
                '#F07124',
				'#800000',
				'#800000',
				'#F07124',
				'#F07124',
				'#800000',
				'#800000',
				'#F07124',
				'#F07124',
				'#F07124',
				'#F07124',
				'#800000',
		
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{                    
                  ticks: {
                      min: 0                                                                                       ,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
