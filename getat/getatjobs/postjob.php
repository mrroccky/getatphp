<?php  

$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

	$publisher_id = $_POST['publisher_id'];
	//for image
	$image = $_FILES['image']['name'];
	$head_line = $_POST['head_line'];
    $job_type = $_POST['job_type'];
    $job_location = $_POST['job_location'];
    $salary_offred = $_POST['salary_offred'];
    $permanent = $_POST['permanent'];
    $job_descreption = $_POST['job_descreption'];
    $contact = $_POST['contact'];
	//$post_date = $_POST['publisher_id'];

	$imagePath = 'uploads/'.$image;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO saynaa_jobs(publisher_id,image,head_line,job_type,job_location,salary_offred,permanent,job_descreption,contact)VALUES('".$publisher_id."','".$image."','".$head_line."','".$job_type."','".$job_location."','".$salary_offred."','".$permanent."','".$job_descreption."','".$contact."')");




























?>