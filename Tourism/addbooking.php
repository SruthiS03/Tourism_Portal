<?php
include "db.php";
$name=$_POST['Name'];
$age=$_POST['Age'];
$gender=$_POST['Gender'];
$address=$_POST['Address'];
$mobile=$_POST['Mobile'];
$aadhar=$_POST['Aadhar'];
$tourcode=$_POST['Tourcode'];
$startdate=$_POST['Startdate'];
$enddate=$_POST['Enddate'];
$boarding=$_POST['Boarding'];
$uemail=$_POST['Uemail'];
$sql="insert into booking(Name,Age,Gender,Address,Mobile,Aadhar,Tourcode,Startdate,Enddate,Boarding,Uemail) values('$name',$age,'$gender','$address',$mobile,$aadhar,'$tourcode','$startdate','$enddate','$boarding','$uemail')";
if($conn->query($sql)===TRUE){
echo("Registered Successfully");
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: userview.php?uemail=$uemail");
?>