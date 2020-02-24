<?php

$conn = mysqli_connect("localhost","root","","swiss");

$sqlQuery = 'SELECT distinct status as st, count(status) as ct FROM record group by status';

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
$json_data = json_encode($data);
file_put_contents('pie.json', $json_data);
?>