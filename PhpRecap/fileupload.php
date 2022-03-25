<?php
$target_path = "e:/";
$target_path = $target_path.basename( $_FILES["fileupload"]["name"]);

if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path)) {
    echo "File uploaded successfully!";
} else{
    echo "Sorry, file not uploaded, please try again!";
}
?>

<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
    select file
    <input type="file" name="fileupload">
    <input type="submit" name="submit" value="upload image">
</form>
</body>
</html>
