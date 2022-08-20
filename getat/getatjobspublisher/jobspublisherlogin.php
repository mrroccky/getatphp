<?php  

//log in setup for jobs publisher 

// req parameters 

// $publisher_id
// $image
// $name
// $about
// $email
// $password
// $mobile_number

$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

//$publisher_id = $_POST['publisher_id'];
$image = $_FILES['image']['name'];
$name = $_POST['name'];
$about = $_POST['about'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile_number = $_POST['mobile_number'];

$imagePath = 'uploads/'.$image;
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, $imagePath);

$db->query("INSERT INTO saynaa_jobs_publisher(image,name,about,email,password,mobile_number)VALUES('".$image."','".$name."','".$about."','".$email."','".$password."','".$mobile_number."')");









?>