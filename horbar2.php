<?php

//Connection establishment
$conn = mysqli_connect("localhost","root","","swiss");

//Query to fetch values from database
$sqlQuery = 'SELECT distinct createdby as st, count(createdby) as ct FROM record group by createdby';

$result = mysqli_query($conn,$sqlQuery);

//Pass values to array
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//Connection close
mysqli_close($conn);

//writing array into JSON file
echo json_encode($data);
$json_data = json_encode($data);
file_put_contents('horbar2.json', $json_data);
?>