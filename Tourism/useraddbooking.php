<?php include("user.php") ;
$tourcode=$_GET['Tourcode'];
$uemail=$_GET['uemail'];
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
<form action="addbooking.php" method="post">
<br>
<input type="hidden" name="Tourcode" value="<?php echo $tourcode ?>" />
<input type="hidden" name="Uemail" value="<?php echo $uemail ?>" />

Tourcode: <?php echo $tourcode;?><br><br>
Email: <?php echo $uemail;?><br><br>

<label for="Name">Name:</label>
<input type="text" placeholder="Enter your name:" name="Name" required/>
<br><br>

<label for="Age">Age:</label>
<input type="number" name="Age" />
<br><br>

<label for="Gender">Gender:</label>
<input type="radio" name="Gender" value="Male"/>Male
<input type="radio" name="Gender" value="Female"/>Female
<br><br>

<label for="Address">Address:</label>
<input type="text"  name="Address"/>
<br><br>

<label for="Mobile">Mobile:</label>
<input type="number" name="Mobile"/>
<br><br>

<label for="Aadhar">Aadhar:</label>
<input type="number" name="Aadhar"/>
<br><br>

<label for="Startdate">Startdate:</label>
<input type="date" name="Startdate"/>
<br><br>

<label for="Enddate">Enddate:</label>
<input type="date" name="Enddate"/>
<br><br>


<label for="Boarding">Boarding:</label>
<input type="text" name="Boarding"/>
<br><br>

<input type="submit" value="SUBMIT"/>
<input type="reset" value="RESET"/>


</form>
</div>
</body>
</head>
