<?php
	$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

	$image = $_FILES['image']['name'];
	$name = $_POST['name'];

	$imagePath = 'uploads/'.$image;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO t_images(caption,image_path)VALUES('".$name."','".$image."')");


?>
