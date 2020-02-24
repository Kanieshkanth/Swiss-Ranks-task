<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Swiss ranks Challenge
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=""></script>
    
</head>
<body>
    <header>
        <br><h1><center>SWISS RANKS CHALLENGE &nbsp;&nbsp;<img src="logo.png" width="70px" height="70px"/></center></h1><br>
        
    </header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark d-flex justify-content-center">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link sz" href="index.html">&nbsp;&nbsp;&nbsp;Pie chart&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sz" href="horbar1.html">&nbsp;&nbsp;&nbsp;Horizontal Bar Chart 1&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sz" href="horbar2.html">&nbsp;&nbsp;&nbsp;Horizontal Bar Chart 2&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sz" href="horbar3.html">&nbsp;&nbsp;&nbsp;Horizontal Bar Chart 3&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sz" href="custom.html">&nbsp;&nbsp;&nbsp;Custom Chart&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sz" href="database.php">&nbsp;&nbsp;&nbsp;View Database&nbsp;&nbsp;&nbsp;</a>
          </li> 
        </ul>
      </div>  
    </nav>
      <br>
      
      <div class="container">
<?php
$con=mysqli_connect("localhost","root","","swiss");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//Result fetch from records
$result = mysqli_query($con,"SELECT * FROM record");
//Table creation
echo "<table border='2' align='center' id='tab'>
<tr>
<th>Part number</th>
<th>Status</th>
<th>Mat category</th>
<th>Part name</th>
<th>Created by</th>
<th>Approve/reject by</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['partnumber'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . $row['matcategory'] . "</td>";
echo "<td>" . $row['partname'] . "</td>";
echo "<td>" . $row['createdby'] . "</td>";
echo "<td>" . $row['approveby'] . "</td>";
echo "</tr>";
}
echo "</table>";
//Connection close  
mysqli_close($con);
?>
      </div>  
      <br>
      <br>
</body>
</html>