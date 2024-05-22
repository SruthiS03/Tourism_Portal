<?php
include "db.php";
$tourcode=$_POST['Tourcode'];
$tableName='img';
if(isset($_POST['submit'])){ 
    echo upload_image($tableName); 
}

  function upload_image($tableName){
   
    $uploadTo = "images/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    $imageName = array_filter($_FILES['image_gallery']['name']);
    $imageTempName=$_FILES["image_gallery"]["tmp_name"];

    $tableName= trim($tableName);

if(empty($imageName)){ 
   $error="Please Select Images..";
   return $error;
}else if(empty($tableName)){
   $error="You must declare table name";
   return $error;
}else{
   $error=$savedImageBasename='';
   foreach($imageName as $index=>$file){
         
    $imageBasename = basename($imageName[$index]);
    $imagePath = $uploadTo.$imageBasename; 
    $imageType = pathinfo($imagePath, PATHINFO_EXTENSION); 

 if(in_array($imageType, $allowedImageType)){ 
    if(move_uploaded_file($imageTempName[$index],$imagePath)){ 
     $savedImageBasename .= "('".$imageBasename."'),";     
    }else{ 
     $error = 'File Not uploaded ! try again';
  } 
}else{
    $error .= $_FILES['file_name']['name'][$index].' - file extensions not allowed<br> ';
 }
 }
    save_image($savedImageBasename, $tableName);
}
    return $error;
}
 function save_image($savedImageBasename, $tableName){
     global $conn, $tourcode;	
      if(!empty($savedImageBasename))
      {
      $value = trim($savedImageBasename, '(,)');
      $saveImage="INSERT INTO img (imgname) VALUES( $value)";
$conn->query($saveImage);      
$saveImage="UPDATE img set Tourcode='$tourcode' where Tourcode=''";
      if($conn->query($saveImage)===TRUE){
        header("Location: adminview.php"); 
       }else{
        echo  "Error: " .  $saveImage . "<br>" . $conn->error;
       }
      }
    }     
    
?>