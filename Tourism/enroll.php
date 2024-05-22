<?php 
include "Head.html";
$showAlert = false; 
$showError = false; 
$exists=false; 
if($_SERVER["REQUEST_METHOD"] == "POST") {
	include "db.php"; 
	$username = $_POST["user"]; 
	$password = $_POST["pass"]; 
	$cpassword = $_POST["cpass"]; 
	$sql = "Select * from login where user='$username'"; 
	$result= $conn->query($sql);
        	$row =   $result->fetch_assoc();
	$num = mysqli_num_rows($result); 
	if($num == 0) { 
		if(($password == $cpassword) && $exists==false) { 
			$sql = "INSERT INTO login ( user, pass) VALUES ('$username', '$password')"; 
			$result= $conn->query($sql);
			if ($result) {
				$showAlert = true;
			} 
		} 
		else { 
			$showError = "Passwords do not match"; 
		}	 
	} 
	
if($num>0) 
{ 
	$exists="Username not available"; 
} 
	
}
	
?>  

<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity= "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous"> 
</head> 
	
<body> 
	
<?php 
	
	if($showAlert) { 
	
		echo ' <div class="alert alert-success 
			alert-dismissible fade show" role="alert"> 
	
			<strong>Success!</strong> Your account is 
			now created and you can login. 
		</div> '; ?>
		<form action="login.html" align="center">
		<input type="submit" value="BACK TO LOGIN">
		</form>
	<?php
} 
	
	if($showError) { 
	
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close"> 
			<span aria-hidden="true">×</span> 
	</button> 
	</div> '; 
} 
		
	if($exists) { 
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close"> 
			<span aria-hidden="true">×</span> 
		</button> 
	</div> '; 
	} 

?> 	
</body> 
</html> 
