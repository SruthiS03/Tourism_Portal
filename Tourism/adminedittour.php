<?php 
include("admin.php"); 
include "db.php";
$tourcode=$_GET['Tourcode'];
$sql = "SELECT * FROM tourpackage WHERE Tourcode='$tourcode'";
$row = mysqli_fetch_assoc($conn->query($sql) );
$tourname=$row['Tourname'];
$duration=$row['Duration'];
$places=$row['Placescovered'];
$cost=$row['Costperperson'];
$boarding=$row['Boardingpoint'];
$transport=$row['Transport'];
$accomo=$row['Accommodation'];
$food=$row['Food'];
$status=$row['Status'];
?>
<head>
<style>
	label{display: inline-block;
	width: 100px;
	text-align:left;
	}
</style>
<body>
<div class="register"><br>
<form action="edittour.php" method="post">
<label for="Tourcode">Tourcode:</label>
<input type="text" size="50" placeholder="Enter Tour Code:" name="Tourcode" value="<?php echo $tourcode ?>" required/>
<br><br>

<label for="Tourname">Tourname:</label>
<input type="text" name="Tourname" value="<?php echo $tourname ?>" />
<br><br>

<label for="Duration">Duration:</label>
<input type="Text" name="Duration" value="<?php echo $duration ?>" />
<br><br>

<label for="Placescovered">Placescovered:</label>
<input type="text"  name="Placescovered" value="<?php echo $places ?>"/>
<br><br>

<label for="Costperperson">Costperperson:</label>
<input type="number" name="Costperperson" value="<?php echo $cost ?>"/>
<br><br>

<label for="Boardingpoint">Boardingpoint:</label>
<input type="text" name="Boardingpoint" value="<?php echo $boarding ?>"/>
<br><br>

<label for="Transport">Transport:</label>
<input type="text" name="Transport" value="<?php echo $transport ?>"/>
<br><br>

<label for="Accommodation">Accommodation:</label>
<input type="text" name="Accommodation" value="<?php echo $accomo ?>" />
<br><br>

<label for="Food">Food:</label>
<input type="text" name="Food" value="<?php echo $food ?>"/>
<br><br>

<label for="Status">Status:</label>
<input type="radio" name="Status" value="Active">Active
<input type="radio" name="Status" value="Inactive" >Inactive
<br><br>

<input type="submit" value="UPDATE"/>
<input type="reset" value="RESET"/>


</form>
</div>
</body>
</head>
