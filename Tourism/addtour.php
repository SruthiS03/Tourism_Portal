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
 
$sql = "INSERT INTO tourpackage (Tourcode,Tourname,Duration,Placescovered,Costperperson,Boardingpoint, Transport, Accommodation,Food,Status)
VALUES ('$tourcode','$tourname','$duration','$places' , '$cost','$boarding', '$transport', '$accomo','$food','$status')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: adminview.php");
?>