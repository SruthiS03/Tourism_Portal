<?php
include "Head.html";
include "db.php";
$tourcode=$_GET['Tourcode'];
$sql = "SELECT * FROM tourpackage where Tourcode='$tourcode'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$tourcode=$row['Tourcode'];
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
<html>
<p style="font-size: 20px; margin-left: 120px;">
Tour code:	<?php echo $tourcode;?><br>
Tour name:	<?php echo $tourname;?><br>
Duration:	<?php echo $duration;?><br>
Places covered:   <?php echo $places;?><br>
</p>
<div class="gallery">
<?php
$sql="SELECT * FROM img WHERE Tourcode='$tourcode'";
$result = $conn->query($sql); 
while($row = $result->fetch_assoc()){
        $imageURL = 'images/'.$row["imgname"];
    ?>
            <img src="<?php echo $imageURL; ?>" >
    <?php }
   ?>
</div>
<p style="font-size: 20px; margin-left: 120px;">
Cost per person:   <?php echo $cost;?><br>
Boarding point:   <?php echo $boarding;?><br>
Transport: <?php echo $transport;?><br>
Accomodation:   <?php echo $accomo;?><br>
Food:   <?php echo $food;?><br>
Status:   <?php echo $status;?><br>
<form style="margin-left: 120px;">
<input type="button" value="BACK" onclick="history.back()">
</form>
</p>
</html>
<?php
}
?>
