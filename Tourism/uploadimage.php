<?php
include "Head.html";
include "db.php";
$tourcode=$_GET['Tourcode'];
?>
<html><br><br><h2 align="center">Upload your images here</h2>
<body>
<form action="upload.php"  method="post" enctype="multipart/form-data" style="margin-left: 120px;">
    <input type="hidden" name="Tourcode" value="<?php echo $tourcode ?>" />
    <input type="file" name="image_gallery[]" multiple><br><br>
    <input type="submit" value="Upload Now" name="submit">
    <input type="button" value="BACK" onclick="history.back()">
</form>
</form>
</body>
</html>