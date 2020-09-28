<html>
<body style="background-color:#d6eaf8 ;">
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
  padding: 8px 16px;
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
  <li><a  href="demographic.php"><font face=" Comic Sans MS"><img src="demo.png" width="10%">Demographic Performance</font></a></li><br>
  <li><a class="active" href="campaign.php"><font face=" Comic Sans MS"><img src="cp.png" width="10%">Campaign Performance</font></a></li><br></font>
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
  z-index: 55;
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

</div>

</body>
</html>
<!DOCTYPE html>
<div style="margin-left:25%;width:10px;height:30px;">
<html>
<body>
<table style="width:10%">
  <tr>
    <th>


<?php

$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT * FROM mar_campaign";
$result = mysqli_query($connect, $query);


$query = "SELECT count(id) as 'dpp' from mar_campaign where Dropout='Yes'";
$res = mysqli_query($connect, $query);
$data = mysqli_fetch_array($res);
$a = $data['dpp']/16*100;

$query = "SELECT count(id) as 'ndpp' from mar_campaign where Dropout='No'";
$res1 = mysqli_query($connect, $query);
$data1 = mysqli_fetch_array($res1);
$b = $data1['ndpp']/16*100;


$query = "SELECT sum(March) as 'mac' from mar_campaign ";
$res2 = mysqli_query($connect, $query);
$data2 = mysqli_fetch_array($res2);
$d = $data2['mac']/64 * 100;

$query = "SELECT sum(April) as 'apr' from mar_campaign ";
$res3 = mysqli_query($connect, $query);
$data3 = mysqli_fetch_array($res3);
$e = $data3['apr']/64 * 100;

$query = "SELECT sum(May) as 'may' from mar_campaign ";
$res4 = mysqli_query($connect, $query);
$data4 = mysqli_fetch_array($res4);
$f = $data4['may']/64 * 100;

?>



	<?php  
 $connect = mysqli_connect("localhost", "root", "", "mar");  
 $query = "SELECT Dropout, sum(Total) FROM dropout GROUP BY Dropout";  
 $result = mysqli_query($connect, $query);  
 ?>  
</body>
</html>

 <!DOCTYPE html>  
 <html>  
      <head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 49px 89px 0 rgba(0,0,0,0.2);
  transition: 0.200s;
  width: 40%;
  border: 45;
  
}

.card:hover {
  box-shadow: 0 89px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 20px 16px;
}
</style>
</head>
<body>



<div class="card">
  <div class="container">
    <h4><b><h3><b> <br>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
               var data = google.visualization.arrayToDataTable([
          ['', 'Student Percentage'],
          ['Dropout', parseInt('<?php echo $a; ?>') ],
          ['Non-Dropout', parseInt('<?php echo $b; ?>')],
          
        ]);

        var options = {
          //color: ['red','green'],
          chart: {
            title: 'Dropout Percentage %'
          },
          bars: 'horizontal'
					  
				
				
         
    
                     }; 
					 
                var chart = new google.visualization.BarChart(document.getElementById('barchart'));  
                chart.draw(data, options);  
           }  
           </script>  
      
           <div style="width:1700px;" >  
                
                <br />  
                <div id="barchart" style="width: 750px; height: 200px;"></div>  
           </div>  
      </body>  
 </b></h4> 

  </div>
</div>	  
 </html> 

        



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Percentage'],
          ['March',  parseInt('<?php echo $d; ?>')],
          ['April',  parseInt('<?php echo $e; ?>')],
          ['May',  parseInt('<?php echo $f; ?>')],
          
        ]);

        var options = {
          title: 'Campaign Attendance %',
          hAxis: {title: 'Months',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 700px; height: 500px;"></div>
  </body>
</html>

       
         
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
   height: 50px;
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

