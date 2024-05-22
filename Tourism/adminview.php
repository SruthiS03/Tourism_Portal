<?php
include "db.php";
include "admin.php";
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
<br><br><br><br><br><br>
<body>
<table align="center">
<thead bgcolor="SkyBlue" align="center">
<td>Tourcode</td>
<td>Tourname</td>
<td>Duration</td>
<td>Places Covered</td>
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
	<td><?php echo $duration ?></td>
	<td><?php echo $places ?></td>
	<td><a href="viewtour.php?Tourcode=<?php echo $tourcode ?>">VIEW&nbsp;&nbsp&nbsp;&nbsp;<a href="adminedittour.php?Tourcode=<?php echo $tourcode ?>">EDIT&nbsp;&nbsp&nbsp;&nbsp;<a href="uploadimage.php?Tourcode=<?php echo $tourcode ?>">UPLOAD IMAGE</td>
	</tr>
<?php
}

?>
</tbody>
</table>
<br><br>
<body>
<form align="center">
Click here to add tour packages: <a href="adminaddtour.php">Add Tour Packages</a>
</form>
</html>