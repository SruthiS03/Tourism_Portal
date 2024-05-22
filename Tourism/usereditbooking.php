<?php 
include("user.php") ;
include("db.php");
$bookid=$_GET['bookid'];
$uemail=$_GET['uemail'];
$sql = "SELECT * FROM booking WHERE bookid=$bookid";
$row = mysqli_fetch_assoc($conn->query($sql) );
$name=$row['Name'];
$age=$row['Age'];	
$gender=$row['Gender'];
$address=$row['Address'];
$mobile=$row['Mobile'];
$aadhar=$row['Aadhar'];
$startdate=$row['Startdate'];
$enddate=$row['Enddate'];
$boarding=$row['Boarding'];
$tourcode=$row['Tourcode'];
$bookid=$row['bookid'];

?>
<head>
<style>
	label{display: inline-block;
	width: 100px;
	text-align:left;
	}
</style>
<body>
<div class="register">
<form action="editbooking.php" method="post">
<br>
<input type="hidden" name="Tourcode" value="<?php echo $tourcode ?>" />
<input type="hidden" name="bookid" value="<?php echo $bookid ?>" />
<input type="hidden" name="Uemail" value="<?php echo $uemail ?>" />

Tourcode: <?php echo $tourcode;?><br><br>
Bookid: <?php echo $bookid;?><br><br>
Email: <?php echo $uemail;?><br><br>

<label for="Name">Name:</label>
<input type="text" placeholder="Enter your name:" name="Name" value="<?php echo $name ?>" required/>
<br><br>

<label for="Age">Age:</label>
<input type="number" name="Age" value="<?php echo $age ?>"/>
<br><br>

<label for="Gender">Gender:</label>
<input type="radio" name="Gender" value="Male">Male
<input type="radio" name="Gender" value="Female">Female
<br><br>

<label for="Address">Address:</label>
<input type="text"  name="Address" value="<?php echo $address ?>"/>
<br><br>

<label for="Mobile">Mobile:</label>
<input type="number" name="Mobile" value="<?php echo $mobile ?>"/>
<br><br>

<label for="Aadhar">Aadhar:</label>
<input type="number" name="Aadhar" value="<?php echo $aadhar ?>"/>
<br><br>

<label for="Startdate">Startdate:</label>
<input type="date" name="Startdate" value="<?php echo $startdate ?>"/>
<br><br>

<label for="Enddate">Enddate:</label>
<input type="date" name="Enddate" value="<?php echo $enddate ?>"/>
<br><br>


<label for="Boarding">Boarding:</label>
<input type="text" name="Boarding" value="<?php echo $boarding ?>"/>
<br><br>

<input type="submit" value="UPDATE"/>
<input type="reset" value="RESET"/>


</form>
</div>
</body>
</head>
