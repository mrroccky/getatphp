<?php  



$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

//$publisher_id = $_POST['publisher_id'];
$image = $_FILES['image']['name'];
$tital = $_POST['tital'];
$description = $_POST['description'];


$imagePath = 'uploads/'.$image;
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, $imagePath);

$db->query("INSERT INTO corses(image,tital,description)VALUES('".$image."','".$tital."','".$description."')");






?>
