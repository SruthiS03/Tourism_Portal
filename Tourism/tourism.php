<?php 
include "admin.php" ; 
include "db.php";
?>
<html>
<head>
<title>Tourism</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="icons.css">
<link rel="stylesheet" href="fonts.css">
<link rel="stylesheet" href="Sheet.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</head>
<body>
<br><br><br>
<div class="col-lg-12 col-md-12" style="padding:50px; align=center; margin-left: 120px;">
<div class="card widget">
<div class="row g-4 mb-"4>
<div class="col-md-3" style="align=center;">
<div class="card text-white-90">
<div class="card-body align-items-center" style="background-color: IndianRed;">
<div>
<span class="text-center m" style="margin-left: 110px;">
<img src="images/users.png" height="80px" width="80px">
</span>
<h1 align="center" style="color: white";>
<span id="lblenroll">
<?php 
$sql= "select * from login";
$result= $conn->query($sql);
$row =   $result->fetch_assoc();
$count = mysqli_num_rows($result); 
echo $count;?>
</span></h1>
<h3 align="center" style="color: white";>Users </h3>
</div></div></div></div>
<div class="col-md-3" style="align=center;">
<div class="card text-white-90">
<div class="card-body align-items-center" style="background-color: #68CF29;">
<div>
<span class="text-center m" style="margin-left: 110px;">
<img src="images/booking.png" height="80px" width="80px">
<h1 align="center" style="color: white";>
<span id="lbluploaded">
<?php 
$sql= "select * from booking";
$result= $conn->query($sql);
$row =   $result->fetch_assoc();
$count = mysqli_num_rows($result); 
echo $count;?>
</span></h1>
<h3 align="center" style="color: white";>Tour Bookings</h3>
</div></div></div></div>
<div class="col-md-3" style="align=center;">
<div class="card text-white-90">
<div class="card-body align-items-center" style="background-color: teal;">
<div>
<span class="text-center m" style="margin-left: 110px;">
<img src="images/packages.png" height="80px" width="80px">
<h1 align="center" style="color: white";>
<span id="lblcompleted">
<?php 
$sql= "select * from tourpackage";
$result= $conn->query($sql);
$row =   $result->fetch_assoc();
$count = mysqli_num_rows($result); 
echo $count;?>
</span></h1>
<h3 align="center" style="color: white";>Tour Packages</h3>
</div></div></div></div></div></div></div></body></html>
