<?php
$uemail=$_GET['uemail'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Header</title>
<link rel="stylesheet" type="text/css" href="Sheet.css">
</head>
<body>
<div class="head">
<div class="n">
<div class="logo">
<img src="Images/logo.png" width="300px" height="250px" />
</div>

<div class="name">
<span class="d">EAGLE<br></span>
<span class="e">TOURS & TRAVELS</span>
</div>

</div>
<div class="menu">
<ul>
<li><a href="about.php?uemail=<?php echo $uemail?>">ABOUT</a></li>
<li><a href="contact.php?uemail=<?php echo $uemail?>">CONTACT</a></li>
<li><a href="userview.php?uemail=<?php echo $uemail?>">VIEW/BOOK TOUR</a></li>
<li><a href="userviewbooking.php?uemail=<?php echo $uemail?>">MANAGE BOOKING</a></li>
<li><a href="index.php">LOGOUT</a></li>
</ul>
</div>
</div>
</body>
</html>
