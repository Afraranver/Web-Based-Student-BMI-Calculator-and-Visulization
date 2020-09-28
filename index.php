<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-light-grey" style="width:30%">
  <div class="w3-container w3-dark-grey">

  </div>

  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="individualPerformance.php" class="w3-bar-item w3-orange">Individual Performance</a>
  <a href="demographic.php" class="w3-bar-item w3-button">Demographic <span class="w3-tag w3-red w3-right w3-margin-right"></span></a>
  <a href="campaign.php" class="w3-bar-item w3-button">Campaign Performance</a>



  </div>
  <div style="margin-left:30%">

<div class="w3-container">
<!DOCTYPE html>
<html>
<body>
<table style="width:20%">
  <tr>
    <th><?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
$chart_data .= "{ Ethnic:'".$row["Ethnic"]."', Weight:".$row["Weight"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 

<html>
<head>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   <H3><p align= "center">Ethnicity</p></h3>
</head>
<body>
  <br /><br />
  <div class="container" align="right" style="width:408px;" >
   <h2 align="center"></h2>
   <h4 align="left">Weight loss%</h4>  
   <br /><br />
   <div id="chart"></div>
  </div>
</body>
</html>

<script>
Morris.Bar({
element : 'chart',
data:[<?php echo $chart_data; ?>],
xkey:'Ethnic',
ykeys:[ 'Weight'],
labels:['Weight'],
hideHover:'auto',
barColors: ["purple"],
stacked:true
});
</script><p align= "center">Ethnic Group</p></th>
   
<th>  <?php 

$dbhandle = new mysqli('localhost','root','','mar');
echo $dbhandle->connect_error;

$query = "SELECT Gender, sum(Total) FROM gender group by Gender";
$res = $dbhandle->query($query);

?>

<h3><p align="center">Gender</h3></p>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Total'],
          
          <?php 
while($row=$res->fetch_assoc())
{
    echo "['".$row['Gender']."',".$row['sum(Total)']."],";
}

          ?>

        ]);

        var options = {
          title: '',
          is3D:true,
          colors: ['green','orange']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 550px; height: 500px;"> </div></th> 

</table> 


  </body>
</html>
 

</body>
</html>

</div>

</div>
    
</body>
</html>

