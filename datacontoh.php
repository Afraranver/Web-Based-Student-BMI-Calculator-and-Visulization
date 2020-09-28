<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","mar");

$sqlQuery = "SELECT Attendance,Name FROM mar_campaign ORDER BY Name";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>