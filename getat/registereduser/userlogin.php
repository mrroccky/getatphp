<?php  

//log in setup for app user  

// req parameters 

// $user_id
// $image
// $f_name
// $l_name
// $mobile_number
// $email
// $password


$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

//$publisher_id = $_POST['publisher_id'];
$image = $_FILES['image']['name'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$password = $_POST['password'];


$imagePath = 'uploads/'.$image;
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, $imagePath);

$db->query("INSERT INTO registereduser(image,f_name,l_name,mobile_number,email,password)VALUES('".$image."','".$f_name."','".$l_name."','".$mobile_number."','".$email."','".$password."')");






?>