<?php


	include ("config.php");


	$id=$_POST['id'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$sql = "UPDATE registereduser SET email='$email',mobile='$mobile',password='$password' WHERE id='$id'";


	if ($connect->query($sql) === TRUE) {
  		echo "Record updated successfully";
	} else {
 		echo "Error updated record: " . $connect->error;
	}


	$connect->close();


?>