<html>
<body style="background-color:#d2b4de   ;">
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 1;
  width: 21%;
  background-color: #e5e7e9;
  position: fixed;
  height: 100%;

}

li a {
  display: block;
  color: #000;
  padding: 8px 14px;
  text-decoration: none;
}

li a.active {
  background-color: #7dcea0;
  color: white;
}

li a:hover:not(.active) {
  background-color: 
#ecf0f1 ;
  color: black;
}
</div>
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li><br>
   <li><a  href="data.php"><font face=" Comic Sans MS"><img src="data.png" width="10%">Data</a></font></li><br>
  <li><a  href="individualPerformance.php"><font face=" Comic Sans MS"><img src="in.png" width="10%">Individual Performance</a></font></li><br>
  <li><a  class="active" href="demographic.php"><font face=" Comic Sans MS"><img src="demo.png" width="10%">Demographic Performance</font></a></li><br>
  <li><a href="campaign.php"><font face=" Comic Sans MS"><img src="cp.png" width="10%">Campaign Performance</font></a></li><br></font>
</ul>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color:#5dade2;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 50;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


</style>
</head>
<body>

<div class="navbar">
  <a href="#home"><font face=" Comic Sans MS">Health Analytics System</a></font>
  <p align="right" href="http://localhost/dashboard/login/" ><font face=" Comic Sans MS"color="white" >Logout</a></p></font>
  

</div>

</body>
</html>

</body>
</html>
<style>

</style>
</head>
<body>





<!DOCTYPE html>
<div style="margin-left:25%;width:10px;height:30px;">
<html>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  shadow: 6 49px 89px 0 rgba(0,0,0,0.2);
    transition: 0.200s;
	
}
th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}


</style>
</head>
<body>

  <tr>
    <th>
    	<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT * FROM mar_campaign";
$result = mysqli_query($connect, $query);



$query = "SELECT avg(Goals) as 'avg1' from mar_campaign where Ethnic='Malay'";
$res = mysqli_query($connect, $query);
$data = mysqli_fetch_array($res);
$b = $data['avg1']*10;

$query = "SELECT avg(Goals) as 'avg2' from mar_campaign where Ethnic='Indian'";
$res1 = mysqli_query($connect, $query);
$data1 = mysqli_fetch_array($res1);
$c = $data1['avg2'] * 10;

$query = "SELECT avg(Goals) as 'avg3' from mar_campaign where Ethnic='Chinese'";
$res2 = mysqli_query($connect, $query);
$data2 = mysqli_fetch_array($res2);
$d = $data2['avg3']* 10;

$query = "SELECT sum(Weight_loss) as 'avgm' from mar_campaign where Gender='Male'";
$res3 = mysqli_query($connect, $query);
$data3 = mysqli_fetch_array($res3);
$e = $data3['avgm'];

$query = "SELECT sum(Weight_loss) as 'avgf' from mar_campaign where Gender='Female'";
$res4 = mysqli_query($connect, $query);
$data4 = mysqli_fetch_array($res4);
$f = $data4['avgf'];


$query = "SELECT count(id) as 'mpa' from mar_campaign where Ethnic='Malay'";
$res9 = mysqli_query($connect, $query);
$data9 = mysqli_fetch_array($res9);
$k = $data9['mpa'];

$query = "SELECT sum(Goals) as 'nmpa' from mar_campaign where Dropout='No' and Ethnic='Malay'";
$res10 = mysqli_query($connect, $query);
$data10 = mysqli_fetch_array($res10);
$l  = $data10['nmpa'];

$mal = $l/$k *100;

$query = "SELECT count(id) as 'ipa' from mar_campaign where Ethnic='Indian'";
$res11 = mysqli_query($connect, $query);
$data11 = mysqli_fetch_array($res11);
$m = $data11['ipa'];

$query = "SELECT sum(Goals) as 'nipa' from mar_campaign where Dropout='No' and Ethnic='Indian'";
$res12 = mysqli_query($connect, $query);
$data12 = mysqli_fetch_array($res12);
$n  = $data12['nipa'];

$ial = $n/$m *100;

$query = "SELECT count(id) as 'cpa' from mar_campaign where Ethnic='Chinese'";
$res13 = mysqli_query($connect, $query);
$data13 = mysqli_fetch_array($res13);
$o = $data13['cpa'];

$query = "SELECT sum(Goals) as 'ncpa' from mar_campaign where Dropout='No' and Ethnic='Chinese'";
$res14 = mysqli_query($connect, $query);
$data14 = mysqli_fetch_array($res14);
$p  = $data14['ncpa'];

$cal = $p/$o *100;

