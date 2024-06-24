<?php

$upload_dir = "/home/ato4601/web/Uploads_Spring2024/";

$upload_file = $upload_dir . basename($_FILES['fileToUpload']['name']);

echo "upload_file <br/>";

echo "<p>";

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $upload_file)){
    echo "File is valid and successfully uploaded to: " . $upload_file;

}else {
    echo "Upload FAILED, Please contact Administrator";
    
}

echo "<p>";

echo "<pre>";
echo "Here is some more debugging info";

print_r($_FILES);

echo "</pre>";

header("refresh:30; url=Protected_Spring2024.php");

?>