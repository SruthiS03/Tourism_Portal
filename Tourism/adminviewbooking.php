<?php
include("admin.php"); 
include "db.php";
?>
<html>
<head>
<title>View Booking Details</title>
<style>
table, th, td {
  font-size: 18px;
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
</head>
<br><br><br><br><br>
<body>
<table align="center">
<thead bgcolor="SkyBlue" align="center">
<td>Bookid</td>
<td>Name</td>
<td>Age</td>
<td>Gender</td>
<td>Address</td>
<td>Mobile</td>
<td>Aadhar</td>
<td>Tourcode</td>
<td>Startdate</td>
<td>Enddate</td>
<td>Boarding</td>
<td>Uemail</td>
</thead>
<?php
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$name=$row['Name'];
	$age=$row['Age'];
	$gender=$row['Gender'];
	$address=$row['Address'];
	$mobile=$row['Mobile'];
	$aadhar=$row['Aadhar'];
	$tourcode=$row['Tourcode'];
	$startdate=$row['Startdate'];
	$enddate=$row['Enddate'];
	$boarding=$row['Boarding'];
	$uemail=$row['Uemail'];
	$bookid=$row['bookid'];
?>
<tbody align="center">
<tr>
	<td><?php echo $bookid ?></td>
	<td><?php echo $name ?></td>
	<td><?php echo $age ?></td>
	<td><?php echo $gender ?></td>
	<td><?php echo $address ?></td>
	<td><?php echo $mobile ?></td>
	<td><?php echo $aadhar ?></td>
	<td><?php echo $tourcode ?></td>
	<td><?php echo $startdate ?></td>
	<td><?php echo $enddate ?></td>
	<td><?php echo $boarding ?></td>
	<td><?php echo $uemail ?></td>
</tr>
</tbody>
</html>
<?php
}
?>