$query = "SELECT count(id) as 'mpac' from mar_campaign where Gender='Male'";
$res15 = mysqli_query($connect, $query);
$data15 = mysqli_fetch_array($res15);
$q = $data15['mpac'];

$query = "SELECT sum(Goals) as 'nmpac' from mar_campaign where Dropout='No' and  Gender='Male'";
$res16 = mysqli_query($connect, $query);
$data16 = mysqli_fetch_array($res16);
$r  = $data16['nmpac'];

$map = $r/$q *100;

$query = "SELECT count(id) as 'fpac' from mar_campaign where Gender='Female'";
$res17 = mysqli_query($connect, $query);
$data17 = mysqli_fetch_array($res17);
$s = $data17['fpac'];

$query = "SELECT sum(Goals) as 'nfpac' from mar_campaign where Dropout='No' and  Gender='Female'";
$res18 = mysqli_query($connect, $query);
$data18 = mysqli_fetch_array($res18);
$t = $data18['nfpac'];

$fap = $t/$s *100;

$chart_data = ''

?>
 
 

<html>
<head>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
</head>
<body><br><br><br><br>
<table style="width:30%" bgcolor="white">
  <tr>
    <th><div class="container" align="right" style="width:175px;">
   <h5 align="center"></h5>
    
   <br /><br />
   <div id="chart"></div>
  </div>
</body>
</html>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ethnic', 'Malay = 6 ', 'Indian = 5', 'Chinese = 5'],
          [' ', parseInt('<?php echo $mal; ?>'), parseInt('<?php echo $ial; ?>'), parseInt('<?php echo $cal; ?>')],
          //['Indian', parseInt('<?php echo $ial; ?>'), 20, 52],
          //['Chinese', parseInt('<?php echo $cal; ?>'), 20, 52],
          
        ]);

        var options = {

          //vAxis: {format:'0.00'},
          chart: {
            title: 'Goal accomplishment by ethnicity %',
            colors: ['red','green', 'purple'],
            
          },

        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material"  style="width: 500px; height: 420px;" align="center"></div>

  </body>
</html>

<br><br><br><br>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Genders', 'Number of participants'],
          ['Male', parseInt('<?php echo $map; ?>') ],
          ['Female', parseInt('<?php echo $fap; ?>')],
        ]);

        var options = {
          title: 'Gender weight loss percentage',
          pieHole: 0.4,
          //is3D: true,
          colors: ['#3366ff','#ff1aff' ],
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 700px; height: 300px;"></div>
    <h5> <p><font face=" Comic Sans MS"><p align= "center">Female participants have achieved weight loss more than male participants as they attendance for the campaign is higher compared to male </p>
  </body>
</html>

 
   
   


<?php

$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT count(id) as 'dpm' from mar_campaign where Dropout='Yes' and Gender='Male'";
$res5 = mysqli_query($connect, $query);
$data5 = mysqli_fetch_array($res5);
$g = $data5['dpm']/5*100;

$query = "SELECT count(id) as 'dpf' from mar_campaign where Dropout='Yes' and Gender='Female'";
$res6 = mysqli_query($connect, $query);
$data6 = mysqli_fetch_array($res6);
$h = $data6['dpf'];

$query = "SELECT count(id) as 'ndpm' from mar_campaign where Dropout='No' and Gender='Male'";
$res7 = mysqli_query($connect, $query);
$data7 = mysqli_fetch_array($res7);
$i = $data7['ndpm'];

$query = "SELECT count(id) as 'ndpf' from mar_campaign where Dropout='No' and Gender='Female'";
$res8 = mysqli_query($connect, $query);
$data8 = mysqli_fetch_array($res8);
$j = $data8['ndpf'];

$chart_data = '';

?>


<br><br><br><br><br><br>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', ' '],
          [' ', ' '],
          //['Non-Dropout', parseInt('<?php echo $i; ?>'), parseInt('<?php echo $j; ?>')],
          
        ]);

        var options = {
          width: 650,
          height: 250,
          isStacked: true,
          colors: ['#3366ff','#ff1aff' ],
          chart: {
            title: 'Gender dropouts percentage %',
            


            
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('donutchart2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="donutchart2" style="width:650px; height: 300px;"></div>
  </body>
</html>



  </tr>
 
</table>
  <br /><br />
  
 <br>
 <div>
 <br><br><br><br>
 <br><br>








<!DOCTYPE html>
<html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #6495ED;
   color: white;
   text-align: center;
}
</style>
</head>
<body>



<div class="footer">
  <p>&copy; Copyright Margaret Moses 2020</p>
</div>

</body>
</html> 

