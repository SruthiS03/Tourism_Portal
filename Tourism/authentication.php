<?php      
        include("db.php");  
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
        $uemail = $username;
        if($username=="admin@gmail.com"){
        header("Location: tourism.php");
       }
        else{
        $sql = "select *from login where user = '$username' and pass = '$password'";  
        $result= $conn->query($sql);
        $row =   $result->fetch_assoc();
        $count = mysqli_num_rows($result); 
        if($count != 1){?>  
              <script>window.alert("Login failed. Invalid username or password")</script>    
              <?php  
        }
        else{
            header("Location: user.php?uemail=$username");   
        }
}
?>  