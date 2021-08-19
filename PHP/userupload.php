<?php
include("connect.php");
include('login.php');

$target_dir = "../Uploads/";
$orig_name = $_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


$up = "UPDATE users SET image_path=$target_file WHERE username=$username";

if (isset($_POST['img_upload'])) {

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $upload_result = mysqli_query($link, $up);
        } else {
            echo "Sorry, there was an error uploading your file." . mysqli_error($upload_result);
            header("location:userupload.php");
        }
    }
}
