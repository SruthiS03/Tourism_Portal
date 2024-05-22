<?php
include "db.php";
$name=$_POST['Name'];
$age=$_POST['Age'];
$gender=$_POST['Gender'];
$address=$_POST['Address'];
$mobile=$_POST['Mobile'];
$aadhar=$_POST['Aadhar'];
$startdate=$_POST['Startdate'];
$enddate=$_POST['Enddate'];
$boarding=$_POST['Boarding'];
$tourcode=$_POST['Tourcode'];
$uemail=$_POST['Uemail'];
$bookid=$_POST['bookid'];
$sql="update booking set Name= '$name',Age=$age,Gender='$gender',Address='$address',Mobile=$mobile,Aadhar=$aadhar,Startdate='$startdate',Enddate='$enddate',Boarding='$boarding' where bookid=$bookid";
if($conn->query($sql)===TRUE){
echo("Updated Successfully");}
else {echo "Error: " . $sql . "<br>" . $conn->error;}
header("Location: userviewbooking.php?uemail=$uemail");?>