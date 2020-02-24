<?php
//connection establish
$conn = mysqli_connect("localhost","root","","swiss");
$att = '';

//Values fetch from javascript
if(isset($_POST["sname"]))
{
	$att = $_POST["sname"];
}

//Sql query to get values from database
$sqlQuery = "SELECT distinct $att as st, count($att) as ct FROM record group by $att";

$result = mysqli_query($conn,$sqlQuery);

//Pass values to array
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//Connection close
mysqli_close($conn);

//Writting array into JSON file
echo json_encode($data);
$json_data = json_encode($data);
file_put_contents('custom.json', $json_data);
?>