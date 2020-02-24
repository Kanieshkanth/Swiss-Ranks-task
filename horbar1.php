<?php

//Connection establishment
$conn = mysqli_connect("localhost","root","","swiss");

//Query to fetch values from database
$sqlQuery = 'SELECT distinct status as st, count(status) as ct FROM record group by status';

$result = mysqli_query($conn,$sqlQuery);

//Pass values to array
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//connection close
mysqli_close($conn);

//Writing array into JSON file
echo json_encode($data);
$json_data = json_encode($data);
file_put_contents('horbar1.json', $json_data);
?>