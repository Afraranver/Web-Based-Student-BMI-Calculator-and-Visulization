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
 $query = "SELECT Dropout, sum(Total) FROM dropout GROUP BY Dropout";  
 $result = mysqli_query($connect, $query);  
 ?>  

<?php
$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT * FROM mar_campaign";
$result = mysqli_query($connect, $query);



$query = "SELECT count(Dropout) as 'dp1' from mar_campaign where gender='Male' and Dropout";
$res = mysqli_query($connect, $query);
$data = mysqli_fetch_array($res);
$a = $data['dp1'];

$query = "SELECT count(Dropout) as 'dp2' from mar_campaign where gender='Female'";
$res1 = mysqli_query($connect, $query);
$data1 = mysqli_fetch_array($res1);
$b = $data1['dp2'];

$query = "SELECT count(Non-Dropout) as 'dp3' from mar_campaign where gender='Male'";
$res2 = mysqli_query($connect, $query);
$data2 = mysqli_fetch_array($res2);
$c = $data2['dp3'];

$query = "SELECT count(Non-Dropout) as 'dp4' from mar_campaign where gender='Female'";
$res3 = mysqli_query($connect, $query);
$data3 = mysqli_fetch_array($res3);
$d = $data3['dpd'];




?>

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
                          ['Dropout', 'Total'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Dropout"]."', ".$row["sum(Total)"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: ' Percentage of Dropout',  
                      //is3D:true,  
                     //barColors: ["#FE2EF7"],
					  colors: ["#B0B3D6"]
					  
				
				
         
    
                     }; 
					 
                var chart = new google.visualization.BarChart(document.getElementById('barchart'));  
                chart.draw(data, options);  
           }  
           </script>  
      
           <div style="width:1700px;" >  
                
                <br />  
                <div id="barchart" style="width: 660px; height: 200px;"></div>  
           </div>  
      </body>  
 </html>  </b></h4> 

  </div>
</div>	  



 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Student', 'Gender'],
          ['Dropout', 20 ],
          ['Dropout',  30],
          ['Non-Dropout', 15 ],
          ['Non-Dropout',  45]
        ]);

        var options = {
          chart: {
            title: 'Dropout by gender',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>

        
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "mar");  
 $query = "SELECT Months, sum(Total) FROM attendance GROUP BY Months";  
 $result = mysqli_query($connect, $query);  
 ?>  


 <!DOCTYPE html>  
 <html>  
      <head>  
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 49px 89px 0 rgba(0,0,0,0.2);
  transition: 0.3000s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>


<div class="card">
 
  <div class="container">
    
    <p>  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([
          ['Months', 'Total'],
          ['March',  65],
          ['April',   62],
          ['May',   60],
          
        ]); 
                var options = {  
                      title: 'Campaign Attendance %', 
                     hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
					  
				
				
         
    
                     }; 
				var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
 <div id="areachart" style="width: 100%; height: 500px;"></div>
  </body>
</html>

 <br>
 <div>
 <br><br><br><br>
 <br><br></p> 
  </div>
</div>
       
         
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

