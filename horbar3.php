<?php

//Establish connection
$conn = mysqli_connect("localhost","root","","swiss");

//Query to fetch values from database
$sqlQuery = 'SELECT distinct approveby as st, count(approveby) as ct FROM record group by approveby';

$result = mysqli_query($conn,$sqlQuery);

//Pass values to array
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//Connection close
mysqli_close($conn);

//Writing array into JSON file
echo json_encode($data);
$json_data = json_encode($data);
file_put_contents('horbar3.json', $json_data);
?>