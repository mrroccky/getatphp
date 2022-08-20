<?php

include ("config.php");

error_reporting(0);
$cap =$_POST["caption"];
$img=$_FILES['img']["name"];
$name=$_POST["name"];


$path="uploads/".$name;
// file_put_contents($path, base64_decode($img));
 move_uploaded_file(base64_decode($img), $path);

$query ="INSERT INTO t_images(caption,image_path) VALUES ( '$cap','$path')";
   

    if ($connect->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updated record: " . $connect->error;
    }


    $connect->close();










