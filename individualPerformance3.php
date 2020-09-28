<html>
<body style="background-color:#abebc6  ;">
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
  <li><a class="active" href="individualPerformance.php"><font face=" Comic Sans MS"><img src="in.png" width="10%">Individual Performance</a></font></li><br>
  <li><a  href="demographic.php"><font face=" Comic Sans MS"><img src="demo.png" width="10%">Demographic Performance</font></a></li><br>
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


<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "", "mar");
$query = "SELECT * FROM mar_campaign";
$result = mysqli_query($connect, $query);
$chart_data = '';
$labelsGoals = [];
$dataGoals = [];
$campaignData = [];
$labelsAttendance = [];
$dataAttendance = [];
$labelsDropout = [];
$dataDropout = [];
$labelsMarch = [];
$dataMarch = [];
while($row = mysqli_fetch_array($result))
{
array_push($campaignData,(object) array("name" => $row["Name"],"goalsPercentage" => $row["Goals"]*100, "attendancePercentage" => $row["Attendance"], "weightLoss" => $row["Weight_loss"],"finalWeight" => $row["Final_weight"] ,"targetWeight" => $row["Target_weight"],"dropout" => $row["Dropout"],"march" => $row["March"],"april" => $row["April"],"may" => $row["May"]));
array_push($labelsGoals,$row["Name"]);
array_push($dataGoals,$row["Goals"]*100);
array_push($labelsAttendance,$row["Name"]);
array_push($dataAttendance,$row["Attendance"]);
$chart_data .= "{ studentName:'".$row["Name"]."', marks:".$row["Goals"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

  </div>


</div>

<div style="margin-left:30%" class="container">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 49px 89px 0 rgba(0,0,0,0.2);
  transition: 0.100s;
  width: 80%;
  border-radius: 90px;
}

.card:hover {
  box-shadow: 0 88px 19px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 45px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>


<div class="card">
  <div class="container">
    
    <p> <div class="row">
		    <p align="center"><b>Name:</b></p><br>

      <select id="participants" onchange="getParticipantData()" >
        <?php foreach($campaignData as $participantData): ?>
          <option value='<?= get_object_vars($participantData)["name"] ?>' ><?=get_object_vars($participantData)["name"] ?></option>
        <?php endforeach ?>
      </select>
    </div><Br>
    <div class="row">
      <div class="col-md-7">
        <h5><b>Goal Progress</b></h5>
        <canvas id="goalChart" style="background-image: url(https://cdn3.iconfinder.com/data/icons/medical-clinic-line/48/Medical_health_Diet_scale_weight_loss_scale_Floor_scales-512.png);background-position: center center;background-repeat: no-repeat;background-size: 7vw;"></canvas>
        <br>
		<html>
<head>

  


<style>
table, th, td {
  border:0;
  border-collapse: collapse;
  background-color: #d2b4de;
  table-align:  right;
  
}
  
  }
th, td {
  padding:3 px;
  text-align:center; 
color: black;  
}
</style>
</head>
<body>
 <p><font face=" Comic Sans MS">
		
		<p id="weightLoss">Weight Loss:</p>
        <p id="targetWeight">Target Weight:</p>
        <p id="finalWeight">Weight Loss:</p>
        <p id="goalAchieved">Weight Loss:</p>
		<p id="dropout">Dropout:</p>
		 </p>
      </div>
      <div class="col">
	  <br>
	   <br>
	    <br>
      <b><font face=" Comic Sans MS">Individual Campaign Attendance % </b>
	    
      <div class="progress" style="width: 75%;">
	  
        <div class="progress-bar" id="attendanceProgress" role="progressbar" style="width: 25%;"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div><br>
 
<style> 
#march {
  border-radius: 25px;
  background: #8e44ad  ;
  padding: 20px; 
  width: 200px;
  height: 50px;  
 
}
#april{
  border-radius: 25px;
  background: #8e44ad  ;
  padding: 20px; 
  width: 200px;
  height: 50px;  
 
}
#may{
  border-radius: 25px;
  background: #8e44ad  ;
  padding: 20px; 
  width: 200px;
  height: 50px;  
 
}



</style>
</head>
<body>

<br>
<br>

	  <p><font face=" Comic Sans MS">Number of spanning record by monthly</p>
<p id="march" style="color:white"align="center"align="right" ><b>March:</b></p>
<p id="april" style="color:white"align="center"align="right" ><b>April:</b></p>
<p id="may" style="color:white"align="center"align="right" ><b>May:</b></p>



</body>
    
 
	


      </div>
    </div>
	 <p align="center">Dropout status is based on the attendance percentage<p>
  </div>

  <script>
  var campaignData = JSON.parse('<?= json_encode($campaignData) ?>');
  function generateGraph(participantData){
    document.getElementById('weightLoss').innerHTML = "Weight Loss: " + participantData.weightLoss;
    document.getElementById('targetWeight').innerHTML = "Target Weight: " + participantData.targetWeight;
	document.getElementById('dropout').innerHTML = "Dropout: " + participantData.dropout;
    document.getElementById('march').innerHTML = "March: " + participantData.march;
	 document.getElementById('april').innerHTML = "April: " + participantData.april;
	  document.getElementById('may').innerHTML = "May: " + participantData.may;
    document.getElementById('finalWeight').innerHTML = "Final Weight: " + participantData.finalWeight;
    var status = "Achieved";
    console.log("CHECK WEIGHT");
    console.log(participantData.targetWeight < participantData.finalWeight);
    console.log("CHECK GOAL PERCENTAGE");
    console.log(participantData.goalsPercentage <= 100)
    if((participantData.targetWeight < participantData.finalWeight) || participantData.goalsPercentage <= 100){
      status = "Not Achieved";
    }
    document.getElementById('goalAchieved').innerHTML = "Status: " + status;
	 
    document.getElementById("attendanceProgress").style.width = participantData.attendancePercentage + "%";
    document.getElementById("attendanceProgress").setAttribute('aria-valuenow',participantData.attendancePercentage);
    document.getElementById("attendanceProgress").innerHTML = participantData.attendancePercentage + "%";
    var percentageLeft = 100 - participantData.goalsPercentage;
    var color = "#f1c40f";
    
    if(percentageLeft > 100 && participantData.goalsPercentage < 1){
      color = "rgb(255, 0, 0)"
    }
    
    if(percentageLeft < 1 && participantData.goalsPercentage > 1){
      percentageLeft = 0; 
    }

    var ctx = document.getElementById('goalChart').getContext('2d');
    var pieData = {
          datasets: [{
            labels: ["not-loss","loss"],
            data: [percentageLeft,participantData.goalsPercentage],
            backgroundColor: ['rgb(191, 191, 191)',color]
          }]
      // These labels appear in the legend and in the tooltips when hovering different arcs
    };
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: pieData,
      options: {
        cutoutPercentage: 90,
        tooltips: {
          enabled: false
        },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                  let sum = 0;
                  let dataArr = ctx.chart.data.datasets[0].data;
                  dataArr.map(data => {
                      sum += data;
                  });
                  let percentage = (value*1 / sum).toFixed(2)+"%";
                  if(ctx.dataIndex == "0"){
                    return "";
                  }else{
                    return percentage;
                  }
                },
                color: 'black',
            }
        }
      }
    });}
    function getParticipantData() {
      var x = document.getElementById("participants").value;
      var participantData = campaignData.filter((participant) => { return participant.name == x })[0];
      generateGraph(participantData);
    }
    generateGraph(campaignData[0]);
  </script>
  
  <script>
  </script></p> 
  </div>
</div>

   
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


