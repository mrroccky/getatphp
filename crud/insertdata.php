<?php 

	include ("config.php");
	
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$sql = "INSERT INTO registereduser (email, mobile, password) VALUES ('$email','$mobile','$password')";


	if ($connect->query($sql) === TRUE) {
  		echo "Record Added successfully";
	} else {
 		echo "Error Added record: " . $connect->error;
	}


	$connect->close();



	    	   	    
?>