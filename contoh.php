<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">

</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("datacontoh.php",
                function (data)
                {
                    console.log(data);
                     var Name = [];
                    var Attendance = [];

                    for (var i in data) {
                        Name.push(data[i].Name);
                        Attendance.push(data[i].Attendance);
                    }

                    var chartdata = {
                        labels: Name,
                        datasets: [
                            {
                                label: 'Attendance Percentage',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
			
                                data:Attendance
								
							
              
               
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
						
                    });
                });
            }
        }
		  

        </script>

</body>
</html>