<?php
include "user.php";
include "db.php";
$uemail=$_GET['uemail'];

?>
<html>
<head>
<title>View Package Details</title>
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
<table align="center" >
<thead bgcolor="SkyBlue" align="center">
<td>Tourcode</td>
<td>Tourname</td>
<td>Places Covered</td>
<td>Duration</td>
<td>Action</td>
</thead>
<tbody align="center">

<?php
$sql = "SELECT * FROM tourpackage";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$tourcode=$row['Tourcode'];
	$tourname=$row['Tourname'];
	$duration=$row['Duration'];
	$places=$row['Placescovered'];
	?>
	<tr>
	<td><?php echo $tourcode ?></td>
	<td><?php echo $tourname ?></td>
	<td><?php echo $places ?></td>
	<td><?php echo $duration ?></td>
	<td><a href="viewtour.php?Tourcode=<?php echo $tourcode ?>">VIEW TOUR&nbsp;&nbsp;<a href="useraddbooking.php?Tourcode=<?php echo $tourcode ?>&uemail=<?php echo $uemail?>">BOOK</td>
	</tr>
<?php
}

?>
</tbody>
</table>
</body>
</html>