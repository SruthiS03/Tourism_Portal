<?php
include "db.php";
$tourcode=$_POST['Tourcode'];
$tourname=$_POST['Tourname'];
$duration=$_POST['Duration'];
$places=$_POST['Placescovered'];
$cost=$_POST['Costperperson'];
$boarding=$_POST['Boardingpoint'];
$transport=$_POST['Transport'];
$accomo=$_POST['Accommodation'];
$food=$_POST['Food'];
$status=$_POST['Status'];
$sql = "update tourpackage set Tourname='$tourname',Duration='$duration',Placescovered='$places',Costperperson='$cost', Boardingpoint='$boarding', Transport='$transport', Accommodation='$accomo',Food='$food',Status='$status' where Tourcode='$tourcode'";
if ($conn->query($sql) === TRUE) {echo "Record updated successfully";} 
else {echo "Error updating record: " . $conn->error;} 
header("Location: adminview.php");?>